<?php 
$request = \Config\Services::request();
$currentURL = $request->uri->getPath();
?>
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        Labor Localization
                    </h5>
                    <p class="m-b-0">PESO Oroquieta</p>
                </div>
            </div>
            <!-- <div class="col-md-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url()?>"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?php echo $currentURL ?></a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</div>