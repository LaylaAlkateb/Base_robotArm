<?php



if(isset($_POST['Stop'])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base";

  $conn= mysqli_connect($servername, $username, $password,$dbname);

  $insert ="insert into dir_3 values( 'S')";
  if (mysqli_query($conn, $insert  )){
    echo "Successful";
}else{
   echo "Erorr";


}

}


 ?>
