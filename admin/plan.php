<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Evaluation</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Transaction - Manage Evaluation</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                
                <?php include("config.php"); 
                    $patientID = $_GET['Patient_ID'];
                    $evalID = $_GET['EvalID'];
                     $edit=mysqli_query($mysqli,"select * from patient where PatientID='$patientID'");
                    $erow=mysqli_fetch_array($edit);
                ?>
                <div class="card-panel">
                    <h4 class="header2">Add Plans</h4>
                        <div class="divider"></div>
                            <form class="col s12" method="post" name="add_name" id="add_name">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="hidden" name="PatientID" value="<?php echo $erow['PatientID']; ?>">
                                        <input type="hidden" name="EvaluationID" value='<?php echo $evalID ?>'>
                                        <input id="patientName" name="patientName" value="<?php echo $erow['PatientName']; ?>" type="text" disabled  style="color: black;">
                                        <div id="patientList"></div>
                                        <label for="patientName" style="color: black;">Patient Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="input-field col s12">
                                            <table class="table table-bordered" id="dynamic_field">  
                                                <tr>  
                                                     <td><textarea name="plan[]" placeholder="" class="materialize-textarea" ></textarea><label for="Assessment">Plan</label></td>  
                                                     <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                                </tr>  
                                           </table>
                                       </div>
                                </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="submit" style="margin-right:20px;">Save<i class="mdi-content-send right"></i></button>
                                </div>
                            </div>      
                    </div>
                </form>
            </div>
        </section>
    
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><textarea name="plan[]" placeholder="Enter Another plan" class="materialize-textarea" required></textarea></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"../name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/date.js"></script>      
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script> 

    <!-- datatables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>    

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    
</body>

</html>
