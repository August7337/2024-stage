<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $jsonData = file_get_contents("php://input");
        $data = json_decode($jsonData, true);

        $mail = $data['mail'];
        $pass = $data['pass'];

        if ($mail != '' && $pass != '') {
            $arr = array("response" => true);
        } else{
            $arr = array("response" => false);
        }

        echo json_encode($arr);
    }
?>