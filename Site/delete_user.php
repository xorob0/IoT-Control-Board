<!DOCTYPE html>
<html>

<?php
	session_start();
	require_once('assets/php/modele/show.php');
	require_once('assets/php/modele/idCheck.php');
	require_once('assets/php/modele/idAdmin.php');
	include('template.php');
?>
            <div class="container d-flex hero" style="background-color:#ffffff;padding:0px;">
                <ul class="list-group">
                    <li class="list-group-item"><a href="settings.php">Add User</a></li>
                    <li class="list-group-item"><span></span><a href="add_device.php">Delete user</a></li>
                    <li class="list-group-item"><span>Modify user</span></li>
                </ul>
                <div class="d-flex flex-column flex-fill" style="padding:10px;">
                    <h2 class="justify-content-center">Modify user</h2>
                    <div class="form-group"><form class="form-inline">
</form>
</div>
                    <form>
                        <div class="d-flex"></div>
                    </form>
                    <form method="post" action="assets/php/delete_user.php">
  <div class="form-group">
     <select  class="form-control" name="login" >
<?php
	showUsers();
?>
      </select>
  </div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" action="assets/php/changepwd.php">Delete user</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
</body>

</html>