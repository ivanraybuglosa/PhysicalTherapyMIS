    <div id="edit<?php echo $res['training_ID']; ?>" class="modal">
            <div class="modal-content">
	              	<?php
	              		include_once("config.php");
						$edit=mysqli_query($mysqli,"select * from training where training_ID='".$res['training_ID']."'");
						$erow=mysqli_fetch_array($edit);
					?>
                <h4 class="header2">Update Patient Registration</h4>

                    	<div class="row">

                            <form class="col s12" action="trainingActionEdit.php" method="post">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="TrainingID" type="hidden" name="TrainingID" value="<?php echo $erow['training_ID'];?>">
                                        <input id="TrainingName" type="text" name="TrainingName" value="<?php echo $erow['training_Name'];?>" required>
                                        <label for="TrainingName">Training</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="TrainingDesc" type="text" name="TrainingDesc" value="<?php echo $erow['training_Desc'];?>" required>
                                        <label for="TrainingDesc">Training Description</label>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="input-field col s12">
                                        <div class="modal-footer">
                                            <button class="btn red waves-effect waves-light right modal-close" type="submit" name="Submit"  style="margin-right:20px;">Close</button>
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" value="edit" style="margin-right:20px;">Update</button>
                                        </div>
                                    </div>
                            </div>
                       </form>
                        
                    </div>
          				</form>	
  	</div>