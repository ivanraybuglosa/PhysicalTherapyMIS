    <div id="edit<?php echo $res['PT_ID']; ?>" class="modal">
            <div class="modal-content">
	              	<?php
	              		include_once("config.php");
						$edit=mysqli_query($mysqli,"select * from PT where PT_ID='".$res['PT_ID']."'");
						$erow=mysqli_fetch_array($edit);
					?>
                <h4 class="header2">Update Patient Registration</h4>

                    	<div class="row">

	            	<form method="POST" action="PTActionEdit.php?id=<?php echo $erow['PT_ID']; ?>">
                            	<div class="row">
                                	<div class="input-field col s6">
                                    	<input id="PT_ID" type="hidden" name="PTID" value="<?php echo $erow['PT_ID']; ?>">
                                    	<input id="PTName" type="text" name="PTName" value="<?php echo $erow['PT_Name']; ?>">
                                    	<label for="PTName">Patient Name</label>
                                	</div>
	                                <div class="input-field col s6">
	                                    <input id="patientAddress" type="text" name="PTAddress" value="<?php echo $erow['PT_Address']; ?>">
	                                    <label for="patientAddress">Address</label>
	                                </div>
                            	</div>
                            	<div class="row">
                                	<div class="input-field col s6">
                                        <select name="PTGender" >
                                            <option value="Male" <?php if($erow['PT_Gender']=="Male") echo "selected=selected"; ?> >Male</option>
                                            <option value="Female" <?php if($erow['PT_Gender']=="Female") echo "selected=selected"; ?>>Female</option>
                                        </select>
                                        <label for="PTGender">Gender</label>
                                	</div>
	                                <div class="input-field col s6">
	                                    <input id="PTBday" name="PTBday" class="datepicker" type="date" value="<?php echo $erow['PT_Birthday']; ?>">
	                                    <label for="PTBday">Birthdate</label>
	                                </div>
	                                
	                            </div>
    	                        <div class="row">
	                               <div class="input-field col s6">
                                        <select name="PTCivilStatus">
                                            <option value="Single" <?php if($erow['PT_CivilStatus']=="Single") echo "selected=selected"; ?> >Single</option>
                                            <option value="Widowed" <?php if($erow['PT_CivilStatus']=="Widowed") echo "selected=selected"; ?>>Widowed</option>
                                            <option value="Married" <?php if($erow['PT_CivilStatus']=="Married") echo "selected=selected"; ?>>Married</option>
                                            <option value="Separated" <?php if($erow['PT_CivilStatus']=="Separated") echo "selected=selected"; ?>>Separated</option>
                                        </select>
                                        <label for="PTCivilStatus">Civil Status</label>
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