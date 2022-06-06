<?php
    require_once('config2.php');

    $balcao = $_POST['balcao'];
    $posto = $_POST['posto'];
    $estado = $_POST['estado'];

    echo $balcao;

    $sql = "INSERT INTO tbl_balcao(nome_balcao,id_posto, estado) VALUES ('$balcao','$posto', '$estado')";
    $result = $conn->query($sql);
    
?>