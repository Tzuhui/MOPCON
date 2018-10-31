<?php
namespace MopCon2018\Utils;

use MopCon2018\Utils\GoogleDocsSpreadsheet;
use MopConApi2018\App\Models\MopConResource;
use MopCon\RedisFactory;

class Api
{
    protected $config;
    protected $redis;

    public function __construct()
    {
        $this->config = Base::getConfig();
        $this->fullUrlToAssets = Base::getBaseUri() . '/2018/assets';
        $this->redis = (new RedisFactory())->create();
    }

    public function getSchedule()
    {
        $redis_key = $this->getRedisKey('schedule');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $schedule = MopConResource::getSchedule($this->fullUrlToAssets);
        $scheduleUnconf = MopConResource::getScheduleUnconf();

        $agenda = [];
        foreach (array_unique(array_column($schedule, 'date')) as $date) {
            $items = [];

            $scheduleByDate = array_values(
                array_filter($schedule, function ($row) use ($date) {
                    return $row['date'] == $date;
                })
            );

            $durations = array_unique(array_column($scheduleByDate, 'duration'));
            sort($durations);

            foreach ($durations as $duration) {
                $items[] = [
                    'duration' => $duration,
                    'agendas' => array_values(
                        array_filter($scheduleByDate, function ($row) use ($duration) {
                            return $row['duration'] == $duration;
                        })
                    ),
                ];
            }

            $agenda[] = compact('date', 'items');
        }

        $apiData = [
            'payload' => [
                'agenda' => $agenda,
                'talk' => $scheduleUnconf,
            ],
        ];

        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getSpeaker()
    {
        $redis_key = $this->getRedisKey('speaker');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $apiDataArray = MopConResource::getSpeaker($this->fullUrlToAssets);
        $apiDataArray = array_filter($apiDataArray, function ($row) {
            return !empty($row['speaker_id']);
        });
        $apiData = ['payload' => $apiDataArray];

        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getSponsor()
    {
        $redis_key = $this->getRedisKey('sponsor');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }
        $apiData = new GoogleDocsSpreadsheet(
            MopConResource::getSourceInfo()['googleSheet']['sponsor']['sheetKey'],
            MopConResource::getSourceInfo()['googleSheet']['sponsor']['columns'],
            MopConResource::getSourceInfo()['googleSheet']['sponsor']['sheetGridId']
        );

        $apiDataArray = $apiData->toArray();

        foreach ($apiDataArray as $key => &$value) {
            if (!empty($value['logo'])) {
                $value['logo'] = $this->fullUrlToAssets . '/images/sponsor/' . $value['logo'];
            }
        }
        $apiData = ['payload' => $apiDataArray];

        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    public function getScheduleUnconf()
    {
        $redis_key = $this->getRedisKey('unconf');
        $redis_data = $this->redis->get($redis_key);
        if ($redis_data) {
            return $redis_data;
        }

        $scheduleUnconfData = MopConResource::getScheduleUnconf();
        $apiData = ['payload' => $scheduleUnconfData];

        $apiData_json = json_encode($apiData);
        $this->redis->setex($redis_key, 600, $apiData_json);

        return $apiData_json;
    }

    private function getRedisKey($name)
    {
        return Base::getRedisKey($name);
    }
}
