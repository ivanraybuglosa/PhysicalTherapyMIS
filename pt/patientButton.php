    <div id="edit<?php echo $res['PatientID']; ?>" class="modal">
            <div class="modal-content">
	              	<?php
	              		include_once("config.php");
						$edit=mysqli_query($mysqli,"select * from patient where PatientID='".$res['PatientID']."'");
						$erow=mysqli_fetch_array($edit);
					?>
                <h4 class="header2">Update Patient Registration</h4>

                    	<div class="row">

	            	<form method="POST" action="patientActionEdit.php?id=<?php echo $erow['PatientID']; ?>">
                            	<div class="row">
                                	<div class="input-field col s6">
                                    	<input id="patientID" type="hidden" name="patientID" value="<?php echo $erow['PatientID']; ?>">
                                    	<input id="patientName" type="text" name="patientName" value="<?php echo $erow['PatientName']; ?>">
                                    	<label for="patientName">Patient Name</label>
                                	</div>
	                                <div class="input-field col s6">
	                                    <input id="patientAddress" type="text" name="patientAddress" value="<?php echo $erow['PatientAddress']; ?>">
	                                    <label for="patientAddress">Address</label>
	                                </div>
                            	</div>
                            	<div class="row">
                                	<div class="input-field col s6">
                                        <select name="patientGender" >
                                            <option value="Male" <?php if($erow['PatientGender']=="Male") echo "selected=selected"; ?> >Male</option>
                                            <option value="Female" <?php if($erow['PatientGender']=="Female") echo "selected=selected"; ?>>Female</option>
                                        </select>
                                        <label for="patientGender">Gender</label>
                                	</div>
	                                <div class="input-field col s6">
	                                    <input id="patientBday" name="patientBday" class="datepicker" type="date" value="<?php echo $erow['PatientBirthdate']; ?>">
	                                    <label for="patientBday">Birthdate</label>
	                                </div>
	                                
	                            </div>
    	                        <div class="row">
	                               <div class="input-field col s6">
                                        <select name="patientCivilStatus">
                                            <option value="Single" <?php if($erow['PatientCivilStatus']=="Single") echo "selected=selected"; ?> >Single</option>
                                            <option value="Widowed" <?php if($erow['PatientCivilStatus']=="Widowed") echo "selected=selected"; ?>>Widowed</option>
                                            <option value="Married" <?php if($erow['PatientCivilStatus']=="Married") echo "selected=selected"; ?>>Married</option>
                                            <option value="Separated" <?php if($erow['PatientCivilStatus']=="Separated") echo "selected=selected"; ?>>Separated</option>
                                        </select>
                                        <label for="CivilStatus">Civil Status</label>
                                	</div>
                                    <div class="input-field col s6">
	                                    <input id="patientProfession" name="patientProfession" type="text" value="<?php echo $erow['PatientProfession']; ?>">
	                                    <label for="patientProfession">Profession</label>
	                                </div>
                                </div>
                            </div>
                            <div>
                            <div class="divider"></div>
                                    <h4 class="header2">Patient Referral Form</h4>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <input name="doctor" type="text" value="<?php echo $erow['PatientDoctor']; ?>">
                                                <label for="doctor">Doctor</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input name="hospital" type="text" value="<?php echo $erow['PatientHospital']; ?>">
                                                <label for="hospital">Hospital</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input name="hospitalAddress" type="text" value="<?php echo $erow['PatientReferralAddress']; ?>">
                                                <label for="hospitalAddress">Hospital Address</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <input name="telephone" type="text" value="<?php echo $erow['PatientTelephone']; ?>">
                                                <label for="telephone">Telephone</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input name="contactPerson" type="text" value="<?php echo $erow['PatientContactPerson']; ?>">
                                                <label for="contactPerson">Contact Person</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input name="cases" type="text" value="<?php echo $erow['PatientCases']; ?>">
                                                <label for="cases">Cases</label>
                                            </div>
                                        </div>
                                </div>
      					</div>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="modal-footer">
                                <button class="btn red waves-effect waves-light right modal-close" type="submit" name="Submit" value="edit" style="margin-right:20px;">Close</button>
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" value="edit" style="margin-right:20px;">Update</button>
                            </div>
                        </div>
                    </div>
          				</form>	
  	</div>