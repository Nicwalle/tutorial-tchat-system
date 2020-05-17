<?php

    include '../functions/main-functions.php';
    $user = $_SESSION['user'];
    $membre = $_SESSION['tchat'];
    $message = htmlspecialchars(trim($_POST['message']));

    $i = array(
        'sender' => $membre,
        'receiver' =>$user,
        'message'=>$message
    );

    $sql = "INSERT INTO messages(sender,receiver,message,date) VALUES(:sender,:receiver,:message,NOW())";
    $req = $db->prepare($sql);
    $req->execute($i);