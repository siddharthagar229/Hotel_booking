<?php  


if (isset($_POST['dest']) && isset($_POST['cdate']) && isset($_POST['odate']) && isset($_POST['adult']) && isset($_POST['child'])) {
	include 'db.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$dest = validate($_POST['dest']);
    $cdate = validate($_POST['cdate']);
    $odate = validate($_POST['odate']);
    $adult = validate($_POST['adult']);
    $child = validate($_POST['child']);

	if (empty($dest) || empty($cdate) || empty($odate) || empty($adult) || empty($child)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO booked(dest, cdate, odate, adult, child) VALUES('$dest', '$cdate', '$odate', '$adult', '$child')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}