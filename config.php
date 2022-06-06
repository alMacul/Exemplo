<?php
    //mysql://b67892ce6b0f26:6501b070@eu-cdbr-west-02.cleardb.net/heroku_1f21684f4eb7711?reconnect=true
    //$mysqli = mysqli_connect("Localhost", "root", "", "dnic_bd") or die(mysqli_error($mysqli));
   $mysqli = mysqli_connect("eu-cdbr-west-02.cleardb.net", "b67892ce6b0f26", "6501b070", "heroku_1f21684f4eb7711") or die(mysqli_error($mysqli));
    //$connection = new MySQLi("eu-cdbr-west-02.cleardb.net", "b12f634c8e210d", "dbb1c759", "heroku_7fc43f5291130e0");
?>