
<?php

    if (isset($_POST['name'])){
        $res = array(
            "success"=>0,
            "message"=>"",
            "wifi" =>0,
            "signInAs"=>""
        );
        if (isset($_POST['company']) && isset($_POST['seeing'])){
            $res['signInAs'] = $_POST['name'];
            $res['success'] = 1;
            $res['message'] = "You have now signed in as ".$_POST['name'];
            $res['wifi'] = 1;
            echo json_encode($res);
            exit;
        } else {
            $res['message'] = 'Please check your input';
            $res['success'] = 2;
            echo json_encode($res);
            exit;
        }
    }

?>

<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="/modal.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="" style="max-height:100vh">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center " style="height:90%">
                <div class="col-md-9 col-lg-4 col-xl-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image" style="height:40vh">
                </div>
                <div class="col-md-8 col-lg-8 col-xl-6 offset-xl-1">
                    <form id="signInForm">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <img src="https://headoffice.losportal.co.uk/assets/img/logo/loslogoprintfull-trans.png">

                        </div>

                        <div class="divider d-flex align-items-center mt-4 mb-2">
                            <p>Welcome to Lo's Pharmacy, Please sign in by entering the following detail</p>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Your Name:</label>

                            <input required type="text" name="name" id="name" class="form-control form-control-lg"
                            placeholder="Name" />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Your Company:</label>

                            <input required type="text" name="company" id="company" class="form-control form-control-lg"
                            placeholder="Name" />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Who You seeing today:</label>
                            <input required type="text" name="seeing" id="seeing" class="form-control form-control-lg"
                            placeholder="Name" />
                        </div>
                        <button id="submitBtn" class="btn btn-success form-control">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
            Copyright © <?= date('Y') ?>. All rights reserved. Lo's Pharmacy Group
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <!--
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            -->
            <!-- Right -->
        </div>
    </section>

    <!-- message HTML -->
    <div id="messageModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  class="modal fade">
        <div class="modal-dialog modal-lg modal-confirm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div id="modalIcon"></div>
                    <h4 class="modal-title w-100" id="modalTitle"></h4>
                </div>
                <div class="modal-body">
                    <h5 id="modalMessage"></h5>
                    <div class="mt-2" id="wifiDetail">
                        <p>Please see the WIFI detail below if you wish to use the guest WIFI</p>
                        <h4>WIFI name: Los-wifi<br>Password: Warehouse65</h4>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" aria-label="Close" class="btn btn-danger"  data-bs-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            var $form = $('#signInForm');

            $('#submitBtn').off().on('click',function(e){
                e.preventDefault();
                if ($form[0].checkValidity()) {
                    var formdata;
                    formdata = $form.serialize();
                    $.post('',formdata,function(res){
                        console.log(res);
                        if (res.success == 1){
                            $('#messageModal').on("hidden.bs.modal",function(){
                                location.reload();
                            })
                        }
                        showModal(res.success,res.signInAs);
                    },'json')
                } else {
                    showModal(2);
                }
            })
        })


        function showModal($type,$name = false){
            var $modal = $('messageModal');
            let $message;
            let $title;
            let $forward =0;
            let $icon;

            $modal.find('#wifiDetail').hide();
            switch ($type){
                case 1:
                    $message = 'Your have successfully sign in as '+((!$name.length)?"":$name)+'.<br>Please head toward reception to collect your badge.'
                break;
                case 0:
                    $message = 'Unable to save your detail, please speak to our receptionist.';
                break;
                case 2:
                    $message = 'Please check your input and try again.'
                break;
            }
            $('#modalMessage').html($message);
            if ($type == 0 || $type == 2){       
                $('#modalTitle').html("Error");         
                $('#wifiDetail').hide();
                $('#modalIcon').html('<i class="fa fa-times-circle-o fa-5x iconFailed"></i>');
            } else {
                $('#modalTitle').html("Success");         
                $forward = 1;
                $('#wifiDetail').show();
                $('#modalIcon').html('<i class="fa fa-check-circle-o fa-5x iconSuccess"></i>');
            }



            $('#messageModal').modal('show');
            if ($forward == 1){
         
            }
        }
    </script>
</body>

</html>