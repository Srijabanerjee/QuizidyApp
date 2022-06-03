<?php
session_start();


if($_SESSION['username']==""){
  header('location:log.php');

}
else {
  header("location:loopy.php");
}

?>
