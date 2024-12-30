<?php

function deldm($id){
    $conn=connectdb();
    $sql = "DELETE FROM danhmuc WHERE id_dm=".$id;
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getonedm($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM danhmuc where id_dm=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function updatedm($id, $tendm){
    $conn=connectdb();
    $sql = "UPDATE danhmuc SET ten_dm='".$tendm."' WHERE id_dm=".$id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function themdm($tendm){
    $conn=connectdb();
    $sql = "INSERT INTO danhmuc (ten_dm)
    VALUES ('$tendm')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getall_dm(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM danhmuc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>