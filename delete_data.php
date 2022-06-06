<?php 

    require_once('config2.php');

    $id = $_GET['id_prov'];

    $query = "DELETE FROM tbl_provincia WHERE id_prov='$id'";

    $result = mysqli_query($conn,$query);

    if($result == true){
        header("location:provincia.php");
    }

?>