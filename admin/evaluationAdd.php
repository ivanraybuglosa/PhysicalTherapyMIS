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
                     $edit=mysqli_query($mysqli,"select * from patient where PatientID='$patientID'");
                    $erow=mysqli_fetch_array($edit);
                ?>
                <div class="card-panel">
                    <h4 class="header2">Evaluation Form</h4>
                        <div class="divider"></div>
                            <form class="col s12" action="evaluationActionAdd.php" method="post" name="add_name" id="add_name">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="hidden" name="PatientID" value="<?php echo $erow['PatientID']; ?>">
                                        <input id="patientName" name="patientName" value="<?php echo $erow['PatientName']; ?>" type="text" disabled  style="color: black;">
                                        <div id="patientList"></div>
                                        <label for="patientName" style="color: black;">Patient Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select id="PTName" name="PTName">
                                            <option value="" disabled selected>Choose Physical Therapist</option>
                                            <?php include("config.php");
                                                    $result = mysqli_query($mysqli, "SELECT * FROM PT ORDER BY PT_ID DESC");
                                                    while ($res = mysqli_fetch_array($result)) { ?>

                                            <option value="<?php echo $res['PT_ID']; ?>"><?php echo $res['PT_Name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <h4 class="header">Chief Complaint</h4>
                                <div class="divider"></div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="ChiefComplaint" class="materialize-textarea" required></textarea>
                                            <label for="ChiefComplaint">Complaint</label>
                                            </div>
                                        </div>
                                    </div>
                </div>
                                <div class="card-panel">
                                    <h4 class="header">History Patient Illness</h4>
                                    <p>Please check any of the following conditions that the patient have/had in the past.
                                    <div class="divider"></div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Alcholism" value="Alcholism" />
                                                        <label for="Alcholism">Alcholism</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Anemia" value="Anemia"/>
                                                        <label for="Anemia">Anemia</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Anxiety" value="Anxiety"/>
                                                        <label for="Anxiety">Anxiety</label>
                                                    </p>
                                                </div>
                                                <div class="col s3">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Asthma" value="Asthma"/>
                                                        <label for="Asthma">Asthma</label>
                                                    </p>
                                                </div>
                                                <div class="col s3  ">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="ArthritisRheumatoid" value="Arthritis-rheumatoid"/>
                                                        <label for="Arthritis-rheumatoid">Arthritis-rheumatoid</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="BloodClot" value="Blood Clot"/>
                                                        <label for="BloodClot">Blood Clot</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Bronchitis" value="Bronchitis"/>
                                                        <label for="Bronchitis">Bronchitis</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="BowelDisease" value="Bowel disease"/>
                                                        <label for="BowelDisease">Bowel disease</label>
                                                    </p>
                                                </div>
                                                <div class="col s3">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="BloodTransfusion" value="Blood Transfusion"/>
                                                        <label for="BloodTransfusion">Blood Transfusion</label>
                                                    </p>
                                                </div>
                                                <div class="col s3  ">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="ArthritisOsteoDegenerative" value="Arthritis-osteo"/>
                                                        <label for="ArthritisOsteoDegenerative">Arthritis-osteo,degenerative</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Cancer" value="Cancer"/>
                                                        <label for="Cancer">Cancer</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="CardiacArrythmia" value="Cardiac Arrythmia"/>
                                                        <label for="CardiacArrythmia">Cardiac Arrythmia</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="CongestiveHeartFailure" value="Congestive Heart Failure"/>
                                                        <label for="CongestiveHeartFailure">Congestive Heart Failure</label>
                                                    </p>
                                                </div>
                                                <div class="col s3">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="CoronaryArteryDisease" value="Coronary Artery Disease"/>
                                                        <label for="CoronaryArteryDisease">Coronary Artery Disease</label>
                                                    </p>
                                                </div>
                                                <div class="col s3  ">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="CerebrovascularDisease" value="Cerebrovascular Disease"/>
                                                        <label for="CerebrovascularDisease">Cerebrovascular Disease</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="EyeDisease" value="Eye Disease" />
                                                        <label for="EyeDisease">Eye Disease</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Diabetes" value="Diabetes"/>
                                                        <label for="Diabetes">Diabetes</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Depression" value="Depression" />
                                                        <label for="Depression">Depression</label>
                                                    </p>
                                                </div>
                                                <div class="col s3">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Emphysema" value="Emphysema"/>
                                                        <label for="Emphysema">Emphysema</label>
                                                    </p>
                                                </div>
                                                <div class="col s3  ">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="ChronicObstructivePulmonaryDisease" value="Chronic Obstructive Pulmonary Disease"/>
                                                        <label for="ChronicObstructivePulmonaryDisease">Chronic Obstructive Pulmonary Disease</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Fibromyalgia" value="Fibromyalgia"/>
                                                        <label for="Fibromyalgia">Fibromyalgia</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Gout" value="Gout"/>
                                                        <label for="Gout">Gout</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="GERD" value="GERD"/>
                                                        <label for="GERD">GERD</label>
                                                    </p>
                                                </div>
                                                <div class="col s3">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="GallbladderProblem" value="Gallbladder problem(s)"/>
                                                        <label for="GallbladderProblem">Gallbladder problem(s)</label>
                                                    </p>
                                                </div>
                                                <div class="col s3  ">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="HeartAttack" value="Heart Attack"/>
                                                        <label for="HeartAttack">Heart Attack</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="HivAids" value="HIV/AIDS"/>
                                                        <label for="HivAids">HIV/AIDS</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="HormoneProblem" value="Hormone Problem(s)"/>
                                                        <label for="HormoneProblem">Hormone Problem(s)</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Hypertension" value="Hypertension"/>
                                                        <label for="Hypertension">Hypertension</label>
                                                    </p>
                                                </div>
                                                <div class="col s3">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Hypercholesterolemia" value="Hypercholesterolemia"/>
                                                        <label for="Hypercholesterolemia">Hypercholesterolemia</label>
                                                    </p>
                                                </div>
                                                <div class="col s3  ">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Hypothyroidism" value="Hypothyroidism"/>
                                                        <label for="Hypothyroidism">Hypothyroidism</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="KidneyDisease" value="Kidney Disease"/>
                                                        <label for="KidneyDisease">Kidney Disease</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="LiverDisorderCirrhosis" value="Liver Disorder-Cirrhosis"/>
                                                        <label for="LiverDisorderCirrhosis">Liver Disorder-Cirrhosis</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="LiverDisorderHepatitis" value="Liver Disorder-Hepatitis"/>
                                                        <label for="LiverDisorderHepatitis">Liver Disorder-Hepatitis</label>
                                                    </p>
                                                </div>
                                                <div class="col s3">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="ThyroidDisease" value="Thyroid Disease"/>
                                                        <label for="ThyroidDisease">Thyroid Disease</label>
                                                    </p>
                                                </div>
                                                <div class="col s3  ">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Osteomyelitis" value="Osteomyelitis"/>
                                                        <label for="Osteomyelitis">Osteomyelitis</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="StomachUlcer" value="Stomach Ulcer"/>
                                                        <label for="StomachUlcer">Stomach Ulcer</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Pacemaker" value="Pacemaker"/>
                                                        <label for="Pacemaker">Pacemaker</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="Parkinsons" value="Parkinson's"/>
                                                        <label for="Parkinsons">Parkinson's</label>
                                                    </p>
                                                </div>
                                                <div class="col s3">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="SeizuresEpilepsy" value="SeizuresEpilepsy"/>
                                                        <label for="SeizuresEpilepsy">Seizures/Epilepsy</label>
                                                    </p>
                                                </div>
                                                <div class="col s3  ">
                                                    <p>
                                                        <input type="checkbox" name="PatientIllness[]" id="OsteoporosisOsteopenia" value="Osteoporosis/Osteopenia"/>
                                                        <label for="OsteoporosisOsteopenia">Osteoporosis/Osteopenia</label>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input id="others" type="text" name="PatientIllness[]">
                                                    <label for="others">Other Illnesses</label>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-panel">
                                    <h4 class="header">Occular Inspection</h4>
                                    <div class="divider"></div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <textarea name="Edema" class="materialize-textarea" required></textarea>
                                                <label for="Edema">Edema</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <textarea name="Posture" class="materialize-textarea" required></textarea>
                                                <label for="Posture">Posture</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <textarea name="Skin" class="materialize-textarea" required></textarea>
                                                <label for="Skin">Skin</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <textarea name="OtherOcculars" class="materialize-textarea"></textarea>
                                                <label for="OtherOcculars">Others</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-panel">
                                <h4 class="header">Range of Motion</h4>
                                    <div class="divider"></div>
                                    <div class="input-field col s6">
                                        <textarea name="ROM" class="materialize-textarea"  required></textarea>
                                    </div>
                            </div>
                            <div class="card-panel">
                                <h4 class="header">Manual Muscle Test</h4>
                                    <div class="divider"></div>
                                    <div class="input-field col s6">
                                        <textarea name="MMT" class="materialize-textarea"  required></textarea>
                                    </div>
                            </div>
                            <div class="card-panel">
                                <h4 class="header">Assessment</h4>
                                    <div class="divider"></div>
                                    <div class="input-field col s6">
                                        <textarea name="Assessment" class="materialize-textarea"  required></textarea>
                                    </div>
                            </div>
                            <div class="card-panel">
                                <h4 class="header">Plan</h4>
                                    <div class="divider"></div>
                                    <div class="input-field col s6">
                                        <textarea name="Plan" class="materialize-textarea"  required></textarea>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <a href="addTrans.php" class="btn red waves-effect waves-light right" style="margin-right:20px;">Cancel<i class="mdi-content-send right"></i></a>
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="submit" style="margin-right:20px;">Save<i class="mdi-content-send right"></i></button>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </section>

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
