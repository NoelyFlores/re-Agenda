<?php
  require_once 'C:\AppServ\www\contact\connection\index.php';
  class Agenda{
    protected $name;
    protected $email;
    protected $phone;
    protected $address;
    protected $birthday;
    protected $note;
    protected $code;
    protected $photo;
    function __construct($name,$email,$phone,$address,$birthday,$note,$photo,$code=''){
      $connect=new Connection();
      $this->name=$connect->real_escape_string($name);
      $this->email=$connect->real_escape_string($email);
      $this->phone=$connect->real_escape_string($phone);
      $this->address=$connect->real_escape_string($address);
      $this->birthday=$connect->real_escape_string($birthday);
      $this->note=$connect->real_escape_string($note);
      $this->photo=$connect->real_escape_string($photo);
      $this->code=$connect->real_escape_string($code);
    }
    static function nothingData(){
      return new self('','','','','','','','');
    }
    static function getOnlycode($code){
      return new self('','','','','','','',$code);
    }
    static function getOnlyname($name){
      return new self($name,'','','','','','','');
    }
    function insertAgenda(){
      $connect=new Connection();
      $query="insert into contacts (name,email,phone,address,birthday,note,photo)values('$this->name','$this->email','$this->phone','$this->address','$this->birthday','$this->note','$this->photo')";
      $connect->query($query)? $url='../?successful' : $url='../?failed';
      header('location:'.$url);
    }

    function selectAgenda(){
      $connect=new Connection();
      $query="select *from contacts  where name regexp '$this->name' order by name asc";
      $dataAgenda=$connect->query($query);
      return $dataAgenda;
    }
    function selectContact(){
      $connect=new Connection();
      $query="select *from contacts";
      $dataSelectcode=$connect->query($query);
      return $dataSelectcode;
    }

    function selectDatacode(){
      $connect=new Connection();
      $query="select *from contacts  where code='$this->code'";
      $dataSelectcode=$connect->query($query);
      return $dataSelectcode;
    }

    function deleteAgenda(){
      $connect=new Connection();
      $query="delete from contacts  where code='$this->code'";
      $connect->query($query)? $url='../?successful-delete':$url='../?failed-delete';
      header('location:'.$url);
    }

    function updateAgenda(){
      $connect=new Connection();
      $query="update  contacts set name='$this->name',email='$this->email',phone='$this->phone',address='$this->address',birthday='$this->birthday',note='$this->note',photo='$this->photo' where code='$this->code'";
      $connect->query($query)? $url='../?successful' : $url='../?failed';
      header('location:'.$url);
    }

    // function searchAgenda(){
    //   $connect=new Connection();
    //   $query="select * contacts where name regexp'$this->name'";
    //   $searchList=$connect->query($query);
    //   return $searchList;
    // }

  }

?>
