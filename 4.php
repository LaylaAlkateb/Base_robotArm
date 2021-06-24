<?php



if(isset($_POST['Right'])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base";

  $conn= mysqli_connect($servername, $username, $password,$dbname);

  $insert ="insert into dir_4 values('R')";
  if (mysqli_query($conn, $insert  )){
    echo "Successful";
}else{
   echo "Erorr";


}

}


 ?>
