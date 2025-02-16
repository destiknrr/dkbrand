<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = ["success" => false, "message" => ""];

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';

    if ($name == '' || $subject == '') {
        $response["message"] = "Kolom nama dan subject harus diisi!";
        echo json_encode($response);
        exit;
    }

    $conn = new mysqli("localhost", "root", "", "form_db");

    if ($conn->connect_error) {
        $response["message"] = "Koneksi gagal: " . $conn->connect_error;
        echo json_encode($response);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO submissions (name, subject) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $subject);

    if ($stmt->execute()) {
        $response["success"] = true;
        $response["message"] = "Data berhasil disimpan!";
    } else {
        $response["message"] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    echo json_encode($response);
}
?>
