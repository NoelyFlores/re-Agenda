<?php

echo$name=$_POST['name'];
echo$email=$_POST['email'];
echo$phone=$_POST['phone'];
echo$address=$_POST['address'];
echo$birthday=$_POST['birthday'];
echo$note=$_POST['note'];

echo$photo=$_FILES['photo']['name'];
echo$temp=$_FILES['photo']['tmp_name'];
echo$location="../images/".$photo;
copy($temp,$location);


  // $post=isset($_POST['send_data']) ? $_POST['send_data']:'default';
  // include '../class/agenda.php';
  // switch ($post) {
  //   case 'insert':
  //
  //     echo$name=$_POST['name'];
  //     echo$email=$_POST['email'];
  //     echo$phone=$_POST['phone'];
  //     echo$address=$_POST['address'];
  //     echo$birthday=$_POST['birthday'];
  //     echo$note=$_POST['note'];
  //
  //
  //     if(empty($name)||empty($phone)){
  //       header('location:../?fail-empty');
  //     }else{
  //       // if(empty($_FILES['photo']['name'])){
  //         $photo='default.png';
  //       // }else{
  //         // $photo=$_FILES['photo']['name'];
  //         // $temp=$_FILES['photo']['tmp_name'];
  //         // $location="../images/".$photo;
  //         // copy($temp,$location);
  //       // }
  //
  //       $agenda=new Agenda($name,$email,$phone,$address,$birthday,$note,$photo);
  //       $agenda->insertAgenda();
  //     }
  //     break;
  // }

?>
