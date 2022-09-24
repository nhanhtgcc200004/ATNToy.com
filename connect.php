<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://ottdefdzvmlvfa:2a7349defe5b2e36a5d93691a84caa045a069879be0a7bb0a9b72441153b64e7@ec2-52-200-5-135.compute-1.amazonaws.com:5432/dbadql7hhbojeh
    ");
    //$Connect = pg_connect("host=ec2-52-200-5-135.compute-1.amazonaws.com port=5432 dbname=dbadql7hhbojeh");
	//$Connect = pg_connect("host=ec2-52-200-5-135.compute-1.amazonaws.com port=5432 dbname=dbadql7hhbojeh user=ottdefdzvmlvfa password=2a7349defe5b2e36a5d93691a84caa045a069879be0a7bb0a9b72441153b64e7");
	
    if (!$Connect) {
        die("Connection failed");
    }
?>