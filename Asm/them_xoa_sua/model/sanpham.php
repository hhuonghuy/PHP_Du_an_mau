<?php
function getall_sanpham(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM baiviet");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function insert_sanpham($iddm, $tensp, $img){
    $conn=connectdb();
    $sql = "INSERT INTO baiviet (id_dm, ten_baiviet, hinh)
    VALUES ('$iddm', '$tensp', '$img')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function getonesp($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM baiviet where id_baiviet=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

function updatesp($id, $tensp, $img, $gia, $iddm){
    $conn=connectdb();
    if($img==""){
        $sql = "UPDATE baiviet SET ten_baiviet='".$tensp."', gia='".$gia."', id_dm='".$iddm."' WHERE id_baiviet=".$id;
    }
    else{
        $sql = "UPDATE baiviet SET ten_baiviet='".$tensp."', gia='".$gia."', id_dm='".$iddm."', hinh='".$img."' WHERE id_baiviet=".$id;
    }
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function delsp($id){
    $conn=connectdb();
    $sql = "DELETE FROM baiviet WHERE id_baiviet=".$id;
    // use exec() because no results are returned
    $conn->exec($sql);
}




?>