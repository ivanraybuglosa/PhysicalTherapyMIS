            <div id="edit<?php echo $res['RefID']; ?>" class="modal">
                  <div class="modal-content">
                    <?php
                        include_once("config.php");
                        $edit=mysqli_query($mysqli,"select * from referral where RefID='".$res['RefID']."'");
                        $erow=mysqli_fetch_array($edit);
                    ?>
                    <div class="card-panel">
                    <h4 class="header2">Update Patient Referral </h4>
                        <div class="row">
                            <form method="POST" action="referralActionEdit.php?id=<?php echo $erow['RefID']; ?>" >
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="refID" type="hidden" name="refID" value="<?php echo $erow['RefID']; ?>">
                                        <input id="patientID" type="hidden" name="patientID" value="<?php echo $erow['PatientID']; ?>">
                                        <?php
                                            $patientName=mysqli_query($mysqli,"select * from patient where PatientID='".$erow['PatientID']."'");
                                            $eerow=mysqli_fetch_array($patientName);
                                         ?>
                                        <input name="patientName" type="text" value="<?php echo $eerow['PatientName']; ?>">
                                        <label for="patientName">Patient Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="doctor" type="text"  value="<?php echo $erow['RefDoctor']; ?>">
                                        <label for="doctor">Doctor</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="hospital" type="text"  value="<?php echo $erow['RefHospital']; ?>">
                                        <label for="hospital">Hospital</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="hospitalAddress" type="text"  value="<?php echo $erow['RefAddress']; ?>">
                                        <label for="hospitalAddress">Hospital Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="telephone" type="text"  value="<?php echo $erow['RefTelephone']; ?>">
                                        <label for="telephone">Telephone</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="contactPerson" type="text"  value="<?php echo $erow['RefContactPerson']; ?>">
                                        <label for="contactPerson">Contact Person</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="cases" type="text"  value="<?php echo $erow['RefCases']; ?>">
                                        <label for="cases">Cases</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input name="caseDescription" type="text"  value="<?php echo $erow['RefCasesDec']; ?>">
                                        <label for="caseDescription">Case Description</label>
                                    </div>
                                </div>
                                
                            
                        </div>
                </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn red waves-effect waves-light right modal-close" type="submit" name="Submit" value="edit" style="margin-right:20px;">Close</button>
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" value="edit" style="margin-right:20px;">Update</button>
                        </div>
                    </div>
                </div>
                    
                </div>
                </form>