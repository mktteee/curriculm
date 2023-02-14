<?php
    $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable ($testFile)) {
       
        $fp = fopen ($testFile, "w");
        
        fwrite ($fp, $contents);
        
        fclose ($fp);
        
        echo "finish writing!!";
    } else {
        
        echo "not writable!";
        exit;
    }