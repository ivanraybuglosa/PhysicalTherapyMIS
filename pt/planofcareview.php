

 <div id="view<?php echo $res['POCID']; ?>" class="modal">
                  <div class="modal-content">
                    <?php
                        include_once("config.php");
                        $edit=mysqli_query($mysqli,"select * from planofcare where POCID='".$res['POCID']."'");
                        $erow=mysqli_fetch_array($edit);
                    ?>
                    <h4 class="header">Patient Plan of Care Details</h4>
                        <div class="divider"></div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="bloodPressure" type="text" value="<?php echo $erow['POCBloodPressure']; ?>"  >
                                        <label for="bloodPressure">Blood Pressure</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="heartRate" type="text" value="<?php echo $erow['POCHeartRate']; ?>">
                                        <label for="heartRate">Heart Rate</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="respiratoryRate" type="text" value="<?php echo $erow['POCRespiratoryRate'] ?>">
                                        <label for="respiratoryRate">Respiratory Rate</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="pulse" type="text" value="<?php echo $erow['POCPulse'] ?>">
                                        <label for="pulse">Pulse</label>
                                    </div>
                                </div>
                        
                            <div class="divider"></div>
                            <div class="col s3 m6 l12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <textarea id="subjective" class="materialize-textarea" name="subjective"><?php echo $erow['POCPulse']; ?></textarea>
                                        <label for="subjective">Subjective</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <textarea id="objective" class="materialize-textarea" name="objective" ><?php echo $erow['POCObjective']; ?></textarea>
                                        <label for="objective">Objective</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <textarea id="assessment" class="materialize-textarea" name="assessment"><?php echo $erow['POCAssessment']; ?></textarea>
                                        <label for="assessment">Assessment</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <textarea id="plan" class="materialize-textarea" name="plan"><?php echo $erow['POCPlan']; ?></textarea>
                                        <label for="plan">Plan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="divider"></div>
                                    <div class="input-field col s4">
                                        <input type="text" name="nextSchedDate" value="<?php date('Y-m-d', strtotime($erow['POCDateSched']));?>" >
                                        <label for="nextSchedDate">Next Session Schedule</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input type="time" name="schedTime" value="<?php echo $erow['POCTime']; ?>">
                                        <label for="schedTime"></label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input id="treatmentBill" type="text" value="<?php echo $erow['POCTreatmentBill']; ?>">
                                        <label for="treatmentBill">Treatment Bill</label>
                                    </div>
                                </div>
                            </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="modal-footer">
                                <button class="btn red waves-effect waves-light right modal-close" type="submit" name="Submit" value="edit" style="margin-right:20px;">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                  