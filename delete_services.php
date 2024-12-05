<?php
session_start();
include 'db.php';

// Check if service ID is provided
if (isset($_POST['delete'])) {
    $serviceId = $_POST['id'];

    // Fetch service details to get the image file name
    $query = "SELECT image FROM services WHERE id = '$serviceId'";
    $result = $conn->query($query);
    $service = $result->fetch_assoc();

    // If service not found, redirect to services list
    if (!$service) {
        header("Location: services.php");
        exit;
    }

    // Delete the image from the file system if it exists
    if ($service['image'] && file_exists("uploads/" . $service['image'])) {
        unlink("uploads/" . $service['image']);
    }

    // Delete the service record from the database
    $query = "DELETE FROM services WHERE id = '$serviceId'";

    if ($conn->query($query)) {
        header("Location: services.php"); // Redirect to services list after deletion
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>