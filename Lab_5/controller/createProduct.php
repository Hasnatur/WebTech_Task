<?php 
require_once '../model/model.php';

function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into products (name, s_price, b_price, profit, display)
VALUES (:name, :s_price, :b_price, :profit, :display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':s_price' => $data['s_price'],
        	':b_price' => $data['b_price'],
        	':profit' => $data['profit'],
        	//':display' => $data['display']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
?>
