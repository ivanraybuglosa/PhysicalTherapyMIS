<?php include("header.php"); ?>
            <!-- CONTENT-->

<section class="section">
  <div class="container">
            <div class="card-panel">
              <h4 class="header2">Physical Therapy Progress Notes</h4>
              <div class="divider"></div>
                <div class="container">
                    <div class="section">
                        <div class="row">
                          <div class="body">
                          <div id="table-datatables">
                                  <div class="row">
                                      <div class="col s12 m8 l12">
                                          <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                              <thead>
                                  <tr>
                                      <th>Client Name</th>
                                      <th>Physical Therapist</th>
                                      <th>Date</th>
                                      <th>Amount</th>
                                      <th>Actions</th>

                                  </tr>
                              </thead>
                              <tbody>

                              <?php include_once("config.php");


                          $result = mysqli_query($mysqli, "SELECT * FROM planofcare INNER JOIN patient ON planofcare.PatientID = patient.PatientID INNER JOIN pt ON planofcare.PT_ID = pt.PT_ID ORDER BY POCID DESC");
                          while ($res = mysqli_fetch_array($result)) {
                          $patientID = $res['POCID'];
                          ?><tr>
                              <td><?php echo $res['PatientName']; ?></td>
                              <td><?php echo $res['PT_Name']; ?></td>
                              <td><?php echo $res['POCSessionDate']; ?></td>
                              <td><?php echo $res['POCTreatmentBill']; ?></td>
                              <td><a href="printNotes.php?id=<?php echo $res['POCID']; ?>" class="btn green waves-effect waves-light " target="_blank">Print</a></td>
                              </tr>

                          <?php  } ?>






                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
                            </div>

                        </div>
                    </div>
                </div>



                        </div>
                    </section>
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

    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>

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
