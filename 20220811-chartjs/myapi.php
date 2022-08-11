<?php

    header("Access-Control-Allow-Origin: *");
    //所有人都可以進

    //init 初始化curl

    //$ch = curl_init();
    $ch = curl_init ("https://data.ntpc.gov.tw/api/datasets/1016BB4C-E8EB-4113-A2BE-657FB51A1558/json?page=0&size=100");
    //信任認為認證


    //要驗證伺服器 SSL 憑證，當拜訪 https 網站時，若未做任何 SSL 相關設定，會出現錯誤
    // 設為 false 為可以接受任何伺服器憑證
    // 可以參考 https://www.plurk.com/p/e797gs
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    
    // 將 curl_exec() 獲取結果以文字串方式返回，而不是直接印出。
    // 如果你只是要轉給前端可以不寫此行（預設 false)，剛好省下最後的 echo 動作
    // 反之為 true 可事後要做 echo 給前端（用 Ajax 來取）或透過 php 輸出 HTML



    //如果要傳回結果，不會輸出在畫面上，傳給前端js記得要輸入這行;
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36");


    //curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0");
    
    $output = curl_exec ($ch);

    //var_dump($output);
    echo($output)

?>