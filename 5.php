<?php



if(isset($_POST['backward'])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base";

  $conn= mysqli_connect($servername, $username, $password,$dbname);

  $insert ="insert into dir_5 values('B')";
  if (mysqli_query($conn, $insert  )){
    echo "Successful";
}else{
   echo "Erorr";


}

}


 ?>
