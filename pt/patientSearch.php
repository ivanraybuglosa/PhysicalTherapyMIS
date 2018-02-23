 <?php  
 include("config.php");
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM patient WHERE PatientName LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($mysqli, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["PatientName"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Patient Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  