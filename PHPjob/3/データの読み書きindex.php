<?php
    //書き込み
    $testFile = "test.txt";
    $contents = "おはよう！";
    
    if (is_writable ($testFile)) {
       
        $fp = fopen ($testFile, "w");
        
        fwrite ($fp, $contents);
        
        fclose ($fp);
        
        echo "finish writing!!";
    } else {
        
        echo "not writable!";
        exit;
    }

    
    //読み込み
    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        
        $fp = fopen($test_file, "r");
        //開いたファイルを1行ずつ読み込む
        while ($line = fgets($fp)) {
           //改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        
        fclose($fp);
    } else {
        
        echo "not readable!";
        exit;
    }
   
?>