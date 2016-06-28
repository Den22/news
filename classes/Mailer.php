<?php

namespace Application\Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Mailer extends PHPMailer
{
    public $priority = 3;
    public $to_name;
    public $to_email;
    public $From = null;
    public $FromName = null;
    public $Sender = null;


    function Mailer()
    {
        global $config;
        $this->CharSet = "UTF-8";
        if ($config['site']['smtp_mode'] == 'enabled') {
            $this->Host = $config['site']['smtp_host'];
            $this->Port = $config['site']['smtp_port'];
            if ($config['site']['smtp_username'] != '') {
                $this->SMTPAuth = true;
                $this->Username = $config['site']['smtp_username'];
                $this->Password = $config['site']['smtp_password'];
            }
            $this->Mailer = "smtp";
        }
        if (!$this->From) {
            $this->From = $config['site']['from_email'];
        }
        if (!$this->FromName) {
            $this->FromName = $config['site']['from_name'];
        }
        if (!$this->Sender) {
            $this->Sender = $config['site']['from_email'];
        }
        $this->Priority = $this->priority;
    }
}