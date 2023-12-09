<?php



function getReply()
{

    $conn = mysqli_connect("localhost","root","","fitness") or die("Connection failed : " . mysqli_connect_error());

    $sql="SELECT id,subject,created_date,reply FROM showreply";
    $result=$conn->query($sql);

    $conn->close();

    return $result;
    





}
