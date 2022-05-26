<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Contact Us</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">Home</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<!-- Contact Start -->
<div class="container-fluid bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                    <div class="d-inline-flex border border-secondary p-4 mb-4">
                        <h1 class="flaticon-office font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4>Alamat</h4>
                            <p class="m-0 text-white"><?= $alamat ?></p>
                        </div>
                    </div>
                    <div class="d-inline-flex border border-secondary p-4 mb-4">
                        <h1 class="flaticon-email font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4>Email Us</h4>
                            <p class="m-0 text-white"><?= $email ?></p>
                        </div>
                    </div>
                    <div class="d-inline-flex border border-secondary p-4">
                        <h1 class="flaticon-telephone font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4>Call Us</h4>
                            <p class="m-0 text-white">+62 <?= $telpon ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mb-5 my-lg-5 py-5 pl-lg-5">
                <div class="contact-form">
                    <div id="notifalert"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="name" name="nama" placeholder="Masukan Nama Lengkap" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control p-4" id="email" name="email" placeholder="Masukan Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea id="summernote" class="form-control p-4" rows="6" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit" id="btnSave">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // function showAlert(type, msg) {

    //     toastr.options.closeButton = true;
    //     toastr.options.progressBar = true;
    //     toastr.options.extendedTimeOut = 1000; //1000

    //     toastr.options.timeOut = 3000;
    //     toastr.options.fadeOut = 250;
    //     toastr.options.fadeIn = 250;

    //     toastr.options.positionClass = 'toast-top-center';
    //     toastr[type](msg);
    // }
    $(document).ready(function() {
        $('#summernote').summernote();
    });


    function notif() {
        $('#notifalert').empty();
        $.ajax({
            url: "<?php echo site_url('contact/alertnotif') ?>",
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                $('#notifalert').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    $('#contactForm').submit(function(e) {
        e.preventDefault();
        var form = $('#contactForm')[0];
        var data = new FormData(form);
        $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable
        $.ajax({
            url: "<?php echo site_url('contact/input_message') ?>",
            type: "POST",
            //contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            data: data,
            dataType: "JSON",

            success: function(data) {
                if (data.status == '00') {
                    // showAlert(data.type, data.mess);
                    $('#contactForm')[0].reset();
                    $('#summernote').summernote('code', '');
                    notif();

                } else {
                    // showAlert(data.type, data.mess);
                }
                $('#btnSave').text('Send Message'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
                $('#btnSave').attr('hide', false); //set button enable
            },
            error: function(jqXHR, textStatus, errorThrown) {
                type = 'error';
                msg = 'Error adding / update data';
                showAlert(type, msg); //utk show alert
                $('#btnSave').text('Send Message'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
                $('#btnSave').attr('hide', false); //set button enable
            }
        });

    });
</script>