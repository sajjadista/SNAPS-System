<?php
	session_start();
	require_once "pdo.php";
	
	$_SESSION['pid'] = $_GET['pid'];
	$productid = $_SESSION['pid'];

  $stmt = $pdo->prepare("SELECT * from product where pid = :pid");
  $stmt->execute(array(":pid" => $productid));
  $deal = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $stmt1 = $pdo->prepare("DELETE FROM cart where pid = :pid");
  $stmt1->execute(array(":pid" => $productid));
  $stmt2 = $pdo->prepare("DELETE FROM purchase where pid = :pid");
  $stmt2->execute(array(":pid" => $productid));
	$stmt = $pdo->prepare("DELETE FROM product where pid = :pid");
  if ($stmt->execute(array(":pid" => $productid))) {
    $_SESSION['error'] = "Product deleted";
            header("Location: admin-product.php");
            return;
  }
  else {
    header('HTTP/1.1 9988 Error');
    die(json_encode(array('message' => 'DELETE ERROR', 'code' => 9988)));
  }

?>