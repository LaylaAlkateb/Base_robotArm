<?php



if(isset($_POST['left'])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base";

  $conn= mysqli_connect($servername, $username, $password,$dbname);

  $insert ="insert into dir_2 values('L')";
  if (mysqli_query($conn, $insert  )){
    echo "Successful";
}else{
   echo "Erorr";


}

}


 ?>
