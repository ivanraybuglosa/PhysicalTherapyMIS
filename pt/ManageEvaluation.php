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
                
            
                <div class="card-panel">
                    <h4 class="header2">Evaluation Form</h4>
                        <div class="divider"></div>
                            <form class="col s12" action="evaluationActionAdd.php" method="post" >
                                <div class="row">
                                    <div class="input-field col s6">
                                            <input type="text" id="patientName" name="patientName" onkeyup="autocomplet()" />
                                            <div id="patientList"></div>
                                            <label for="patientName">Patient Name</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <select id="PTName" name="PTName">
                                            <option value="" disabled selected>Choose Physical Therapist</option>
                                            <?php include("config.php");
                                                    $result = mysqli_query($mysqli, "SELECT * FROM PT ORDER BY PT_ID DESC");
                                                    while ($res = mysqli_fetch_array($result)) { ?>
                                            
                                            <option value="<?php echo $res['PT_Name']; ?>"><?php echo $res['PT_Name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="input-field col s2">
                                        <input name="evalSession" type="number">
                                        <label for="evalSession">Number of Session</label>
                                    </div>
                                </div>
                                <div class="card-panel">
                                    <h4 class="header">Chief Complaint</h4>
                                    <div class="divider"></div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <textarea name="ChiefComplaint" class="materialize-textarea"></textarea>
                                                <label for="ChiefComplaint">Complaint</label>
                                                </div>
                                                <p>Please describe this current problem:</p>
                                                <div class="col s2">
                                                    <p>
                                                        <input name="remarks" type="radio" id="new" value="New" />
                                                        <label for="new">New</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input name="remarks" type="radio" id="old" value="Old"/>
                                                        <label for="old">Old</label>
                                                    </p>
                                                </div>
                                                <div class="col s2">
                                                    <p>
                                                        <input name="remarks" type="radio" id="recurring" value="Recurring"/>
                                                        <label for="recurring">Recurring</label>
                                                    </p>
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
                                                        <input type="checkbox" name="PatientIllness[]" id="ArthritisOsteoDegenerative" value="Arthritis-osteo,degenerative"/>
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
                                                        <input type="checkbox" name="PatientIllness[]" id="LiverDisorderHepatitis" value="Liver Disorder-Hepatiti"/>
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
                                            <div class="input-field col s4">
                                                <textarea name="Speech" class="materialize-textarea"></textarea>
                                                <label for="Speech">Speech</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Edema" class="materialize-textarea"></textarea>
                                                <label for="Edema">Edema</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Endurance" class="materialize-textarea"></textarea>
                                                <label for="Endurance">Endurance</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <textarea name="Vision" class="materialize-textarea"></textarea>
                                                <label for="Vision">Vision</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="MuscleTone" class="materialize-textarea"></textarea>
                                                <label for="MuscleTone">Muscle Tone</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Posture" class="materialize-textarea"></textarea>
                                                <label for="Posture">Posture</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <textarea name="Hearing" class="materialize-textarea"></textarea>
                                                <label for="Hearing">Hearing</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Coordination" class="materialize-textarea"></textarea>
                                                <label for="Coordination">Coordination</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Skin" class="materialize-textarea"></textarea>
                                                <label for="Skin">Skin</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-panel">
                                <h4 class="header">Range of Motion</h4>
                                <p>Please choose a rating for a category in the selector.</p>
                                    <div class="divider"></div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Shoulder</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMLeftShoulder"   min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Shoulder</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMRightShoulder"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Elbow</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMLeftElbow"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Elbow</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMRightElbow"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Forearm</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMLeftForearm"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Forearm</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMRightForearm"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Lefthand Fingers</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMLefthandFingers"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Righthand Fingers</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMRighthandFingers"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Wrist</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMLeftWrist"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Wrist</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMRightWrist"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Trunk</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMLeftTrunk"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Trunk</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMRightTrunk"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Hip</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMHip"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Knee</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMLeftKnee"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Knee</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMRightKnee"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Ankle</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMLeftAnkle"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Ankle</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMRightAnkle"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Neck</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("ruler.php"); ?>
                                                    <input type="range" name="ROMNeck"  min="20" max="200" />
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-panel">
                                    <h4 class="header">Manual Muscle Test</h4>
                                    <p>Please choose a rating for a category in the selector.</p>
                                    <div class="divider"></div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Shoulder</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range" name="MMTLeftShoulder"   min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Shoulder</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTRightShoulder"  min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Elbow</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTLeftElbow" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Elbow</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTRightElbow" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Forearm</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTLeftForearm" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Forearm</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTRightForearm" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Lefthand Fingers</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  min="1" name="MMTLefthandFingers" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Righthand Fingers</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTRighthandFingers" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Wrist</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTLeftWrist" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Wrist</p>
                                            </div>rulerMM
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTRightWrist" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Trunk</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTLeftTrunk" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Trunk</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTRightTrunk" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Hip</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTHip" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Knee</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTLeftKnee" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Knee</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTRightKnee" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Ankle</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTLeftAnkle" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Ankle</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTRightAnkle" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Neck</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field"><?php include("rulerMM.php"); ?>
                                                    <input type="range"  name="MMTNeck" min="1" max="5" />
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                           <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" value="add">Add Evaluation<i class="mdi-content-send right"></i></button>
                                        </div>
                                        
                                    </div>
                                </div>        
                                
                                    
                            </form>
                            <div class="card-panel">
                    <div class="container">
                        <div class="section">
                            <div id="table-datatables">
                                <div class="row">
                                    <div class="col s12 m8 l12">
                                        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Patient Name</th>
                                                    <th>Physical Therapist</th>
                                                    <th>Number of Sessions</th>
                                                    <th>Remarks</th>
                                                    <th>Details</th>
                                                    <th>Update</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--breadcrumbs end-->

                                                <?php include("config.php");
                                                $result = mysqli_query($mysqli, "SELECT * FROM evaluation ORDER BY EvalID DESC");
                                                while ($res = mysqli_fetch_array($result)) { 
                                                $patientID = $res['PatientID'];

                                                ?>
                                                <tr>
                                                <?php $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = '$patientID'");
                                                while ($res1 = mysqli_fetch_array($result1)) { ?>
                                                    <td><?php echo $res1['PatientName']; ?></td> 
                                                    <td><?php echo $res['EvalPT']; ?></td>
                                                    <td><?php echo $res['EvalSessionQty']; ?></td>
                                                    <td><?php echo $res['Remarks']; ?></td>
                                                    <td><button class="waves-effect waves-light modal-trigger light-blue btn" href="#edit<?php echo $res['EvalID']; ?>">View Details</button>
                                                    <?php include("evaluationButtonView.php"); ?></td>
                                                    
                                                    <td><button class="waves-effect waves-light modal-trigger light-blue btn" href="#update<?php echo $res['EvalID']; ?>" >Update Record</button>
                                                    <?php include("evaluationButtonEdit.php"); ?></td>
                                                    <?php } } ?>
                                                </tr>
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
    <!-- jQuery Library -->
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
    
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar-script.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    
</body>

</html>