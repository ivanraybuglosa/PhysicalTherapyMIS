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
                                        <input id="bloodPressure" type="text" value="<?php echo $erow['POCBloodPressure']; ?>"  style="color: black;" disabled >
                                        <label for="bloodPressure" style="color: black;" >Blood Pressure</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="heartRate" type="number" value="<?php echo $erow['POCHeartRate']; ?>" style="color: black;" disabled>
                                        <label for="heartRate" style="color: black;">Heart Rate</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="respiratoryRate" type="number" value="<?php echo $erow['POCRespiratoryRate'] ?>" style="color: black;" disabled>
                                        <label for="respiratoryRate" style="color: black;">Respiratory Rate</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="pulse" type="number" value="<?php echo $erow['POCPulse'] ?>" style="color: black;" disabled>
                                        <label for="pulse" style="color: black;">Pulse</label>
                                    </div>
                                </div>
                        
                            <div class="divider"></div>
                            <div class="col s3 m6 l12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <textarea id="assessment" class="materialize-textarea" name="assessment" style="color: black;" disabled><?php echo $erow['POCAssessment']; ?></textarea>
                                        <label for="assessment" style="color: black;">Assessment</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <textarea id="plan" class="materialize-textarea" name="plan" style="color: black;" disabled><?php echo $erow['POCPlan']; ?></textarea>
                                        <label for="plan" style="color: black;">Plan</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="divider"></div>
                                    <div class="input-field col s4">
                                        <input type="text" name="nextSchedDate" value="<?php echo $erow['POCNextSchedDate'] ?>" style="color: black;" disabled>
                                        <label for="nextSchedDate" style="color: black;">Next Session Schedule</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input type="text" name="schedTime" value="<?php echo $erow['POCTime']; ?>" style="color: black;" disabled>
                                        <label for="schedTime"></label>
                                    </div>
                                    <div class="input-field col s4">
                                        <input id="treatmentBill"  type="text" value="<?php echo $erow['POCTreatmentBill']; ?>" style="color: black;" disabled>
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
                  