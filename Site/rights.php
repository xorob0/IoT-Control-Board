<!DOCTYPE html>
<html>

<?php
	session_start();
	require_once('assets/php/modele/show.php');
	require_once('assets/php/modele/idCheck.php');
	include('template.php');
?>
            <div class="container d-flex hero" style="background-color:#ffffff;padding:0px;">
                <ul class="list-group">
                    <li class="list-group-item"><a href="settings.php">Settings</a></li>
                    <li class="list-group-item"><span></span><a href="add_device.php">Add device</a></li>
                    <li class="list-group-item"><span></span><a href="alter_device.php">Modify device</a></li>
                    <li class="list-group-item"><span></span><a href="alter_device.php">Delete device</a></li>
                    <li class="list-group-item"><span>Rights</span></li>
                </ul>
                <div class="d-flex flex-column flex-fill" style="padding:10px;">
                    <h2 class="justify-content-center">Rights</h2>
                    <form method="post" action="assets/php/add_right.php" >
                        <div class="form-group">
							<div class="form-group">
								<select class="form-control" name="device" >
									<?php
										showOwnedDevicesOptions();
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<select class="form-control" name="user" >
								<?php
									showUsers();
								?>
							</select>
						</div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" >Add right</button></div>
						<div class="form-group"><button class="btn btn-primary btn-block" type="submit" formaction="assets/php/remove_right.php" >Delete right</button></div>
					</form>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>