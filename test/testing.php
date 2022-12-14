<?php

include '../actions/database_connection.php';



    $id = 'B-0000001';
    $query = "SELECT id, name, branchaddress, contactnumber
    FROM tblbranch 
    WHERE id = :id";

    $statement  = $connect->prepare($query);
    $statement->execute([
        ':id' => $id,
    ]);

    $branches = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($branches as $branch) {
        $data['id'] = $branch['id'];
        $data['name'] = $branch['name'];
        $data['branchaddress'] = $branch['branchaddress'];
        $data['contactnumber'] = $branch['contactnumber'];

    }

    echo json_encode($data);
var_dump($data);

?>