    <?php  
 $connect = mysqli_connect("localhost", "root", "", "ptmisDB");  
 $number = count($_POST["plan"]);  
 $EvalID = $_POST['EvaluationID'];
 echo $number;
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["plan"][$i] != ''))  
           {  
                $sql = "INSERT INTO evalplan(evalPlan_Desc,EvalID,evalPlan_Status) VALUES('".mysqli_real_escape_string($connect, $_POST["plan"][$i])."',
                '$EvalID','pending')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Plans Inserted";  
 }  
 else  
 {  
      echo "Please Enter Plan";  
 }  
 ?> 