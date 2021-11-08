<?php include('db_connect.php') ?>
<?php
$twhere ="";
if($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>
<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 1): ?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-black elevation-1"><i class="fa fa-building"></i></span>
              <div class="info-box-content">
                  <span class="info-box-text">Pick Up Stations</span>
                  <span class="info-box-number"><?php echo $conn->query("SELECT * FROM branches")->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
           <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-teal elevation-1"><i class="fa fa-boxes"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Parcels</span>
                    <span class="info-box-number"><?php echo $conn->query("SELECT * FROM parcels")->num_rows; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users text-white"></i></span>
              <div class="info-box-content">
                  <span class="info-box-text">Total Staff</span>
                  <span class="info-box-number"><?php echo $conn->query("SELECT * FROM users where type != 1")->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <hr>
          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-user-secret"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Drivers</span>
                    <span class="info-box-number"><?php echo $conn->query("SELECT * FROM users where type != 1")->num_rows; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-user text-white"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Customers</span>
                    <span class="info-box-number"><?php echo $conn->query("SELECT * FROM users where type != 1")->num_rows; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-truck"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Today Trips</span>
                    <span class="info-box-number"><?php echo $conn->query("SELECT * FROM users where type != 1")->num_rows; ?></span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
          </div>
        </div>

<?php else: ?>
	 <div class="col-12">
          <div class="card">
          	<div class="card-body">
          		Welcome <?php echo $_SESSION['login_name'] ?>!
          	</div>
          </div>
      </div>
          
<?php endif; ?>
