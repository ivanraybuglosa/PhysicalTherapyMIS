<div id="edit<?php echo $res['EvalID']; ?>" class="modal">
        <div class="modal-content">
            <?php
                include_once("config.php");
                $edit=mysqli_query($mysqli,"select * from evaluation where EvalID='".$res['EvalID']."'");
                $erow=mysqli_fetch_array($edit);
            ?>
                <div class="card-panel">
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
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMLeftShoulder"  id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftShoulder']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Shoulder</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMRightShoulder" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightShoulder']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Elbow</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMLeftElbow" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftElbow']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Elbow</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMRightElbow" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightElbow']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Forearm</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMLeftForearm" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftForearm']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Forearm</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMRightForearm" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightForearm']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Lefthand Fingers</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMLefthandFingers" id="test5" min="0" max="10" value="<?php echo $erow['ROMLefthandFingers']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Righthand Fingers</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMRighthandFingers" id="test5" min="0" max="10" value="<?php echo $erow['ROMRighthandFingers']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Wrist</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMLeftWrist" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftWrist']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Wrist</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMRightWrist" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightWrist']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Trunk</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMLeftTrunk" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftTrunk']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Trunk</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMRightTrunk" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightTrunk']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Hip</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMHip" id="test5" min="0" max="10" value="<?php echo $erow['ROMHip']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Knee</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMLeftKnee" id="test5" min="0" max="10" value="<?php echo $erow['ROMHip']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Knee</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMRightKnee" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightKnee']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Ankle</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMLeftAnkle" id="test5" min="0" max="10" value="<?php echo $erow['ROMLeftAnkle']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Ankle</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMRightAnkle" id="test5" min="0" max="10" value="<?php echo $erow['ROMRightAnkle']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Neck</p>
                                            </div>
                                            <div class="input-field col s9">
                                                <p class="range-field">
                                                    <?php include("rulerModal.php"); ?>
                                                    <input type="range" name="ROMNeck" id="test5" min="0" max="10" value="<?php echo $erow['ROMNeck']; ?>" disabled />
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                </div>
            <div class="modal-footer">
                <button class="btn red waves-effect waves-light right modal-close"  style="margin-left:20px;">Close</button>
            </div>
    </div>
</div>