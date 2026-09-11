<?php

//library

class job {
    public function task(Logger $logger){
        for($i=0;$i<10;$i++){
        //some work is done (video proccessing or wtv)
            $logger->log("Task $i is done!!");
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message){
        echo "$message\n";
    }
}

class NothingLogger implements Logger {
    public function log($message){
        
    }
}

interface Logger {
    public function log($message);
}

//user code
class FileLogger implements Logger {
    public function log($message){
        $file = fopen('Log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

$job = new Job();
$logger = new FileLogger();
$job->task($logger);