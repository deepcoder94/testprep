<?php
session_start();
require 'sqlconfig.php';

$lg = $_GET['lg'];

if($lg == 'logout')
{
  session_unset();
  session_destroy();
  ?>
  <script>
    window.location.href="index.php";
  </script>
  <?php 
}