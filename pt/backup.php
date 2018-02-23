<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Backup</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Maintenance - Backup</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                
                <div class="card-panel">
                    <h4 class="header">Backup</h4>

                    <div class="body">
                        <div id="input-file-input" class="section">
                            <form action="#">
                                <div class="file-field input-field">
                                  <input class="file-path validate" type="text"/>
                                  <div class="btn">
                                    <span>Backup Database</span>
                                    <input type="file" />
                              </div>
                                </div>
                            </form>
                        </div>
                        <div id="input-file-input" class="section">
                            <form action="#">
                                <div class="file-field input-field">
                                  <input class="file-path validate" type="text" data-target="#addRep" />
                                  <div class="btn">
                                    <span>Import Database</span>
                                    <input type="file" />
                                  </div>
                                </div>
                            </form>
                        </div>   
                    </div>
                    <div class="row">
                        <button class="btn red waves-effect waves-light right " type="submit" name="action">Cancel<i class="mdi-content-send right"></i></button>
                        <button class="btn cyan waves-effect waves-light right " type="submit" name="action">Submit<i class="mdi-content-send right"></i></button>
                        
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

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>
    <!-- chartjs -->   
    
   
    
    
    <script type="text/javascript" src="js/plugins/chartjs/lineChart.js"></script>

    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/date.js"></script>      
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     
    

    

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>
    
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar-script.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    
</body>

</html>