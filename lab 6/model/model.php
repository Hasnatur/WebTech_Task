<?php 

require_once 'db_connect.php'; 
   

function showAllUser(){
	$conn = db_conn(); 
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
       // echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($ID){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where `ID` = ? ";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$ID]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (name, surname, username, password, image)
VALUES (:name, :surname, :username, :password, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':surname' => $data['surname'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateUser($ID, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set name = ?, surname = ?, username = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['surname'], $data['username'], $ID
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteUser($ID){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$ID]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}