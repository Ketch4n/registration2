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
            <?php 
            echo view("include/navbar.php")
            ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php 
                    echo view("include/sidebar.php")
                    ?>
                    <div class="pcoded-content">
                        <?php echo view("include/header.php")?>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <?php 
                                            // echo view("content/form/form1.php")
                                            ?>
                                            <?php 
                                            // echo view("content/form/form2.php")
                                            ?>
                                        </div>
                                        <div class="row">
                                            <?php 
                                            // echo view("content/form/form3.php")
                                            ?>
                                            <?php 
                                            // echo view("content/form/form4.php")
                                            ?>
                                        </div>
                                        <div class="row form_flex">
                                           
                                            <div class="col-sm-8">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Input Establishment Data</h5>
                                                        <!-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
                                                    </div>
                                                    <div class="card-block">
                                                        <!-- <h4 class="sub-title">Basic Inputs</h4> -->
                                                        <form id="form_input">
                                                            <?php echo view("content/form/form.php")?>
                                                            
                                                            <!-- <div class="form-group row">
                                                                <label class="col-sm-2">Predefine
                                                                    Input</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control form-control-round" value="Enter yout content after me">
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="form-group row">
                                                                <label class="col-sm-2">Select Box</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control form-control-round">
                                                                        <option value="opt1">Select One Value Only</option>
                                                                        <option value="opt2">Type 2</option>
                                                                        <option value="opt3">Type 3</option>
                                                                        <option value="opt4">Type 4</option>
                                                                        <option value="opt5">Type 5</option>
                                                                        <option value="opt6">Type 6</option>
                                                                        <option value="opt7">Type 7</option>
                                                                        <option value="opt8">Type 8</option>
                                                                    </select>
                                                                </div>
                                                            </div> -->
                                                           
                                                            <!-- <div class="form-group row">
                                                                <label class="col-sm-2">Static Text</label>
                                                                <div class="col-sm-10">
                                                                    <div class="form-control-static">Hello !... This is
                                                                        static text
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="form-group row">
                                                                <label class="col-sm-2">Color</label>
                                                                <div class="col-sm-10">
                                                                    <input type="color" class="form-control">
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="form-group row">
                                                                <label class="col-sm-2">Upload File</label>
                                                                <div class="col-sm-10">
                                                                    <input type="file" class="form-control">
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="form-group row">
                                                                <label class="col-sm-2">Textarea</label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                                                </div>
                                                            </div> -->                           
                                                              <div class="pull-right">
                                                                <button type="submit" class="btn_submit">submit</button>
                                                              </div>                                                                                                         
                                                        </form>                                                        
                                                        <?php 
                                                        // echo view("content/form/form5.php")
                                                        ?>
                                                    </div>
                                                </div>
                                                <!-- Basic Form Inputs card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
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
   echo view("include/script");
?>
<script>
    $(document).ready(function() {
        $('#form_input').submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: '<?= base_url('create') ?>',
                type: 'post',
                data: $(this).serialize(),
                success: function(response) {
                    alert(response);
                    window.location.href = base_url + 'table';
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
</body>

</html>
