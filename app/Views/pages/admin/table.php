<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    echo view("include/meta.php");
    echo view("include/css.php");
    ?>
</head>

<body>
    <!-- Pre-loader start -->
    <?php 
    echo view("include/preloader.php")
    ?>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
           <?php echo view("include/navbar.php")?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                   <?php echo view("include/sidebar.php")?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <?php echo view("include/header.php")?>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Inverse table card start -->
                                        <?php
                                        //  echo view('content/table/dark_table.php')
                                        ?>
                                        <!-- Inverse table card end -->
                                        <!-- Hover table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>List of Establishment Data</h5>
                                                <!-- <span>use class <code>table-hover</code> inside table element</span> -->
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table id="myTable">
                                                        <thead style="background-color:lightblue">
                                                            <tr>
                                                                <th>Code</th>
                                                                <th>Establishment Name</th>
                                                                <th>Contact Number</th>
                                                                <th>Address</th>
                                                                <th>Email Address</th>
                                                                <th>Authorize Person</th>
                                                                <th>Position</th>
                                                                <th>Action</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody > 
                                                            <?php foreach ($table_data as $user): ?>
                                                            <tr>
                                                                <td style="font-weight: bold;"><?= $user['code'] ?></td>
                                                                <td><?= $user['es_name'] ?></td>
                                                                <td><?= $user['contact_number'] ?></td>
                                                                <td><?= $user['address'] ?></td>
                                                                <td><?= $user['email_address'] ?></td>
                                                                <td><?= $user['auth_person'] ?></td>
                                                                <td><?= $user['position'] ?></td>
                                                                <td>
                                                                    <span id="myBtn"><i class="fa fa-edit" ></i></span>
                                                                    &nbsp;
                                                                   <span class="delete-btn" data-id="<?= $user['id']?>"> 
                                                                   <i class="fa fa-trash"></i></span>
                                                                   
                                                                    
                                                                    
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
<?php echo view("include/script.php")?>

<script type="text/javascript">

  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>

<script>
    $(document).ready( function () {
  $('#myTable').DataTable({
    destroy: true
    "paging": true, // disable pagination
    "ordering": true, // disable sorting
    "searching": true // disable searching
  });
});
</script>

<script>
    $(document).on('click', '.delete-btn', function() {

  var id = $(this).data('id');
  $.ajax({
    url: base_url + 'delete_data',
    type: 'POST',
    data: { id: id },
    success: function(result) {
       alert("Successfully Deleted")
         window.location.href = base_url + '/table';

    },
    error: function() {
     alert("Error")
    }
  });
});

</script>
    
</body>
</html>
