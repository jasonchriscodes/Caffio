<?php
    $db_name = 'mysql:host=sql212.infinityfree.com;dbname=if0_42278858_caffio_db';
    $user_name = 'if0_42278858';
    $user_password = 'j1rh8OMYdKhUA';
    $conn = new PDO($db_name, $user_name, $user_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    function unique_id() {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charLength = strlen($chars);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $chars[mt_rand(0, $charLength - 4)];
        }
        return $randomString;
    }
?>