<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    echo view("include/meta.php");
    echo view("include/css.php");
    echo view("include/datatables.php");
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
                                              
                                                <div class="pull-right">
                                                                <a href="#" data-toggle="modal" data-target="#Modal"><button class="btn_submit" style="outline: none;"
                                                                 >Add New</button></a>
                                                              </div>  
                                                <!-- <span>use class <code>table-hover</code> inside table element</span> -->
                                                <!-- <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div> -->
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
                                                                <th>Annual Report</th>
                                                                <th>Action</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody > 
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo view("include/update_modal.php")?>
                                    <?php echo view("include/add_modal.php")?>
                                  
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
      
<?php 
echo view("include/script.php");
echo view("include/update_modal.php");
echo view("include/view_modal.php");
?>

<script>
    $('#myTable').DataTable({
        ajax: {
            url: base_url + 'read',
            type : 'POST',
            dataSrc: ''
        },
        columns: [
            { data: 'code' },
            { data: 'es_name'},
            { data: 'contact_number' },
            { data: 'address' },
            { data: 'email_address' },
            { data: 'auth_person' },
            { data: 'position' },
            { data: 'annual_report', defaultContent: '<a href="#" data-toggle="modal" data-target="#Modal3">No Data</a>' },

            {
                data: null,
                render: function(data, type, row) {                 
                    return '<span id="upd" data-name-id="'+row.id+'" data-name-name="'+row.es_name+'" data-name-code="'+row.code+'" data-name-contact="'+row.contact_number+'" data-name-address="'+row.address+'" data-name-email="'+row.email_address+'"data-name-auth="'+row.auth_person+'"data-name-pos="'+row.position+'"><i class="fa fa-edit"></i></span>'+
                    '&nbsp; <span id="del" data-id="'+row.id+'"><i class="fa fa-trash"></i></span>';                    
                }
            }
        ]
    });
    $(document).on('click', '#del', function() {
    var id = $(this).data('id');
    if(confirm("Are you sure you want to delete this row?")) {
        $.ajax({
            url: base_url + 'delete',
            method: "POST",
            data: {id: id},
            success: function(data) {
                $('#myTable').DataTable().ajax.reload();
            }
        });
    }
});
$(document).on('click', '#view', function() {
    var id = $(this).data('id');
    $.ajax({
        url: base_url + 'view_modal',
        method: "POST",
        data: {id: id},
        success: function(data) {
            $('#edit-modal-body').html(data);
            $('#Modal2').modal('show');
        }
    });
});
$(document).on('click', '#upd', function() {
    var id = $(this).data('id');
    $.ajax({
        url: base_url + 'update_modal',
        method: "POST",
        data: {id: id},
        success: function(data) {
            $('#edit-modal-body').html(data);
            $('#Modal1').modal('show');
        }
    });
});
$(document).on('click', '#upd',function(){
    $('input[name=id]').val($(this).data('name-id'));

    $('input[name=es_name]').val($(this).data('name-name'));
    $('input[name=code]').val($(this).data('name-code'));
    $('input[name=contact_number]').val($(this).data('name-contact'));
    $('input[name=address]').val($(this).data('name-address'));
    $('input[name=email_address]').val($(this).data('name-email'));
    $('input[name=auth_person]').val($(this).data('name-auth'));
    $('input[name=position]').val($(this).data('name-pos'));
})
$('#update_estab').on('submit', function(e) {
            e.preventDefault();

               $.ajax({
                url:  base_url + 'update',
                type: 'post',
                data: $(this).serialize(),
                dataType : 'text',
                success: function(response) {
                   $('#Modal1').modal('hide');
                   $('#myTable').DataTable().ajax.reload();

                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        })
$('#add_estab').submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '<?= base_url('create') ?>',
                type: 'post',
                data: $(this).serialize(),
                success: function(response) {
                   $('#Modal').modal('hide');
                   $('#myTable').DataTable().ajax.reload();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
$('#add_survey').submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '<?= base_url('survey') ?>',
                type: 'post',
                data: $(this).serialize(),
                success: function(response) {
                   $('#Modal3').modal('hide');
                   $('#myTable').DataTable().ajax.reload();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
</script>
<script>
// Initialize a counter for the number of visible modals
let numVisibleModals = 0;
// Attach a listener to all modal elements
$('.modal').on('hidden.bs.modal', function () {
  // When a modal is hidden, decrement the counter
  numVisibleModals--;
  // If all modals are hidden, execute your function
  if (numVisibleModals === 0) {
    $('input').val($(this).data(''));
  }
});
// When a modal is shown, increment the counter
$('.modal').on('shown.bs.modal', function () {
  numVisibleModals++;
});
</script>  
</body>
  <?php echo view("include/view_modal")?>
</html>
