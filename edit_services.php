<?php
session_start();
include 'db.php';

// Check if service ID is provided
if (isset($_GET['id'])) {
    $serviceId = $_GET['id'];

    // Fetch service details from the database
    $query = "SELECT * FROM services WHERE id = '$serviceId'";
    $result = $conn->query($query);
    $service = $result->fetch_assoc();

    // If service not found, redirect to services list page
    if (!$service) {
        header("Location: services.php");
        exit;
    }
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $imageName = $service['image']; // Preserve the current image

    // If a new image is uploaded, handle the file upload
    if (!empty($_FILES["image"]["tmp_name"])) {
        // File upload configuration
        $targetDir = "uploads/";
        $imageName = basename($_FILES["image"]["name"]);
        $targetFile = $targetDir . $imageName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $uploadOk = 1;

        // Validate if the file is an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Restrict file size and types
        if ($_FILES["image"]["size"] > 2000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // If the file is valid, move it to the uploads directory
        if ($uploadOk === 1) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                // If new image uploaded, delete the old image file
                if ($service['image'] && file_exists("uploads/" . $service['image'])) {
                    unlink("uploads/" . $service['image']);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Update the service in the database
    $query = "UPDATE services SET title = '$title', description = '$description', image = '$imageName' WHERE id = '$serviceId'";

    if ($conn->query($query)) {
        header("Location: services.php"); // Redirect to services list
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Service</h1>
        <a href="services.php" class="btn btn-primary mb-3">Back to Services</a>

        <!-- Edit Service Form -->
        <form method="POST" action="edit_services.php?id=<?php echo $service['id']; ?>" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Service Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo $service['title']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" required><?php echo $service['description']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload Image (optional):</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                <?php if ($service['image']) { ?>
                    <img src="uploads/<?php echo $service['image']; ?>" alt="Current Image" width="100" class="mt-2">
                <?php } ?>
            </div>

            <button type="submit" name="update" class="btn btn-success">Update Service</button>
        </form>
    </div>
</body>
</html>