<?php
include __DIR__.'/src/Savant3.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];  
$tpl = new Savant3($config);

$tpl->title = "徵稿<span class='anti-none'> - MOPCON Call for Presentations</span>";
$tpl->mainClass = '';

$tpl->content =<<<RAW_HTML
		<div class="anti-♻">
      <p>
        為了議程的多元化，我們將開創以往研討會所沒有的方式：我們將同時徵求演講提案與推薦講者 (讓 MOPCON 大會邀稿) 等兩種方式，讓實戰經驗得以充分呈現給與會的朋友！
      </p>
      <h2>活動辦法</h2>
      <h3>活動時間</h3>
      <ul>
        <li>
          演講議程為即日起至 9/14 。
        </li>
        <li>
          我們將於 9/18 通知您的主題是否入選。
        </li>
      </ul>
      <h3>投稿方式</h3>
      <p>請依照以下格式，填妥報名表單 。</p>
      <h4>演講議程投稿格式</h4>
      <ul>
        <li>演說主題 (30 字以內)</li>
        <li>講者姓名 (網路暱稱亦可)</li>
        <li>目前服務單位與職稱 (若不便透露，可略過)</li>
        <li>主題簡介 (約 150 字介紹)</li>
        <li>預計演說時間 (40 分鐘或 50 分鐘，我們會視情況調整)</li>
        <li>授權方式 (請參考下方影片著作權說明)</li>
      </ul>
      <h4>推薦講者格式</h4>
        <ul>
          <li>欲推薦之講者姓名 (網路暱稱亦可)</li>
          <li>欲推薦之講者聯絡信箱 (可於「推薦原因」欄位補充其他聯絡方式)</li>
          <li>推薦人名稱 (網路暱稱亦可)</li>
          <li>推薦原因：可提及欲推薦之講者擅長的領域</li>
        </ul>
      <h4>入選獎勵</h4>
        <ul>
          <li>一旦您投稿的主題入選，我們將會贈送您大會 T-shirt 一件及 VIP 入場門票一張，以及最高達新台幣 2000 元的交通補助</li>
          <li>一旦您推薦之講者最終得以由 MOPCON 大會依據議程整體考量評估並邀請成功，我們將會贈送 VIP 入場門票一張以及大會紀念品</li>
        </ul>
      <h2>主題說明</h2>
      <p>大會主題以「行動。運算。實體」為主軸，包含但不限於以下：</p> 
      <ul>
        <li>移動通訊軟體開發</li>
        <li>商業操作和社群經營</li>
        <li>雲端服務和終端整合</li>
        <li>穿戴式裝置</li>
        <li>運動健康照護</li>
        <li>遊戲娛樂</li>
        <li>設計思維的實踐</li>
      </ul>
      <h2>演講協助</h2>
      <p>
        當您的主題入選為大會議程，我們將會提供以下協助：
      </p>
      <ul>
        <li>協助主題內容編排，讓您不再為簡報內容太長或太短而煩惱。</li>
        <li>協助製作投影片美化和風格調整。</li>
        <li>於大會議程中進行錄影，並於後製完成後，置放於公開的網路影音平台。</li>
        <li>提供 Open Lab 場地時段，在會場推廣您的行動應用、服務，或者產品。</li>  
      </ul>
      <h2>演講錄影影片之著作權</h2>
      <p>您的演講將會由大會進行錄影，並於後製完成後，置放於公開的網路影音平台；因此，您必須同意大會進行錄影並後製並置放於公開的網路影音平台，並同意以下條件 (擇一) ，我們才可接受您的演講議程投稿：</p>
      <ul>
        <li>授予 MOPCON 錄影後製與透過公開線上影音平台出版之權利；或是</li>
        <li>以 CC BY 3.0 姓名標示方式授權；或是</li>
        <li>以 CC BY-SA 3.0 姓名標示-相同方式授權；或是</li>
        <li>以 CC BY-NC 3.0 姓名標示-非商業性方式授權；或是</li>
        <li>謝絕所有錄音錄影，但接受 MOPCON 工作人員進行文字紀錄</li>
      </ul>
      <div class="bottom-btn">
        <a href="http://mopcon.kktix.cc/events/mopcon2014-cfp" class="btn btn-pink" target="_blank">徵稿連結</a>
      </div>
    </div>
RAW_HTML;

// 輸出畫面
$tpl->display('main.tpl.php');
