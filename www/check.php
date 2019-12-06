<?php
    $p = $_POST ["+"];
	if ($p == "+") {
		header("Location:p.php");
	}
	$m = $_POST ["-"];
	if ($m == "-") {
		header("Location:m.php");		
	}
	$u = $_POST ["*"];
	if ($u == "*") { 
		header("Location:u.php");
	}
	$d = $_POST ["/"];
	if ($d == "/") { 
		header("Location:d.php");
	}
?>