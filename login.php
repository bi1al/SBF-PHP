<?php
include_once('connection.php');
if(isset($_POST['submit'])){
 $uname = $_POST['uname'];;
 $pass  = $_POST['psw'];

if(empty($uname)){
echo $msg = "incorrect username";
}
else if(empty( $pass )){
echo $msg = "incorrect password";
}
else if($uname == "danialamin" && $pass == "8224339")
{
    header("Location:list.php") ;
}
 
else{
  echo $msg = "incorrect username or password";
}
}
?>
