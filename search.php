<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "tmibd");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "SELECT * FROM country_info WHERE country_desc LIKE '%".$request."%'";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$data[] = $row["country_desc"];
	}
	echo json_encode($data);
}

?>