<div id="update<?php echo $res['EvalID']; ?>" class="modal">
    <div class="modal-content">
        <div class="card-panel">
            <h4 class="header2">Update Evaluation Form</h4>
            <div class="divider"></div>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="patientID" type="text" value="<?php echo $res1['PatientName']; ?>" style="color: black;" disabled>
                            <label for="patientID" style="color: black;">Patient Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="physicalTherapist" type="text" value="<?php echo $res['EvalPT']; ?>" >
                            <label for="physicalTherapist">Physical Therapist</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="evalID" type="Number" value="<?php echo $res['EvalSessionQty']; ?>" min="0" >
                            <label for="evalID">Number of Session</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="sessions" type="text" value="<?php echo $res['Remarks']; ?>">
                            <label for="sessions">Remarks</label>
                        </div>
                    </div>
                    <div class="divider"></div>
                                            <h4 class="header">Evaluation Details</h4>
                        <div class="divider"></div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <textarea id="caseDescription" class="materialize-textarea"><?php echo $erow['EvalChiefComplaint']; ?></textarea>
                                    <label for="caseDescription">Chief Complaint</label>
                                </div>
                                <div class="input-field col s6">
                                    <textarea id="caseDescription" class="materialize-textarea"><?php echo $erow['EvalHistoryIllness']; ?></textarea>
                                    <label for="caseDescription">History Patient Illness</label>
                                </div>
                            </div>
                            <div class="row">
                                 <h4 class="header">Occular Inspection</h4>
                                    <div class="divider"></div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <textarea name="Speech" class="materialize-textarea"><?php echo $erow['EvalSpeech']; ?></textarea>
                                                <label for="Speech">Speech</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Edema" class="materialize-textarea"><?php echo $erow['EvalEdema']; ?></textarea>
                                                <label for="Edema">Edema</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Endurance" class="materialize-textarea"><?php echo $erow['EvalEndurance']; ?></textarea>
                                                <label for="Endurance">Endurance</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <textarea name="Vision" class="materialize-textarea"><?php echo $erow['EvalVision']; ?></textarea>
                                                <label for="Vision">Vision</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="MuscleTone" class="materialize-textarea"><?php echo $erow['EvalMuscleTone']; ?></textarea>
                                                <label for="MuscleTone">Muscle Tone</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Posture" class="materialize-textarea"><?php echo $erow['EvalPosture']; ?></textarea>
                                                <label for="Posture">Posture</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <textarea name="Hearing" class="materialize-textarea"><?php echo $erow['EvalHearing']; ?></textarea>
                                                <label for="Hearing">Hearing</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Coordination" class="materialize-textarea"><?php echo $erow['EvalCoordination']; ?></textarea>
                                                <label for="Coordination">Coordination</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Skin" class="materialize-textarea"><?php echo $erow['EvalSkin']; ?></textarea>
                                                <label for="Skin">Skin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="header">Range of Motion</h4>
                                    <div class="divider"></div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Shoulder</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="ROMLeftShoulder"  id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftShoulder']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Shoulder</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="ROMRightShoulder" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightShoulder']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Elbow</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftElbow" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftElbow']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Elbow</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightElbow" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightElbow']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Forearm</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftForearm" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftForearm']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Forearm</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightForearm" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightForearm']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Lefthand Fingers</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLefthandFingers" id="test5" min="0" max="10" value="<?php echo $erow['ROMLefthandFingers']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Righthand Fingers</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRighthandFingers" id="test5" min="0" max="10" value="<?php echo $erow['ROMRighthandFingers']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Wrist</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftWrist" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftWrist']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Wrist</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightWrist" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightWrist']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Trunk</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftTrunk" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftTrunk']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Trunk</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightTrunk" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightTrunk']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Knee</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftKnee" id="test5" min="0" max="10" value="<?php echo $erow['ROMHip']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Knee</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightKnee" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightKnee']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Ankle</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftAnkle" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftAnkle']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Ankle</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightAnkle" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightAnkle']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Neck</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMNeck" id="test5" min="0" max="10" value="<?php echo $erow['ROMNeck']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Hip</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMHip" id="test5" min="0" max="10" value="<?php echo $erow['ROMHip']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                            </div>
                            <div class="divider"></div>
                                    
                            <h4 class="header">Manual Muscle Test</h4>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Shoulder</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftShoulder" value="<?php echo $erow['MMTLeftShoulder']; ?>"  min="1" max="5" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Shoulder</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightShoulder" value="<?php echo $erow['MMTRightShoulder']; ?>" min="1" max="5" style="color: black;" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Elbow</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftElbow" value="<?php echo $erow['MMTLeftElbow']; ?>"  min="1" max="5" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Elbow</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightElbow" value="<?php echo $erow['MMTRightElbow']; ?>"  min="1" max="5" style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Forearm</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftForearm" value="<?php echo $erow['MMTLeftForearm']; ?>"  min="1" max="5" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Forearm</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightForearm" value="<?php echo $erow['MMTRightForearm']; ?>" min="1" max="5" style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Hand Fingers</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLefthandFingers" value="<?php echo $erow['MMTLefthandFingers']; ?>"  min="1" max="5" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Hand Fingers</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRighthandFingers" value="<?php echo $erow['MMTRighthandFingers']; ?>" min="1" max="5" style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Wrist</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftWrist" value="<?php echo $erow['MMTLeftWrist']; ?>"  min="1" max="5" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Wrist</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightWrist" value="<?php echo $erow['MMTRightWrist']; ?>"  min="1" max="5" style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Trunk</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftTrunk" value="<?php echo $erow['MMTLeftTrunk']; ?>"   min="1" max="5" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Trunk</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightTrunk" value="<?php echo $erow['MMTRightTrunk']; ?>" min="1" max="5" style="color: black;" />
                                                </p>
                                            </div>
                                        </div>                                        
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Knee</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftKnee" value="<?php echo $erow['MMTLeftKnee']; ?>" min="1" max="5" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Knee</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightKnee" value="<?php echo $erow['MMTRightKnee']; ?>" min="1" max="5" style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Ankle</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftAnkle" value="<?php echo $erow['MMTLeftAnkle']; ?>" min="1" max="5" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Ankle</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightAnkle" value="<?php echo $erow['MMTRightAnkle']; ?>" min="1" max="5" style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Neck</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTNeck" value="<?php echo $erow['MMTNeck']; ?>"  min="1" max="5" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Hip</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTHip" value="<?php echo $erow['MMTHip']; ?>"  min="1" max="5" style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                            
    </div>
    <div class="row">
        <div class="input-field col s12">
            <button class="btn red waves-effect waves-light right modal-close" type="submit" name="Submit" value="edit" style="margin-right:20px;">Close</button>
            <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" value="edit" style="margin-right:20px;">Update</button>
        </div>
        </form>
                </div>
                            </div>
                
            </div>   
        </div>                                 
    </div>
    
</div>