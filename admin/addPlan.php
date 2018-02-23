  <?php  
include("config.php");
 $number = count($_POST["plan"]);  
 if($number > 0)  
  $getLast = mysqli_query($mysqli, "SELECT MAX(EvalID) FROM evaluation as maxID");
    $evalID =  mysqli_fetch_array($getLast);
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST['plan'][$i] != ''))  
           {  
               mysqli_query($mysqli, "INSERT INTO evalPlan (evalPlan_Desc,EvalID,evalPlan_Status) VALUES ( $_POST['plan'][$i],'$evalID['maxID']','pending')");
           }  
      }    
 }  
 
 ?> 