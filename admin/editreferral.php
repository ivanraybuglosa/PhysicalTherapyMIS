<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Referral</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Transaction - Manage Referral</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->




            <?php include("config.php");
                $id = $_GET['id'];
                 $edit=mysqli_query($mysqli,"select * from referral INNER JOIN patient on referral.PatientID = patient.PatientID where RefID='$id'");
                $erow=mysqli_fetch_array($edit);
            ?>
                <div class="card-panel">
                    <h4 class="header2">OUTGOING REFERRAL FORM</h4>
                        <div class="row">
                            <form class="col s12" method="post" action="referralActionEdit.php">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="hidden" name="refid" value="<?php echo $erow['RefID']; ?>">
                                        <input type="hidden" name="PatientID" value="<?php echo $erow['PatientID']; ?>">
                                        <input id="patientName" name="patientName" value="<?php echo $erow['PatientName']; ?>" type="text" disabled  style="color: black;">
                                        <div id="patientList"></div>
                                        <label for="patientName" style="color: black;">Patient Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="doctor" name="doctor" type="text" value="<?php echo $erow['RefDoctor']; ?>">
                                        <label for="doctor">Doctor</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="hospital" name="hospital" type="text" value="<?php echo $erow['RefHospital']; ?>">
                                        <label for="hospital">Hospital</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="hospitalAddress" name="hospitalAddress" type="text" value="<?php echo $erow['RefAddress']; ?>">
                                        <label for="hospitalAddress">Hospital Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="telephone" name="telephone" type="text" value="<?php echo $erow['RefTelephone']; ?>">
                                        <label for="telephone">Telephone</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="contactPerson" name="contactPerson" type="text" value="<?php echo $erow['RefContactPerson']; ?>">
                                        <label for="contactPerson">Contact Person</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                      <label for="cases">Cases</label>
                                        <select id="cases" name="cases" >
                                            <option <?php if($erow['RefCases'] == "Stroke"){
                                              echo "selected='selected'";
                                            } ?> value="Stroke">Stroke</option>
                                            <option <?php if($erow['RefCases'] == "Spinal Cord Injuries"){
                                              echo "selected='selected'";
                                            } ?> value="Spinal Cord Injuries">Spinal Cord Injuries</option>
                                            <option <?php if($erow['RefCases'] == "Traumatic Brain Injuries"){
                                              echo "selected='selected'";
                                            } ?> value="Traumatic Brain Injuries">Traumatic Brain Injuries</option>
                                            <option <?php if($erow['RefCases'] == "Peripheral Nerve Injuries"){
                                              echo "selected='selected'";
                                            } ?> value="Peripheral Nerve Injuries">Peripheral Nerve Injuries</option>
                                            <option <?php if($erow['RefCases'] == "Low Back Pains"){
                                              echo "selected='selected'";
                                            } ?> value="Low Back Pains">Low Back Pains</option>
                                            <option <?php if($erow['RefCases'] == "Scoliosis"){
                                              echo "selected='selected'";
                                            } ?> value="Scoliosis">Scoliosis</option>
                                            <option <?php if($erow['RefCases'] == "Myofascial Pain Syndrome"){
                                              echo "selected='selected'";
                                            } ?> value="Myofascial Pain Syndrome">Myofascial Pain Syndrome</option>
                                            <option <?php if($erow['RefCases'] == "Frozen Shoulder"){
                                              echo "selected='selected'";
                                            } ?> value="Frozen Shoulder">Frozen Shoulder</option>
                                            <option <?php if($erow['RefCases'] == "Fractures"){
                                              echo "selected='selected'";
                                            } ?> value="Fractures">Fractures</option>
                                            <option <?php if($erow['RefCases'] == "Arthritis"){
                                              echo "selected='selected'";
                                            } ?> value="Arthritis">Arthritis</option>
                                            <option <?php if($erow['RefCases'] == "Bell's Palsy"){
                                              echo "selected='selected'";
                                            } ?> value="Bell's Palsy">Bell's Palsy</option>
                                            <option <?php if($erow['RefCases'] == "Cerebral Palsy"){
                                              echo "selected='selected'";
                                            } ?> value="Cerebral Palsy">Cerebral Palsy</option>
                                            <option <?php if($erow['RefCases'] == "Parkinson's Disease"){
                                              echo "selected='selected'";
                                            } ?> value="Parkinson's Disease">Parkinson's Disease</option>
                                            <option <?php if($erow['RefCases'] == "Guillane Barre Syndorme"){
                                              echo "selected='selected'";
                                            } ?> value="Guillane Barre Syndorme">Guillane Barre Syndorme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="caseDescription" name="caseDescription" class="materialize-textarea"><?php echo $erow['RefCasesDec']; ?></textarea>
                                        <label for="caseDescription">Case Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s10">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" style="margin-right:20px;">Update Refferal<i class="mdi-content-send right"></i></button>
                                    </div>
                                        <div class="input-field col s2">
                                            <a href="addreferral.php" class="btn red waves-effect waves-light right" >Cancel</i></a>
                                        </div>
                                </div>
                            </form>
                        </div>
                </div>

            </section>

        </div>

    </div>
            <!-- END LEFT SIDEBAR NAV-->




            <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">

        <div class="footer-copyright">
            <div class="container">
                <span class="right">  Copyright © 2018 Design and Developed by Mighty Conquerors</span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
<script>
 $(document).ready(function(){
      $('#patientList').keyup(function(){
           var query = $(this).val();
           if(query != '')
           {
                $.ajax({
                     url:"patientSearch.php",
                     method:"POST",
                     data:{query:query},
                     success:function(data)
                     {
                          $('#patientList').fadeIn();
                          $('#patientList').html(data);
                     }
                });
           }
      });
      $(document).on('click', '#patientName', function(){
           $('#patientName').val($(this).text());
           $('#patientList').fadeOut();
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

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

        <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>


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
