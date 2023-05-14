<?php

$defImg = addSlashes(file_get_contents('orangeone.png'));
include ("connection.php");

$query = "insert into products (Name,City,Price,Detail,History,Ingredients,img1) values ('GulabJamun2','text',5.4,'sdf','sdf','sdf','$defImg')";
if(!mysqli_query($con,$query)){
    echo 'Query Failed';
}
else{
    echo "Query Ran";
}