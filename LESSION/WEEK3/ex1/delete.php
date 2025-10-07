<?php
// Include database connection
include 'db.php';

// Check if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare delete statement
    $stmt = $conn->prepare("DELETE FROM laptops WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute delete statement
    if ($stmt->execute()) {
        echo "Laptop deleted successfully.";
    } else {
        echo "Error deleting laptop: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>