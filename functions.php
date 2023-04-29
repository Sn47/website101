<?php



function maxUserId(){
    include("connection.php");
    $query = "SELECT MAX(UserId) AS maximum FROM users";
    $result= mysqli_query($con,$query);
    $row = mysqli_fetch_array($result); 
    return $row['maximum'] +1;
}

?>