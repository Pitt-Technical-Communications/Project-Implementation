<?php

    $fText= "";
    $numInQ = 0;
    $curWait = 0;

    //.= append string
    function loadFile(){
        $queueFile= fopen("queue.txt", "r") or die("Unable to open file!");
        $curTime= ((int)(date("H"))*60*60)+((int)(date("i"))*60)+((int)(date("s")));
        while(!feof){
            $cName=fgets();
            $cTime=(int)(fgets());
            if(cTime>curTime){
                fText.=(cName . "\n" . cTime . "\n");
                $numInQ++;
                $curWait+=$cTime-$curTime;
            }
        }

    }

    if(array_key_exists('subBut'), $_POST){
        submitClick();
    }
    function submitClick(){
        $queueFile= fopen("queue.txt", "r+") or die("Unable to open file!");
        $nextName = $_POST["nameSub"];
        $nextSize = (int)($_POST["numSub"]);

        //Should record time in seconds
        $curTime= ((int)(date("H"))*60*60)+((int)(date("i"))*60)+((int)(date("s")));

        while(!feof($queueFile)){}
        //I've never worked in php before I'm gonna need to get creative.
        fwrite($queueFile, $nextName . "\n");
        fwrite($queueFile, $nextSize . "\n");
        
        fclose($queueFile);
    }

?>