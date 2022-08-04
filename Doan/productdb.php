<?php 
	
	function getData(){
		$conn = mysqli_connect("localhost","root", "") or die ("Connected false");
		mysqli_select_db($conn, "doan") or die ("Connected false");
		$sql = "SELECT * FROM producttb WHERE type LIKE '%new%'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			return $result;
		}
		
	}
	function getData0(){
		$conn = mysqli_connect("localhost","root", "") or die ("Connected false");
		mysqli_select_db($conn, "doan") or die ("Connected false");
		$sql = "SELECT * FROM producttb";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			return $result;
		}
		
	}
	function getData1(){
		$conn = mysqli_connect("localhost","root", "") or die ("Connected false");
		mysqli_select_db($conn, "doan") or die ("Connected false");
		$sql = "SELECT * FROM producttb WHERE type LIKE '%wibu%'";
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			return $result;
		}
	}

	function getData2(){
		$conn = mysqli_connect("localhost","root", "") or die ("Connected false");
		mysqli_select_db($conn, "doan") or die ("Connected false");
		$sql = "SELECT * FROM producttb WHERE type LIKE '%game%' LIMIT 8";
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			return $result;
		}
	}

	function getData3(){
		$conn = mysqli_connect("localhost","root", "") or die ("Connected false");
		mysqli_select_db($conn, "doan") or die ("Connected false");
		$sql = "SELECT * FROM producttb WHERE type LIKE '%longhand%' LIMIT 5";
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			return $result;
		}
	}
	function getData4(){
		$conn = mysqli_connect("localhost","root", "") or die ("Connected false");
		mysqli_select_db($conn, "doan") or die ("Connected false");
		$sql = "SELECT * FROM producttb WHERE type LIKE '%sweater%' LIMIT 5";
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			return $result;
		}
	}
	function getData5(){
		$conn = mysqli_connect("localhost","root", "") or die ("Connected false");
		mysqli_select_db($conn, "doan") or die ("Connected false");
		$sql = "SELECT * FROM producttb WHERE type LIKE '%hoodie%' LIMIT 5";
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0){
			return $result;
		}
	}
?>



<!-- Modal -->



