<?php
include __DIR__ . '/src/init.php';

$schedules = [
       [ 
            "date" => "2015/10/31",
            "timeStart" => "08:30",
            "timeEnd" => "09:00",
            "title" => "MOPCON",
            "summary" => "參加者報到",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "09:00",
            "timeEnd" => "09:15",
            "title" => "MOPCON",
            "summary" => "開幕式",
            "pic" => "images/schedule/mopcon.png",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "活動",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "09:15",
            "timeEnd" => "10:00",
            "title" => "翟本喬 (Ben Jai)",
            "summary" => "開放資料平台",
            "pic" => "images/schedule/benjai.jpg",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "技術",
            "issue" => "翟本喬為台灣第一位跳級生，1999 年赴美取得紐約大學電腦科學博士，2003 年進入Google，成功研發高效率單電壓電源供應器。2010 年回到台灣加入台達電子創立雲端技術中心。2013 年 6 月率原團隊成立和沛科技，積極開發符合雲端運算精神的新產品及服務，並對於台灣創新創業環境多有建言。",
            "speaker" => "翟本喬為台灣第一位跳級生，1999 年赴美取得紐約大學電腦科學博士，2003 年進入Google，成功研發高效率單電壓電源供應器。2010 年回到台灣加入台達電子創立雲端技術中心。2013 年 6 月率原團隊成立和沛科技，積極開發符合雲端運算精神的新產品及服務，並對於台灣創新創業環境多有建言。"
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "10:00",
            "timeEnd" => "10:15",
            "title" => "Take a Break",
            "summary" => "上午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "title" => "Akane Lee",
            "summary" => "使用者要的不是功能！",
            "pic" => "images/schedule/akane.jpg",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "做了功能就會有人來用的思考方式無法留下使用者，使用者真正想要的完全不是功能。透過簡單的使用者經驗研究方法，抓住使用者的渴望與情緒變化，就能推出令人愛不釋手的好產品。",
            "speaker" => "嫁給 RD 的 UI Designer"
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "title" => "邱炫儒 (Sam)",
            "summary" => "Gradle 不只自動化而且更敏捷",
            "pic" => "images/schedule/sam.jpg",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "探討 build script as code 的觀念以及如何善用 Gradle 工具幫助 Android App 的開發。",
            "speaker" => "專注於 Android App 開發的持續整合流程並經常接觸開發維運相關的系統設計，目前服務於 HTC。"
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "title" => "藏鏡人",
            "summary" => "你要藏鏡人，我就給你藏鏡人",
            "pic" => "images/schedule/secret.jpg",
            "room" => "三廳 (R3)",
            "type" => "秘密",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "11:00",
            "timeEnd" => "11:15",
            "title" => "Take a Break",
            "summary" => "上午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "title" => "鄭伊廷 (xdite)",
            "summary" => "Intro to Growth Hacking for developers",
            "pic" => "images/schedule/xdite.jpg",
            "room" => "主廳 (R1)",
            "type" => "營運",
            "issue" => "Growth Hack 是一門在矽谷熱門的行銷技術。但這個名詞對於台灣軟體業的人來說，是一門蒙著神秘面紗的高不可攀的行銷與技術學。傳說產品使用了 Growth Hack 技巧調整體質後，產品就會猛爆性的成長。<br>Growth Hack 的本質是 行銷 + 技術 + 心理學。因為學門牽涉廣泛，入門門檻並不低。所以國內很少人在討論。<br>此次演講就是希望能把這項非常棒的技術引入台灣，並大幅降低門檻。",
            "speaker" => "xdite 是軟體開發者、創業者以及職業講師，曾創立 Logdown 技術部落格平台。目前主力經營 GrowthSchool 線上教育機構，且經營部落格暢談軟體開發、精實創業等議題。專長 Ruby on Rails 敏捷開發，專案管理，Growth Hack。"
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "title" => "陳柏儒 (Blue)",
            "summary" => "如何用 reactjs + web 標準降低大眾進入硬體門檻",
            "pic" => "images/schedule/blue.jpg",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "相較於 Internet of Things (IoT)，近來最紅的另一個名詞 Web of Things (WoT)，就是所有東西 (Things) 都可以透過 Web 標準協議彼此存取與結合。<br>本次主題，講者會以橫跨前端和硬體的背景跟大家分享，以及講者在硬體 IC 設計廠如何利用最潮的語言 (JavaScript) 和框架 (reactjs) 搭配現行的 WoT 標準打造豐富應用的開發版，降低大眾進入硬體的門檻。",
            "speaker" => "目前在聯發科擔任前端工程師，長期專注網頁前端標準技術。現行工作主要參與物聯網議題，致力於降低讓大眾進入硬體門檻的各種可能性。"
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "title" => "周家弘 (SJ)",
            "summary" => "軟體、測試、程式設計家",
            "pic" => "images/schedule/sj.jpg",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "軟體設計是世界上最複雜的工作，我們彷彿就像在鋼索上敲擊鍵盤的小丑，搖搖欲墜。踏實地開發系統與掌握軟體開發節奏是一件重要的事。本議程將分享建構持續整合系統所遭遇的困難與經驗，藉由自動化測試探討軟體品質的重要性，進而實現產品持續交付。希望透過這個機會影響更多開發者對軟體品質的重視。",
            "speaker" => "目前於鴻海擔任工程師，負責開發雲端服務，平常喜歡聽點音樂與寫點部落格 (Soul &amp; Shell Blog)。幾年前曾與日本富士康合作開發系統，從此奠定對軟體品質的堅持。熱愛開發新產品，近年來熱衷於 Web 技術，流連往返於程式設計與軟體架構。"
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "12:00",
            "timeEnd" => "13:00",
            "title" => "Lunch time",
            "summary" => "午餐時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "13:00",
            "timeEnd" => "13:45",
            "title" => "宋志峰 (Anistar)",
            "summary" => "行動測試與發布的秘訣 Tips of Mobile Continuous Delivery",
            "pic" => "images/schedule/anistar.jpg",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "技術",
            "issue" => "一個成功的產品除了『良好的使用者體驗』與『優秀的程式架構』外，另一個關鍵因素就在於『高度可信賴的服務品質』，要能讓使用者隨時都能夠享受到正確的運作結果，繁複的測試流程是免不了。在這場分享中，Anistar 將分享 Yahoo! 的行動開發團隊是如何規劃行動測試的策略，怎麼確保用最短的時間卻能不停的將最新的功能提供給使用者，還有更多有趣的 Yahoo! 開發秘辛。",
            "speaker" => "目前現職服務於雅虎奇摩，負責帶領超級商城與拍賣 APP 開發，專注在專案軟體架構規劃與開發，熱愛分享自己的經驗。具備 10 年以上的專案開發經驗，7 年的專業講師資歷，開發的 Magic Shutter 曾獲得 NewYork Times 推薦最佳前十大攝影軟體推薦。"
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "13:45",
            "timeEnd" => "14:00",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "title" => "藏鏡人",
            "summary" => "你要藏鏡人，我就給你藏鏡人",
            "pic" => "images/schedule/secret.jpg",
            "room" => "主廳 (R1)",
            "type" => "秘密",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "title" => "張逸中",
            "summary" => "雲端影像辨識？算了吧！",
            "pic" => "images/schedule/yccsonar.jpg",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "一個成功的產品除了『良好的使用者體驗』與『優秀的程式架構』外，另一個關鍵因素就在於『高度可信賴的服務品質』，要能讓使用者隨時都能夠享受到正確的運作結果，繁複的測試流程是免不了。在這場分享中，Anistar 將分享 Yahoo! 的行動開發團隊是如何規劃行動測試的策略，怎麼確保用最短的時間卻能不停的將最新的功能提供給使用者，還有更多有趣的 Yahoo! 開發秘辛。",
            "speaker" => "大學畢業才開始寫程式的玩家，因為研究海底地形辨識開始接觸影像辨識，同時鑽研聲納科技，是目前國內唯一可以製作各式聲納軟體的怪咖！40 歲開始教程式設計，52 歲辭去大學教職投入業界，53 歲創業開設公司，主攻影像辨識技術，以在行動裝置中實現各種影像辨識技術為目標。"
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "title" => "藏鏡人",
            "summary" => "你要藏鏡人，我就給你藏鏡人",
            "pic" => "images/schedule/secret.jpg",
            "room" => "三廳 (R3)",
            "type" => "秘密",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "14:45",
            "timeEnd" => "15:15",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "15:15",
            "timeEnd" => "16:00",
            "title" => "Job Fair",
            "summary" => "",
            "pic" => "images/schedule/mopcon.png",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "活動",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "16:00",
            "timeEnd" => "16:15",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "title" => "藏鏡人",
            "summary" => "你要藏鏡人，我就給你藏鏡人",
            "pic" => "images/schedule/secret.jpg",
            "room" => "主廳 (R1)",
            "type" => "秘密",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "title" => "下野健二 (Kenji Shimono)",
            "summary" => "Hacking with the ARM Mobile devices on Linux",
            "pic" => "images/schedule/kenji_shimono.jpg",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "手把手玩 Linux 行動裝置。<br>凝聚志同道合伙伴一起重新架構 Andriod, Chromebook 以及 ARM 等行動裝置。<br>論終止支援 (End of life) 的行動裝置。<br>Let&apos;s play the Mobile devices as Linux.<br>To gather people want to remodel the Android, Chromebook and ARM mobile devices.<br>And I also discussed the 「End of Life the mobile device」.",
            "speaker" => "我目前專注於以 Linux 在各種 ARM 裝置上的 Hacking。(如 Netwaker, DynabookAZ, Nexus7, RaspberryPi, chromebook 等等)<br>除了在東海道的 Linux 使用者社群十分活躍，同時我也經常在日本幾個主流的 Open Source 會議發表演講。<br>I&apos;m playing with Linux hacking of various ARM devices. (about Netwaker, DynabookAZ, Nexus7, RaspberryPi, chromebook and also)<br>I am active in the Tokaido Linux User Group, and I am active in such mainly open source conference in Japan."
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "title" => "林毅祥 (TK)",
            "summary" => "想像力讓技術極致",
            "pic" => "images/schedule/tk.jpg",
            "room" => "三廳 (R3)",
            "type" => "營運",
            "issue" => "<ol><li>我是不是一個技術背景的人。</li><li>廣告科技演進史。</li><li>從客戶需求，讓產品為王。</li><li>解決最有價值的客戶需求。</li><li>想像力讓技術極致。</li></ol>",
            "speaker" => "數位廣告界新銳、創新數位廣告專家。現任 ADPartner 執行長，於 2012 年引進 Facebook sPMD 服務，於 2013 年與國外廠商合作開發需求方廣告平台 (DSP)。目前是唯一可以同時下台灣、大陸廣告的 DSP，覆蓋率達九成五以上。2015 更跨足新加坡、馬來西亞，成為亞太數位跨國廣告企業。"
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "17:00",
            "timeEnd" => "END",
            "title" => "END",
            "summary" => "本日議程結束",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/10/31",
            "timeStart" => "18:00",
            "timeEnd" => "",
            "title" => "Develop Night",
            "summary" => "星光講師 x 開發者之夜",
            "pic" => "images/schedule/mopcon.png",
            "room" => "翰品酒店",
            "type" => "活動",
            "issue" => "想與大神們共進晚餐嗎? 想和台上講者有更進一步的交流嗎? 開發者之夜將實現你的夢想! 為了讓大家能近距離接觸星光閃閃的講師群，我們特別在 2015/10/31 晚間舉辦 Developer Night，把大神講者群集中起來讓大家一次朝聖個夠喔！趕快<a href='http://mopcon.kktix.cc/events/2015-devel-night' target='_blank'>報名參加</a>吧！",
            "speaker" => ""
        ],
       [ 
            "date" => "2015/11/01",
            "timeStart" => "08:30",
            "timeEnd" => "09:00",
            "title" => "MOPCON",
            "summary" => "參加者報到",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "09:00",
            "timeEnd" => "09:30",
            "title" => "MOPCON",
            "summary" => "Announcement",
            "pic" => "images/schedule/mopcon.png",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "活動",
            "issue" => "",
            "speaker" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "09:15",
            "timeEnd" => "10:00",
            "title" => "Doro Wu",
            "summary" => "運用 QNAP Docker 輕鬆打造持續整合開發環境",
            "pic" => "images/schedule/doro.jpg",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "技術",
            "issue" => "Docker 的出現改變了 NAS 軟體生態，過去將軟體移殖到 NAS 上高不可攀的學習曲線已不在在，因應 Docker 和 LXC 的出現，QNAP 推出了 Container Station 來輔助 Container 在 NAS 的使用，如今 NAS 不在只是單純的儲存設備而已，它在運算上也能扮演著不錯的角色。在這場議題中，將分享 QNAP 如何運用 Docker 及 Container Station 在軟體專案上達成持續整合。",
            "speaker" => "Doro Wu 在 QNAP System 擔任專案經理，熱衷於 LXC and Docker 技術，目前在公司負責的專案為 Container Station。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "10:00",
            "timeEnd" => "10:15",
            "title" => "Take a Break",
            "summary" => "上午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "title" => "黃元亨 (Howard Huang)",
            "summary" => "Apple Watch 開發 - 與 Apple 間的愛恨情仇",
            "pic" => "images/schedule/howard.jpg",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "此演講的大綱如下:<ol><li>在 Apple Watch 開賣之前如何順利的完成 Apple Watch App 的開發以及上架到 App Store。</li><li>關於 Apple Watch 開發所需要注意的大小事。</li><li>如何吸引 Apple Marketing team 的注意, 並且成功在 Watch Store 登上 featured list and banner。</li><li>從 Apple Watch App 的開發來看穿戴式裝置 App 的未來。</li></ol>",
            "speaker" => "在加入 Yahoo 前是原型開發工具 POP 的首位 iOS 工程師，熱愛 IoT 以及穿戴式裝置等新奇的領域，負責 Yahoo 新聞跟超級商城 Apple Watch 應用開發的主要工程師，其中 Yahoo 新聞為台灣及香港首波上線的 Apple Watch App 並在 Apple Store 持續獲得特色推薦，想踩在巨人肩上做出吸引更多讓人重新認識 Yahoo 的產品。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "title" => "藏鏡人",
            "summary" => "你要藏鏡人，我就給你藏鏡人",
            "pic" => "images/schedule/secret.jpg",
            "room" => "二廳 (R2)",
            "type" => "秘密",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "10:15",
            "timeEnd" => "11:00",
            "title" => "曾君宇 (魯蛇喬)",
            "summary" => "Agile x API x Documentation @ NGO",
            "pic" => "images/schedule/joe.jpg",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "可汗學院 (KhanAcademy) 是世界上對小朋友最具影響力的線上學習平台，且已在去年年底達到累積達題數 30 億次的驚人數據。而目前國內的均一教育平台則是從數年前從可汗學院 fork 出來的專案開始成長茁壯。本演講將介紹在非營利組織內的小型技術團隊，是如何在一片程式碼汪洋中進行修改、導入敏捷與幫 API 寫上活文件。",
            "speaker" => "魯蛇喬，不知道為什麼一直在寫 JavaScript 的 Tainan.py (Python) 社群聚會發起人。在告別了創業連續失敗家以及放假半年的魯蛇人生以後，目前在誠致教育基金會內擔任軟體工程師，希望讓國內的小朋友透過均一教育平台能夠有另一種學習的可能性。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "11:00",
            "timeEnd" => "11:15",
            "title" => "Take a Break",
            "summary" => "上午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "title" => "吉田太一郎 (Taichiro Yoshida)",
            "summary" => "Deliver Beta App with ChatOps",
            "pic" => "images/schedule/taichiro_yoshida.jpg",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "Typetalk 是 Nulab Inc 所推出的第一款行動 APP，我們將分享其 iOS App 開發過程、架構和如何使用ChatOps 工具將 beta 版提供給公司成員做測試。",
            "speaker" => "吉田先生在日本 Nulab 公司擔任軟體開發者，主要開發 Typetalk 企業即時通的 iOS 版本 App。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "title" => "姜柏任 (RSChiang)",
            "summary" => "跨界的優雅：多平台的 QML 應用程式架構設計",
            "pic" => "images/schedule/rschiang.png",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "“Write once, run anywhere.” 是許多程式開發者的夢想，各種應用程式架構也似雨後春筍般仆繼亮相。然而各平台間的操作方式迴異，程式設計師們又該如何在跨平台應用程式的紅海裏同中求異、維繫使用者的良好體驗呢？在這場演講中，我們將簡介基於 Qt 的 QML 應用程式如何跨平台進行編譯開發，並同時分享維護多平台應用軟體的心得與所需注意的眉角。",
            "speaker" => "RSChiang，臺灣大學法律學系三年級，臺灣大學開源社發起人、SITCON 學生計算機年會副召集人。喜歡在民法債總的課上寫 Python，覺得生活中有兩種程式碼 (code) 是件幸福的事情。<a href='http://poren.tw' target='_blank'>http://poren.tw</a>"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "11:15",
            "timeEnd" => "12:00",
            "title" => "藏鏡人",
            "summary" => "你要藏鏡人，我就給你藏鏡人",
            "pic" => "images/schedule/secret.jpg",
            "room" => "三廳 (R3)",
            "type" => "秘密",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "12:00",
            "timeEnd" => "13:00",
            "title" => "Lunch time",
            "summary" => "午餐時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "13:00",
            "timeEnd" => "13:45",
            "title" => "陳坤助 (KNY)",
            "summary" => "強震即時警報 EEW",
            "pic" => "images/schedule/kny.jpg",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "技術",
            "issue" => "政府提供的公共服務，傳統以來幾乎都是以標案的方式提供，但由於社會的開放與科技的演進，獨立開發者也能有機會直接與官方合作，提供更良善的公共服務，與正向的公私夥伴關係。<br>以 KNY台灣天氣 App 接入氣象局的強震即時警報為例，分享其中的經驗與心得。",
            "speaker" => "<ul><li>KNY Co. 執行長</li><li>中華民國App跨界交流協會 理事長</li><li>台灣開放資料聯盟App組 召集人</li><li>交通部資料開放諮詢小組 諮詢委員</li><li>曾獲Google Play頂尖開發人員徽章</li></ul>國小開始 Coding，全端獨立開發超過 10 年，長期關注與推動台灣 App 與Open Data 的發展。希望能透過科技與開放的力量，改善社會問題與建構更美好的未來"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "13:45",
            "timeEnd" => "14:00",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "title" => "許益祥 (Marty)",
            "summary" => "IoT 就是要結合 Mobile 啊，不然要幹嘛?",
            "pic" => "images/schedule/marty.jpg",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "當東西都連上網，Mobile 就成了最方便的管理控制器。<br>此議程將從技術角度分享些實例，說明 Mobile 是如何串接 IoT 裝置、使用 Raspberry、Arduino 做為 IoT 的優缺點及完整的通訊方式介紹。<br>想要了解 IoT 怎麼結合 Mobile？怎麼自己動手打造 IoT？千萬別錯過本次議程。",
            "speaker" => "一個從後端一直玩，一直玩到前端的技術狂熱者，喜歡將複雜技術經由封裝成元件，讓更多開發者能組裝出有趣的應用或 App。今年更在 Arduino 上發展出 Webduino，有趣又有料的控制 Arduino 方式準備蔓延到 Mobile 上面囉 ~"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "title" => "Lancelot Wu",
            "summary" => "功能完整 && 操作便利 = null?",
            "pic" => "images/schedule/lancelot_wu.jpg",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "對 APP 開發方而言，提供的功能越是完整就越能顯現出其產品的核心和優於他人產品的價值，但對手機使用者來說，其對 APP 的訴求幾乎都是操作方便性遠大於功能完整性，如何在兩者之間取得平衡一直都是 APP 開發者的難題。 透過比較市場上 APP 其功能完整性與操作便利性，加上使用者經驗測試結果，歸納出幾項設計原則，提供 APP 開發者作為介面與功能設計時的參考。",
            "speaker" => "台灣新蛋股份有限公司工程師，主要負責業務包含產品後台的開發與維護等。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "14:00",
            "timeEnd" => "14:45",
            "title" => "Carl Su",
            "summary" => "手機自動化測試和持續整合",
            "pic" => "images/schedule/carl.jpg",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "<ol><li>手動測試曠日廢時，原始碼變化太快。</li><li>前天測試沒有問題，現場操作就炸了！</li></ol>本主題試圖提供通用的解決方案，無論您的平台是 iOS, Android 還是 Firefox OS，都能透過自動化測試工具和 CI/CD，驗證產品可靠度，降低開發和測試成本，提升軟體品質。",
            "speaker" => "具有軟體測試和 CI/CD 導入經驗，熟悉自動化工具和雲端平台。認同開源理念，平時亦參與開源專案 (Mozilla, Google, Docker)。樂於分享知識和經驗。除了公開演講，也會舉辦讀書會和工作坊。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "14:45",
            "timeEnd" => "15:15",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "15:15",
            "timeEnd" => "16:00",
            "title" => "Jeremy Lu",
            "summary" => "React Native 帶來的跨平台 mobile app 開發典範轉移",
            "pic" => "images/schedule/jeremylu.jpg",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "Mobile app 曠日費時、成本高昂且人才難尋，長久以來一直是業界無解的難題，Facebook 於 2015 年推出的 React Native 將從根本解決此問題，本場將為聽眾深入淺出的介紹它帶來的創新技術與手   法如何從根本上點燃了 mobile app 開發的典範轉移。",
            "speaker" => "現於美國擔任技術顧問，協助客戶組建開發團隊、教育訓練、導入現代化開發流程與確保程式品質，主要服務對象為企業與新創公司。同時在台灣主持 FullStackRocks.com 提供專業教育訓練，持續將北美最新技術訊息帶回與本地開發者共享。目前也是 Facebook Reactjs.tw 社團共同管理員。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "15:15",
            "timeEnd" => "16:00",
            "title" => "吳姿穎 (Muki)",
            "summary" => "打造行動裝置網站的經驗談",
            "pic" => "images/schedule/muki.jpg",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "響應式設計？手機網站設計？揪竟要如何做出，讓低頭族也愛瀏覽的網站呢？今天咱們不碰程式碼，只聊設計，志在與大家分享我的低頭族網站設計經驗。",
            "speaker" => "拾木空間總兼，經營文具社群與文具銷售，同時也是網站設計師與講師。<br>著作包含 2 本 WordPress 書、1 本手帳整理術，以及譯作 2 本 WordPress 書。<br>喜愛推廣與學習 HTML, CSS, 與 jQuery，興趣是在跨界與自我挑戰中成長，從事過設計、前端、行銷與專案管理等工作。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "15:15",
            "timeEnd" => "16:00",
            "title" => "藏鏡人",
            "summary" => "你要藏鏡人，我就給你藏鏡人",
            "pic" => "images/schedule/secret.jpg",
            "room" => "三廳 (R3)",
            "type" => "秘密",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "16:00",
            "timeEnd" => "16:15",
            "title" => "Take a Break",
            "summary" => "下午中場休息時間",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "title" => "Ben Lue",
            "summary" => "Hack & Go 2",
            "pic" => "images/schedule/ben_lue.png",
            "room" => "主廳 (R1)",
            "type" => "技術",
            "issue" => "<ul><li>API 正在吞噬軟體。</li><li>API 大調查—現有服務商調查分析。</li><li>大家一起 Hack。</li></ul>",
            "speaker" => "獨立軟體開發者。旅美期間曾在 IBM Almaden Research Center, Cognos Inc. 等公司工作。所創立的 NetClue Corp. 為多家公司的收購目標。返台後喜歡自造軟體，現為 COIMOTION API 總架構師。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "title" => "藍永倫 (yllan)",
            "summary" => "全天下男人都會犯的錯：密碼學",
            "pic" => "images/schedule/yllan.jpg",
            "room" => "二廳 (R2)",
            "type" => "技術",
            "issue" => "那些年，我們一起修過的密碼學，我相信每個程式開發者心中，都有一個 RSA。然而有些太年輕犯下的錯誤，長大了才瞭解，回味起來卻是無限懷念。<br>本次演講分析一些歷史上著名的密碼系統漏洞原理，並介紹一些加密實作上常見的錯誤（包括講者本人誠心懺悔告解）。",
            "speaker" => "SOLDA 創辦人，專長為 iOS / Mac 開發。較多人知道的專案為 Mac 上的 BBS App。單車界弗利札。曾參加並完成所有的 Matasano Crypto Challenge。"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "16:15",
            "timeEnd" => "17:00",
            "title" => "Ian",
            "summary" => "Windows 10 UWP + Azure 創造開發 APP 的新思維",
            "pic" => "images/schedule/ian.png",
            "room" => "三廳 (R3)",
            "type" => "技術",
            "issue" => "Windows 10 UWP (Universal Windows Platform) 基於 common Windows Core 概念，提出建置單一 App，便能在 Windows 10 的各種裝置上使用，從以往針對 PC、平版、手機的 App，擴展至 Xbox, IoT, HoloLens 等裝置。基於 UWP 設計的 App 將不再挶限於手機及平版。<br>本次議題將涵蓋 UWP 概念、UWP + Azure for Raspberry Pi Demo。",
            "speaker" => "<ul><li>連任四屆 <a href='https://mvp.microsoft.com/en-us/PublicProfile/4039711?fullName=Ian%20%20Chen' target='_blank'>Microsoft ASP.NET MVP</a></li><li>TechDays Taiwan 2014/2015講師</li><li>2015 微軟實戰課程日講師</li><li>K.NET 社群共同創辧人及講者</li><li>HTML5 &amp; JavaScript 程式開發實戰書籍共同作者</li></ul>"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "17:00",
            "timeEnd" => "17:30",
            "title" => "Lighting Talk",
            "summary" => "兩分鐘限時閃電秀",
            "pic" => "images/schedule/mopcon.png",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "活動",
            "issue" => "來跟大家分享任何事情吧！給你一隻麥克風！只要你敢上台，MOPCON 的會眾就是你的聽眾！沒有投影片也沒關係，Lighting Talk 只考驗你的時間掌控力，限時兩分鐘，時間一到音控妹妹不留情的唷！",
            "speaker" => "Is you!!! 當日大會開放報名，名額有限，請密切注意大會消息！"
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "17:30",
            "timeEnd" => "18:00",
            "title" => "MOPCON",
            "summary" => "閉幕式",
            "pic" => "images/schedule/mopcon.png",
            "room" => "主廳 (R1) / 全廳聯播",
            "type" => "活動",
            "issue" => "",
            "speaker" => ""
        ],
        [ 
            "date" => "2015/11/01",
            "timeStart" => "18:00",
            "timeEnd" => "END",
            "title" => "END",
            "summary" => "今年議程結束，明年見～",
            "pic" => "images/schedule/mopcon.png",
            "room" => "",
            "type" => "",
            "issue" => "",
            "speaker" => ""
        ]
];

$params = [
    'pageid' => 'schedule',
    'schedules' => $schedules,
];


render('schedule.twig', $params);
