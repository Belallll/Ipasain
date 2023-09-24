<?php
 require_once 'include/header.php';

 $users = mysqli_query($db , "SELECT * FROM users " );
 $users = mysqli_num_rows($users);

 $codes = mysqli_query($db , "SELECT * FROM codes " );
 $codes = mysqli_num_rows($codes);

 $codesexp = mysqli_query($db , "SELECT * FROM codes WHERE status = 'expired'" );
 $codesexp = mysqli_num_rows($codesexp);

 $codesnot = mysqli_query($db , "SELECT * FROM codes WHERE status = 'NotActivated'" );
 $codesnot = mysqli_num_rows($codesnot);

 $codesact = mysqli_query($db , "SELECT * FROM codes WHERE status = 'Activated'" );
 $codesact = mysqli_num_rows($codesact);
?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                   تسجيل خروج
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                <a href="edit-user?user=<?=$_SESSION['id'];?>" class="nav-item dropdown-item">تعديل البيانات</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                  <?php  if (isset($_SESSION['username'])) : ?>
                    <a href="index.php?logout='1'" class="nav-item dropdown-item">تسجيل خروج</a></li>
                    <?php endif ?>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h2 class="card-category">عدد الاكواد</h2>
                <h3 class="card-title"><i class="tim-icons icon-app text-primary"></i> <?= $codes;  ?></h3>
              </div>
              <div class="card-body">

              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">عدد الاكواد المفعلة</h5>
                <h3 class="card-title"><i class="tim-icons icon-check-2 text-info"></i> <?= $codesact;  ?></h3>
              </div>
              <div class="card-body">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">عدد الاكواد الغير مفعلة</h5>
                <h3 class="card-title"><i class="tim-icons icon-alert-circle-exc text-success"></i><?= $codesnot;  ?></h3>
              </div>
              <div class="card-body">
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">عدد الاكواد المنتهية</h5>
                <h3 class="card-title"><i class="tim-icons icon-simple-remove text-danger"></i><?= $codesexp;  ?></h3>
              </div>
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="CopyRight">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> - 2023 Made With <i class="tim-icons icon-heart-2"></i> By
            <a href="https://t.me/belalios" target="_blank">BELALIOS</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
 
  <?php require_once 'include/footer.php';