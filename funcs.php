<?php

function db_conn()
{
    try{
        $db_name  = 'bm_db';
        $db_id    = 'root';
        $db_pw    = 'root';
        $db_host  = 'localhost';
        $pdo = new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host,$db_id,$db_pw);
        return $pdo;
    }catch(PDOException $e){
        exit('DB Conenction Error:'.$e->getMessage());
    }
}

function sql_error($stmt)
{
    $error = $stmt->errorInfo();
    exit('SQLERROR:' . print_r($error, true));
}

function redirect($file_name)
{
    header('Location: ' . $file_name);
    exit();
}

?>