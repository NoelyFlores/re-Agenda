<?php
$photo=$_FILES['photo']['name'];
$temp=$_FILES['photo']['tmp_name'];
$location="images/".$photo;
copy($temp,$location);
 ?>
