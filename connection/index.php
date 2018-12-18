<?php

  class Connection extends mysqli{

    private $server='127.0.0.1';
    private $user='root';
    private $password='123';
    private $database='contact';

    function __construct(){
      parent::__construct($this->server,$this->user,$this->password,$this->database);
      $this->set_charset('utf-8');
      $this->connect_errno ? $c='Not connected':
      $c='noeConnected';      
    }
  }
  $connect=new Connection();
?>


