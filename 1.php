<?php



if(isset($_POST['forword'])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base";

  $conn= mysqli_connect($servername, $username, $password,$dbname);

  $insert ="insert into dir_1 values ( 'F');";
 if (mysqli_query($conn, $insert  )){
     echo "Successful";
 }else{
    echo "Erorr";


 }

}


 ?>
