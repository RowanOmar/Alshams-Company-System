<?php

	include_once("../../common_Assets/DB_Commands/Connect_DB.php");
  getsup();

  function getsup()
  {
  $mycall =  ServerCommunications::getInstance();
  $searchTerm = $_GET['term'];
  $sql="SELECT Fname,Lname from users where Fname Like '%".$searchTerm."%' AND User_type_id ='12'";
  $result = mysqli_query($mycall->start , $sql) or die(mysqli_error($mycall->start));

   while($row = $result->fetch_assoc()){
      $name[]=$row['Fname'].' '.$row['Lname'];
    }
    echo json_encode($name);
  }


  ?>

