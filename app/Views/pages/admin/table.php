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
                                                                    <span id="myBtn"><i class="fa fa-edit" 
                                                                    data-toggle="modal" id="update_btn" 
                                                                    data-name-id="<?php echo $user['id']?>"
                                                                    data-name-estab="<?php echo $user['es_name'] ?>" 
                                                                    data-name-code="<?php echo $user['code'] ?>" 
                                                                    data-name-contact="<?php echo $user['contact_number'] ?>" 
                                                                    data-name-address="<?php echo $user['address']?>"
                                                                    data-name-email="<?php echo $user['email_address']?>"
                                                                    data-name-auth="<?php echo $user['auth_person']?>"
                                                                    data-name-pos="<?php echo $user['position']?>"


                                                                    data-target="#Modal1"></i></span>
                                                                    &nbsp;
                                                                   <span class="delete-btn" data-id="<?= $user['id']?>"> 
                                                                   <i class="fa fa-trash"></i></span>
                                                                   
                                                                    
                                                                      <?php endforeach; ?>
                                                                </td>
                                                            </tr>
                                                      
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo view("include/update_modal.php")?>
                                    
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
    destroy: true,
    "paging": true, // disable pagination
    "ordering": true, // disable sorting
    "searching": true // disable searching
  });
});

$(document).on('click', '#update_btn',function(){
    $('input[name=id]').val($(this).data('name-id'));

    $('input[name=es_name]').val($(this).data('name-estab'));
    $('input[name=code]').val($(this).data('name-code'));
    $('input[name=contact_number]').val($(this).data('name-contact'));
    $('input[name=address]').val($(this).data('name-address'));
    $('input[name=email_address]').val($(this).data('name-email'));
    $('input[name=auth_person]').val($(this).data('name-auth'));
    $('input[name=position]').val($(this).data('name-pos'));
})
</script>
<script>
    // $(document).ready(function() {
        // $('#form_modal').submit(function(e) {
        //     e.preventDefault();
            
            // $.ajax({
            //     url: '<?= base_url('update') ?>',
            //     type: 'post',
            //     data: $(this).serialize(),
            //     success: function(response) {
            //         alert(response);
            //         window.location.href = base_url + 'table';
            //     },
            //     error: function(xhr, status, error) {
            //         console.log(xhr.responseText);
            //     }
            // });
        // });

        $('#update_estab').on('submit', function(e) {
            e.preventDefault();

               $.ajax({
                url: '<?= base_url('update') ?>',
                type: 'post',
                data: $(this).serialize(),
                dataType : 'text',
                success: function(response) {
                    alert(response);
                    window.location.href = base_url + 'table';
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        })

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
