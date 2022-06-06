<?php

 // pegar todos os valores do post    print_r($_POST);
 if(count($_POST)> 0) {

 
 $email = $_POST['email'];
 $senha = $_POST['senha'];


 ////mysql://b67892ce6b0f26:6501b070@eu-cdbr-west-02.cleardb.net/heroku_1f21684f4eb7711?reconnect=true
$servername = "eu-cdbr-west-02.cleardb.net";
 $username = "b67892ce6b0f26";
 $password = "6501b070";

/*
$servername = "Localhost";
 $username = "root";
 $password = "";

*/
 try {
    $conn = new PDO("mysql:host=$servername;dbname=heroku_1f21684f4eb7711", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT id_usuario FROM tbl_usuario WHERE email=:email AND senha=md5(:senha)");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->execute();


   // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    $qtd_usuarios = count(($result));
    if($qtd_usuarios == 1){
       /*
       $resultado["msg"] = "Usuario Encontrado";
       $resultado["cod"] = 1;*/
       return require_once "home.php";
    } else if ($qtd_usuarios == 0) {
      $resultado["msg"] = "Usuario nao Encontrado";
      $resultado["cod"] = 0;
    }

    


 } catch(PDOException $e) {
    echo "Conexão fallhou: " . $e->getMessage();
 }
 $conn = null;
}

include('index.php');
?>