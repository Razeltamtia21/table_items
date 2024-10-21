<?php 

include 'config.php';

if (isset($_POST["id_items"]) && isset($_POST["name_items"]) && isset($_POST["value_items"])) {
    $id_items = $_POST["id_items"];
    $name_items = $_POST["name_items"];
    $value_items = $_POST["value_items"];

    $query = "SELECT * FROM latihan2 WHERE id_items = ? OR items = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("ss", $id_items, $name_items);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "id_items or name_items already exists!";
    } else {

        $insertquery = "INSERT INTO latihan2 (id_items, items, value) VALUES (?, ?, ?)";
        $insertstmt = $connect->prepare($insertquery);
        $insertstmt->bind_param("sss", $id_items, $name_items, $value_items);
        $insertstmt->execute();

        echo "Items successfully added!";
    }
} else {
    header ("Location: http://localhost/latihan/latihan2/index.php");
    exit();
}

$connect->close();

?>
