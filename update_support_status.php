<?php
include 'connection.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$response = array('status' => '', 'message' => '');

if(isset($_POST['sd_id']) && isset($_POST['sd_status'])){
    $id = intval($_POST['sd_id']);
    $status = intval($_POST['sd_status']);

    $query = "UPDATE contact_det SET sd_status = $status WHERE sd_id = $id";
    if(mysqli_query($conn, $query)){
        $response['status'] = 'success';
        $response['message'] = 'Status updated successfully.';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error updating status: ' . mysqli_error($conn);
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request parameters.';
}

// Send JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
