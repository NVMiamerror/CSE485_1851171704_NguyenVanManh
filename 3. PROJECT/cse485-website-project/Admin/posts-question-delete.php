<?php
    include 'Config/config.php';
    $sql = "delete from questions where ID = '".$_GET['del_id']."'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location:posts-question-index.php');
    }
?>