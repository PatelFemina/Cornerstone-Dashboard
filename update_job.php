<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "crst_dashboard";
// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		session_start();
		$job_id = $_SESSION["job_id"];
		$project_name = $_POST['project_name'];
		$ticket_date = $_POST['ticket_date'];
		$due_date = $_POST['due_date'];
		$created_by = $_POST['created_by'];
		$estimate_number = $_POST['estimate_number'];
		$special_instructions = $_POST['special_instructions'];
		$materials_ordered = $_POST['materials_ordered'];
		$materials_expected = $_POST['materials_expected'];
		$expected_quantity = $_POST['expected_quantity'];
		
		$mail_class = $_POST['mail_class'];
		$rate = $_POST['rate'];
		$processing_category = $_POST['processing_category'];
		$mail_dim = $_POST['mail_dim'];
		$weights_measures = $_POST['weights_measures'];
		$permit = $_POST['permit'];
		$bmeu = $_POST['bmeu'];
		$based_on = $_POST['based_on'];
		$non_profit_number = $_POST['non_profit_number'];
		
		$data_loc = $_POST['data_loc'];
		$records_total = $_POST['records_total'];
		$domestic = $_POST['domestic'];
		$foreigns = $_POST['foreigns'];
		$data_source = $_POST['data_source'];
		$data_received = $_POST['data_received'];
		$data_completed = $_POST['data_completed'];
		$processed_by = $_POST['processed_by'];
		$dqr_sent = $_POST['dqr_sent'];
		$exact = $_POST['exact'];
		$mail_foreigns = $_POST['mail_foreigns'];
		$household = $_POST['household'];
		$ncoa = $_POST['ncoa'];
		
		$hold_postage = $_POST['hold_postage'];
		$postage_paid = $_POST['postage_paid'];
		$print_template = $_POST['print_template'];
		$special_address = $_POST['special_address'];
		$delivery = $_POST['delivery'];
		$completed = $_POST['completed'];
		$tasks = $_POST['tasks']; 
		$task1 = $_POST['task1'];
		$task2 = $_POST['task2'];
		$task3 = $_POST['task3'];

		$sql = "UPDATE job_ticket SET project_name = '$project_name',ticket_date = '$ticket_date',due_date = '$due_date',created_by = '$created_by',estimate_number = '$estimate_number',special_instructions = '$special_instructions',materials_ordered = '$materials_ordered',materials_expected = '$materials_expected',expected_quantity = '$expected_quantity'  WHERE job_id = $job_id";
		$result = $conn->query($sql) or die('Error querying database.');
		
		$sql1 = "UPDATE mail_info SET mail_class = '$mail_class',rate = '$rate',processing_category = '$processing_category',mail_dim = '$mail_dim',weights_measures = '$weights_measures',permit = '$permit',bmeu = '$bmeu',based_on = '$based_on',non_profit_number = '$non_profit_number' WHERE job_id = $job_id ";
		$result1 = $conn->query($sql1) or die('Error querying database 1.');
		
		$sql2 = "UPDATE mail_data SET data_loc ='$data_loc',records_total ='$records_total',domestic = '$domestic',foreigns = '$foreigns',data_source = '$data_source',data_received = '$data_received',data_completed = '$data_completed',processed_by = '$processed_by',dqr_sent = '$dqr_sent',exact = '$exact',mail_foreigns ='$mail_foreigns',household ='$household',ncoa = '$ncoa' WHERE job_id = $job_id ";
		$result2 = $conn->query($sql2) or die('Error querying database 2.');
		
		$sql3 = "UPDATE production SET  hold_postage = '$hold_postage',postage_paid = '$postage_paid',print_template = '$print_template' , special_address = '$special_address',delivery = '$delivery',completed = '$completed',tasks = '$tasks',task1 = '$task1',task2 = '$task2',task3 = '$task3' WHERE job_id = $job_id ";
		$result3 = $conn->query($sql3) or die('Error querying database 3.');
		
		
 
$conn->close();
header("location: http://localhost/crst_dashboard/job_ticket.php ");
exit();
?>