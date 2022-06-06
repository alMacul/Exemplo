<?php
    require_once('config2.php');

    $name = $_POST['prov_name'];
    $email = $_POST['estado'];

    $sql = "INSERT INTO tbl_provincia(nome_prov,estado) VALUES ('$name','$email')";
    $result = $conn->query($sql);
    
?>