<?php
 require_once 'include/header.php';


?>





<?php require_once 'include/header.php';?>


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
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Simple Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered dataTables-example">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th style="text-align: center;"> الكود </th>
                                        <th style="text-align: center;"> UUID </th>
                                        <th style="text-align: center;"> الحالة </th>
                                        <th style="text-align: center;"> مدة الكود </th>
                                        <th style="text-align: center;"> وقت الاستخدام </th>
                                        <th style="text-align: center;"> تاريخ الانشاء </th>
                                        <th style="text-align: center;"> المزيد </th>
                                    </tr>
                                </thead>
                                <tbody id="table_body">
                                        <?php
                            $codes = mysqli_query($db,"SELECT * FROM codes WHERE status = 'expired'");
                            if(!empty($codes)):
                            $i = 1;
                            foreach ($codes as $row):
                            ?>
                                        <tr id="r<?= $row['id']?>">
                                            <th style="text-align: center;" scope="row"><?php echo $i++; ?></th>
                                            <td><?php echo $row['code'];?></td>
                                            <td style="text-align: center;">
                                            <?php echo $row['uuid'];?></td>
                                            <td style="text-align: center;">
                                            <?php echo $row['status'];?></td>
                                            <td style="text-align: center;"><?php echo $row['code_time'];?></td>
                                            <td style="text-align: center;"><?php echo $row['code_use'];?></td>
                                            <td style="text-align: center;"><?php echo $row['date'];?></td>
                                            <td style="text-align: center;"><a id="del"
                                                    rel="<?= $row['id']?>" type="button"
                                                    class="btn btn-danger btn-icon-text ml-1"><i
                                                        class="btn-icon-append"></i>حذف</a></td>
                                        </tr>
                                        <?php endforeach;
                                        else:
                                            echo '<script>swal({
                                                title: "لايوجد اقسام حاليا ",
                                                icon: "warning",
                                                button: "اضافة قسم",
                                                }).then(function() {
                                                window.location = "add-group";
                                                });</script>';
                                        endif;
                                        ?>
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>






    <script src="assets/js/jquery.min.js"></script>
<script>
$(document).on("click", "#del", function() {
    swal({
        title: "هل انت متأكد تريد الحذف ؟",
        icon: "warning",
        buttons: ["تراجع", "نعم"],
        dangerMode: true,
        text: "لن تستطيع استرجاع المعلومات بعد الحذف",
    }).then((willDelete) => {
        if (willDelete) {
            // function del post ##
            var delall = $(this).attr('rel');
            $.post('delete.php', {
                'id1': delall
            }, function(data) {
                $("#r" + delall).fadeOut(500);
            });
            // success del post ##
        }
    });
});
</script>
    <?php require_once 'include/footer.php';?>




<?php require_once 'include/footer.php';?>