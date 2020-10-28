<?php
    loadFile();

    //.= append string
    function loadFile(){

    }

    if(array_key_exists('subBut'), $_POST){
        submitClick();
    }
    function submitClick(){
        $queueFile= fopen("queue.txt", "r+") or die("Unable to open file!");
        $nextName = $_POST["nameSub"];
        $nextSize = $_POST["numSub"];
        while($nextName ){}
        //I've never worked in php before I'm gonna need to get creative.
        fwrite($queueFile, $nextName);
        fwrite($queueFile, $nextName);
        
        fclose($queueFile);
    }

?>