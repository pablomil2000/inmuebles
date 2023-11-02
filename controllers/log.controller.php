<?php

class logController
{
    private $date;
    private $file;

    public function __construct()
    {
        $this->date = date("dmY");
        if (file_exists("/logs/{$this->date}")) {
            echo "asd";
            $this->file = fopen("logs/{$this->date}.txt", "a+");
        } else {
            $this->file = fopen("logs/{$this->date}.txt", "a+");
        }
    }

    public function log($code, $url, $log)
    {
        fwrite($this->file, $code . "|" . $url . ": " . implode("|", $log) . "\r\n");
    }
}
