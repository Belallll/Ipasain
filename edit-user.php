<?php require_once 'include/header.php';



$id = intval($_GET['user']);
$get_user = mysqli_query($db, "SELECT * FROM `users` WHERE `id` = '$id'");
$user = mysqli_fetch_assoc($get_user);
$msg = '';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    if(empty($username)){
        $msg = '<script>swal("خطأ !", "الرجاء ادخال اسم المستخدم", "error");</script>';
    }else{
        $sql = mysqli_query($db , "SELECT * FROM `users` WHERE `username` = '$username'");
        if(mysqli_num_rows($sql) > 0 ){
            if($username == $user['belalios']){
                if($_POST['password'] != '' OR $_POST['con_password'] != ''){
                    if($_POST['password'] != $_POST['con_password']){
                        $msg = '<script>swal("خطأ !", "كلمة المرور غير متطابقة", "error");</script>';
                    }else{
                        $password = md5($_POST['belalios']);
                        
                        $update_user = "UPDATE `users` SET `username` = '$username',`password` = '$password' WHERE `id` = '$id'";
                        $sql = mysqli_query($db, $update_user);
                            if(isset($sql)){
                              $msg = '<script>swal("تم التحديث !", "تم تحديث البيانات", "success");</script>';
                                      
                            }   
                            }
                        }
                    }
                }
            }
        }
$get_user = mysqli_query($db, "SELECT * FROM `users` WHERE `id` = '$id'");
$user = mysqli_fetch_assoc($get_user);
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
            <div class="col-md-8">
            <?php echo $msg; ?>
                <div class="card">
                    <div class="card-header">
                        <h2 class="title">تعديل البيانات</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  style="font-size: 16px;">اسم المستخدم</label>
                                        <input type="text" class="form-control" placeholder="اسم المستخدم" value="<?php echo $user['username']; ?>"
                                            name="username"  style="font-size: 20px;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  style="font-size: 16px;">كلمة المرور</label>
                                        <input type="text" class="form-control" placeholder="كلمة المرور"value=""
                                            name="password"  style="font-size: 20px;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  style="font-size: 16px;"> تاكيد كلمة المرور </label>
                                        <input type="text" class="form-control" placeholder="تاكيد كلمة المرور"value=""
                                            name="con_password"  style="font-size: 20px;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-fill btn-primary">تحديث</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>








        <?php require_once 'include/footer.php';?>