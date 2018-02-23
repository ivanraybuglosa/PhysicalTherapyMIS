<?php 
include("config.php");
        $result = mysqli_query($mysqli, "SELECT * FROM planofcare");
        $events = array();
        while ($res = mysqli_fetch_array($result)) { 
        $patientID = $res['PatientID'];
          
        $result1 = mysqli_query($mysqli, "SELECT * FROM patient where PatientID = '$patientID'");
        
        while ($res1 = mysqli_fetch_array($result1)) {
            

                $e = array();
                $e['title'] = $res1['PatientName'];
                $e['start'] = $res['POCDateSched'];
                $e['color'] = '#0000FF';

                // Merge the event array into the return array
               

        }
         array_push($events, $e);
            // Output json for our calendar
            
    }
    echo json_encode($events);
    exit();
?>