<?php

if(isset($_POST['do-operation'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$all_operat = $_POST['operat'];
	$result = null;
	
	//da li je neko iput polje ostalo prazno
	if(empty($num1) || empty($num2)) {
		//ako jeste, saljemo ga nazad, u url dodajemo info o gresci i vrednosti koje jesu unete
		header("Location: index.php?error=emptyfields&num1=".$num1."&num2=".$num2);
		exit();
	}
	//da li su u oba polja unete nenumericke vrednosti
	else if(!is_numeric($num1) && !is_numeric($num2)) {
		header("Location: ../signup.php?error=invalidinput");
		exit();
	}
	//da li je u prvo polje uneta nenumericka vrednost
	else if(!is_numeric($num1)) {
		header("Location: ../signup.php?error=invalidinput&num2=".$num2);
		exit();
	}
	//da li je u drugo polje uneta nenumericka vrednost
	else if(!is_numeric($num2)) {
		header("Location: ../signup.php?error=invalidinput&num1=".$num1);
		exit();
	}
	//proveravamo koja operacija je odabrana i racunamo
	else {
		if(strcmp($all_operat,"0") == 0) {
			$result = $num1 + $num2;
			echo "Result: ".$result;
			exit();
		}
		else if(strcmp($all_operat,"1") == 0) {
			$result = $num1 - $num2;
			echo "Result: ".$result;
			exit();
		}
		else if(strcmp($all_operat,"2") == 0) {
			$result = $num1 * $num2;
			echo "Result: ".$result;
			exit();
		}
		else if(strcmp($all_operat,"3") == 0) {
			$result = $num1 / $num2;
			echo "Result: ".$result;
			exit();
		}
	}
	
}
//ako je korisnik stigao ovde bez da je pritisao submit dugme
else {
	header("Location: index.php");
	exit();
}

?>
