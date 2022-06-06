<?php 

    require_once('config.php');

    $id = $_POST['id_balcao'];

    $name = $_POST['nome_balcao'];

    $posto = $_POST['id_posto'];

    $estado = $_POST['estado'];

    

    $query = "UPDATE tbl_balcao SET fullname='$name' ,email='$email' WHERE id='$id'";

    $result = mysqli_query($conn,$query);

    if($result == true){
        header("location:index.php");
    }

?>