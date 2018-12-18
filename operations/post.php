<?php
  $post=isset($_POST['send_data']) ? $_POST['send_data']:'default';
  include '../class/agenda.php';
  switch ($post) {
    case 'insert':

      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $address=$_POST['address'];
      $birthday=$_POST['birthday'];
      $note=$_POST['note'];
      if(empty($name)||empty($phone)){
        header('location:../?fail-empty');
      }else{
        // if(empty($_FILES['photo']['name'])){
        //   $photo='default.png';
        // }else{
          $photo=$_FILES['photo']['name'];
          $temp=$_FILES['photo']['tmp_name'];
          $location="../images/".$photo;
          copy($temp,$location);
        // }

        $agenda=new Agenda($name,$email,$phone,$address,$birthday,$note,$photo);
        $agenda->insertAgenda();
      }
      break;
    case 'update':
    // echo$_POST['send_data'];
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $address=$_POST['address'];
      $birthday=$_POST['birthday'];
      $note=$_POST['note'];
      $code=$_POST['code'];
      if(empty($_POST['photo'])){
        $photo=$_POST['no_select_photo'];
      }else{
        $photo=$_FILES['photo']['name'];
        $temp=$_FILES['photo']['tmp_name'];
        $location="../images/".$photo;
        copy($temp,$location);
      }

      $agenda=new Agenda($name,$email,$phone,$address,$birthday,$note,$photo,$code);
      $agenda->updateAgenda();

      break;
    case 'delete':

      $id_delete=$_POST['code'];

      $agenda=Agenda::getOnlycode($id_delete);
      $array=$agenda->deleteAgenda();

      break;
    case 'default':
      header('location:../?failed-no-send-data');
      break;
  }

?>
