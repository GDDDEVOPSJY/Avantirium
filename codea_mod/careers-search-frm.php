<?php require "config.php";?>

<?php   $search = $_POST['search'];
$sql = "select * from careers where status =1 and job_position LIKE '%$search%'";
$form_data = array();
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){$i=0;
	while ($row = mysqli_fetch_assoc($result)) {
		$form_data[$i]['job_position']     =  $row["job_position"];
		$form_data[$i]['description']      =  $row["description"];
		$form_data[$i]['location']         =  $row["location"];
		$form_data[$i]['no_of_openings']   =  $row["no_of_openings"];
		$form_data[$i]['image']            =  $row["image"];
		$form_data[$i]['id']            =  $row["id"];
		$i++;
	}
}
echo json_encode($form_data);
?>



                