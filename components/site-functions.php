<?php
	function hello($argument){
		return "Tere $argument";
	}

	function redirect_to($argument2){
		header("Location: " . $argument2);
	}
?>