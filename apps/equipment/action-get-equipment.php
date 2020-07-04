<?php
require '../../include/connect.php';
$employee = '';
$id = $_POST['id'];
$sql = 'SELECT * FROM equipment WHERE equ_id = \''. $id .'\'';

$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) { 
        $equipment = $row;
    }
}

echo json_encode ($equipment);

?>