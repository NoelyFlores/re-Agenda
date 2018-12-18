<?php
  // if(isset($_POST['btn'])){
    // echo'aa';
    // echo$post=$_POST['btn'];
    // echo$_POST['a'];
    echo$photo=$_FILES['photo']['name'];
    echo$temp=$_FILES['photo']['tmp_name'];
    echo$name=$_POST['name'];
    echo$phone=$_POST['phone'];
    echo$email=$_POST['email'];
    $ruta='../images/'.$photo;
    copy($temp,$ruta);
    echo'Uplaod';
  // }else{
  //   echo 'no add';
  // }

 ?>
