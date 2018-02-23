

                  <div id="update<?php echo $res['POCID']; ?>"" class="modal">
                  <div class="modal-content">
                    <?php
                        include_once("config.php");
                        $edit=mysqli_query($mysqli,"select * from planofcare where POCID='".$res['POCID']."'");
                        $erow=mysqli_fetch_array($edit);
                    ?>
                    <div class="card-panel">
                    <h4 class="header">Update Patient Plan of Care</h4>
                    <div class="divider"></div>
                    <div class="body">
                        <div class="row">
                            <div class="col s6 m6 l12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="patientName" type="text">
                                        <label for="patientName">Patient Name</label>
                                    </div>
                                    <div class="input-field col s3">
                                        <input id="patientName" type="text">
                                        <label for="patientName">Physical Therapist</label>
                                    </div>
                                    <div class="input-field col s3">
                                        <input id="sessionDate" type="date" class="datepicker">
                                        <label for="sessionDate">Date Scheduled</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <textarea id="treatment" class="materialize-textarea"></textarea>
                                        <label for="treatment">Treatment</label>
                                    </div>
                                    <div class="col s2">
                                        <p style="margin-top:40px;">Status</p>
                                    </div>
                                    <div class="input-field col s2">
                                        <p>
                                              <input name="remarks" type="radio" id="continue" />
                                              <label for="continue">Continue</label>
                                            </p>
                                    </div>
                                    <div class="input-field col s2">
                                            <p>
                                              <input name="remarks" type="radio" id="stop" />
                                              <label for="stop">Stop</label>
                                            </p>
                                    </div>
                                
                                    
                                </div>
                                <div class="divider"></div>
                                <div class="row">
                                <h4 class="header">Vital Signs</h4>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="bloodPressure" type="text">
                                        <label for="bloodPressure">Blood Pressure</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="heartRate" type="text">
                                        <label for="heartRate">Heart Rate</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="respiratoryRate" type="text">
                                        <label for="respiratoryRate">Respiratory Rate</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="pulse" type="text">
                                        <label for="pulse">Pulse</label>
                                    </div>
                                </div>
                        
                            <div class="divider"></div>
                            <div class="col s3 m6 l12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <textarea id="caseDescription" class="materialize-textarea"></textarea>
                                        <label for="caseDescription">Subjective</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <textarea id="caseDescription" class="materialize-textarea"></textarea>
                                        <label for="caseDescription">Objective</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <textarea id="caseDescription" class="materialize-textarea"></textarea>
                                        <label for="caseDescription">Assessment</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <textarea id="caseDescription" class="materialize-textarea"></textarea>
                                        <label for="caseDescription">Plan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="divider"></div>
                                    <div class="input-field col s4">
                                        <input type="date" class="datepicker">
                                        <label for="schedDate">Next Session Schedule</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input type="time">
                                        <label for="schedTime"></label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input id="treatmentBill" type="text">
                                        <label for="treatmentBill">Treatment Bill</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" style="margin-right:20px;">Update</button>
                                    </div>
                                </div>
                              </div>
                
                            </div>