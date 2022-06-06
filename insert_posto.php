<?php
    require_once('config2.php');

    $posto = $_POST['posto'];
    $nome_prov = $_POST['prov_name'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO tbl_posto(id_prov, nome_posto, estado) VALUES ('$nome_prov','$posto', '$estado')";
    $result = $conn->query($sql);
    
?>