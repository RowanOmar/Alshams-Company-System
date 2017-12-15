<?php

include_once("../../common_assets/DB_Commands/admin.class.php");

$Allusers = Admin::viewMarksheet();

?>
<!DOCTYPE html>
<html>
<head>
  <title>view mark sheet</title>

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">


</head>
<body>

<?php include("../../common_assets/includes/includes_header.php");?>


<div id="view_Mark_sheet" >

  <table  class="table table-bordred table-striped">
        <thead> 
                     <th>full name</th>
                      <th> username </th>
                       <th> Email </th>
                       <th> Date of access </th>
                       <th> user type </th>
                       <th> phone </th>
                     </thead>
                      <tbody>
             
  <?php 
    for($i =0; $i < count($Allusers); $i++ )
    {
      echo '
            <tr>
              <td>'.$Allusers[$i]->FirstName ." ". $Allusers[$i]->LastName .'</td>
              <td>'.$Allusers[$i]->UserName.'</td>

              <td>'.$Allusers[$i]->Email.'</td>
              <td>'.$Allusers[$i]->DateofAccess.'</td>
              <td>'.$Allusers[$i]->UserType->userType_name.'</td>
              <td>'.$Allusers[$i]->PhoneNumber .'</td>
            </tr>';
    } ?>
      </tbody> </table>
</div> <!-- end of view mark sheet div -->


</body>
</html>


