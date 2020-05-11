<?php


$query = mysqli_query($mysqli, "SELECT * FROM plan_users LIMIT $startpoint, $per_page");
$data = array();
while($row = mysqli_fetch_assoc($query)){
    $data[] = array(
        'id' => $row["id"],
        'uuid' => $row["uuid"],
        'name' => $row["name"]
    );
}
echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);