<!DOCTYPE html>
<?php
    include('header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>/assets/#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- <section class="content">
      <div class="container-fluid">
        Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New User</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url()?>/assets/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url()?>/assets/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url()?>/assets/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url()?>/assets/#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>fist_name</th>
                        <th>last_name</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>email</th>
                        <th>Action</th>
                    </tr>
                </thead> 
              
               
                <tbody>
                <?php foreach($result as $result1){ ?>
                <tr>
                        <td><?php echo $result1['id'] ?></td>
                        <td><?php echo $result1['user_f_name'] ?></td>
                        <td><?php echo $result1['user_l_name'] ?></td>  
                        <td><?php echo $result1['user_email'] ?></td>
                        <td><?php echo $result1['address'] ?></td>
                        <td><?php echo $result1['city'] ?></td>
                        <td>
                          <a href="<?php echo base_url('Admin_controller/edit/').$result1['id']  ?>">
                          <button type="button" class="btn btn-success">Edit</button>
                            </a>
                            <a href="<?php echo base_url('Admin_controller/delete/').$result1['id']  ?>">
                          <button type="button" class="btn btn-danger">Delete</button>
                            </a> 
                      </td>
                    </tr>
                    <?php
                }
                    ?>
                </tbody>
            </table>
         
      </div><!-- /.container-fluid -->
    </section> -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include('footer.php');
  ?>
