<?php
    include("config.php");
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM patient WHERE patientName LIKE '%".$searchTerm."%' ORDER BY patientID ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['patientName'];
    }
    
    //return json data
    echo json_encode($data);
?>