<?php

if(isset($_GET["FirstName"])){//show data
  echo $_GET["FistName"];

}else{//show form
  echo 
  '
  <form>
  <form action = "">
  <p>First Name <input type = "text" name = "FirstName /></p>
  <p><input type = "submit" /></p>
  
  </form>
  
  ';

}

?>
