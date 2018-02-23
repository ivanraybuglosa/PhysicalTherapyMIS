<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Graphical Tool</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Reports - Graphical Tool</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                <div class="card-panel">
                    <div class="container">
                    <h4 class="header">Patient Monthly Record</h4>
                        <div class="body">
                            <div class="row">
                                <div class="col s2">
                                    <p style="margin-top:45px;">Report Type</p>
                                </div>
                                <div id="input-select" class="section">
                                    <div class="input-field col s4">
                                        <select>
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="1">Patient</option>
                                            <option value="2">Evaluation</option>
                                            <option value="3">Doctor</option>
                                            <option value="4">Hospital</option>
                                        </select>
                                    </div>
                                </div>
                                
                               
                            </div>
                            <div class="row">
                                <div class="col s2">
                                    <p style="margin-top:45px;">Date</p>
                                </div>
                                <div id="input-select" class="section">
                                    <div class="input-field col s4">
                                        <input id="evalDate" type="date" class="datepicker">
                                    </div>
                                </div>
                                <div class="col s2">
                                    <p>TO</p>
                                </div>
                                <div id="input-select" class="section">
                                    <div class="input-field col s4" style="margin:-14px 0px 0px -125px;">
                                        <input id="evalDate" type="date" class="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="text-align: center">
                                <div class="col s12">
                                    <button class="btn cyan waves-effect waves-light " type="submit" name="action">Generate Report<i class="mdi-content-send right"></i></button>
                                
                                    <button class="btn red waves-effect waves-light" type="submit" name="action">Cancel<i class="mdi-content-send right"></i></button>

                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                           
                           <div id="chartjs" class="section">
                              <h4 class="header">Chart Title</h4>
                              <div class="row">
                                <div class="col s6 m4 l12">
                                  <div class="sample-chart-wrapper">
                                    <canvas id="line-chart-sample" height="120"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="chartjs-pie-chart" class="section">
                                <h4 class="header">Doughnut Chart Title</h4>
                                <div class="col s12 m6 l12">
                                      <div class="sample-chart-wrapper">
                                        <canvas id="doughnut-chart-sample"></canvas>
                                      </div>
                                    </div>
                            </div>

                        </div>
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

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    
</body>

</html>