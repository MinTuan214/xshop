<?php
    function insert_taikhoan($email, $user, $pass){
        $sql = "INSERT INTO taikhoan(email,user,pass) VALUES ('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql = "select * from taikhoan where user = '".$user."'AND pass = '".$pass."' ";
        $sp = pdo_query_one($sql);
        return $sp;
    }
?>