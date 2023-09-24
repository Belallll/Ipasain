<?php require_once 'include/header.php';




if (isset($_POST['add'])) {

    $startcode = $_POST["code"];
    $manycode = $_POST["manycode"];
    $code_time = $_POST["code_time"];
    $date =date("Y/m/d H:i:s");
    $status = "NotActivated";
    
    
    
    
    $codess = array();
    for ($i = 0; $i < $manycode ; $i++) {
        $rand = 'HACK2YQ0032JE26DSVCX12PUOBFGZGG881033';
        $key = $startcode . substr(str_shuffle($rand), 1, 12);
        $codess[] = $key . "\n";
        $sql = "INSERT INTO `codes`(`code`, `uuid`, `status`, `date`, `code_time`, `code_use`, `code_exp`) 
                VALUES ('$key', '', '$status', '$date', '$code_time', '', '')";

        if ($db->query($sql) === TRUE) {
            $Happy =  "تم اضافه الكود بنجاح";
            
        $download_link = 'data:text/plain;charset=utf-8,' .  implode("
        ", $codess);
$download_filename = 'codes.txt';

  // Generate the download link
  $link = "<a href='$download_link' class='btn btn-fill btn-primary' download='$download_filename' >تنزيل الاكواد</a>";
  
  
    
        } else {
            $Happy =  "Error: " . $sql . "<br>" . $db->error;
        }
    }
    
}
$one =  "1d";
$week =  "7d";
$month = "1m";
$threemonth =  "3m";
$sixmonth =  "6m";
$oneyear = "1y";
$rand = 'HACK200322612PUBGGG881033';



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
                <div class="card">
                    <div class="card-header">
                        <h2 class="title">اضافة كود</h2>
                        <div><?php echo $Happy ; ?></div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  style="font-size: 16px;">الكود</label>
                                        <input type="text" class="form-control" placeholder="بداية الكود"
                                            name="code"  style="font-size: 20px;">
                                            
                         <label  style="font-size: 16px;"></label>عدد الاكواد</label>
                                            
                        <input type="number" class="form-control" placeholder="عدد الاكواد"
                                            name="manycode"  style="font-size: 20px;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  style="font-size: 16px;">المدة</label>
                                        <select name="code_time" class="form-control bg-dark" style="font-size: 16px;padding:0px;">
                                            <option value="<?php echo $one;?>"  style="font-size: 20px;direction: rtl;">1 day</option>
                                            <option value="<?php echo $week;?>"  style="font-size: 20px;direction: rtl;">1 Weak</option>
                                            <option value="<?php echo $month;?>"  style="font-size: 20px;direction: rtl;">1 Month</option>
                                            <option value="<?php echo $threemonth;?>"  style="font-size: 20px;direction: rtl;">3 Month</option>
                                            <option value="<?php echo $sixmonth;?>"  style="font-size: 20px;direction: rtl;">6 Month</option>
                                            <option value="<?php echo $oneyear;?>"  style="font-size: 20px;direction: rtl;">1 Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="add" class="btn btn-fill btn-primary">اضافة</button>
                        <?php echo $link;?>        
                    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>








        <?php require_once 'include/footer.php';?>