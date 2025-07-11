<?php
$targetDir = "uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

if (isset($_FILES["bukti"])) {
    $file = $_FILES["bukti"];
    $targetFile = $targetDir . basename($file["name"]);
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        echo "Success";
    } else {
        echo "Failed";
    }
} else {
    echo "No file uploaded";
}
?>