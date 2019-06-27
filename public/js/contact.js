 //validation
 $(function () {

     function resetForm(formid) {
         $('#' + formid + ' :input').each(function () {
             $(this).val('').attr('checked', false).attr('selected', false);
         });
     }
     $("form[name='contact']").validate({
         // Specify validation rules
         errorElement: 'small',
         errorClass: 'help-inline',
         highlight: function (element) {
             $(element).closest('.form-control').addClass('has-error');
         },
         unhighlight: function (element) {
             $(element).closest('.form-control').removeClass('has-error');
         },
         rules: {
             name: "required",
             subject: "required",
             message: {
                 required: true,
                 minlength: 5

             },
             email: {
                 required: true,
                 email: true
             }
         },
         messages: {
             name: "Please enter your name",
             subject: "Please enter your subject",
             email: "Please enter a valid email address",
             message: {
                 required: "Please enter your message",
                 minlength: "Your message is too short"

             }
         },
         submitHandler: function (frm) {


             $.ajax({
                 type: $('form[name=contact]').attr('method'),
                 url: $('form[name=contact]').attr('action'),
                 dataType: 'json',
                 data: $('form[name=contact]').serialize(),
                 beforeSend: function () {
                     // setting a timeout
                     $('.contact_btn').text('Loading..').prop('disabled', true);
                 },
                 success: function (response) {
                     if (response.code == 200) {
                         toastr["success"](response.message);
                         resetForm('contact');
                     } else {
                         toastr["error"](response.message);
                     }

                 },
                 error: function (err) {
                     toastr["error"](err);
                 },
                 complete: function () {
                     $('.contact_btn').text('Submit Now').prop('disabled', false);
                 },
             });
             return false;




         }
     });
     /* --------send resume------ */
     $("form[name='send_resume']").validate({
         errorElement: 'small',
         errorClass: 'help-inline',
         highlight: function (element) {
             $(element).closest('.form-control').addClass('has-error');
         },
         unhighlight: function (element) {
             $(element).closest('.form-control').removeClass('has-error');
         },
         rules: {

             name: "required",
             post: "required",
             resume: "required",
             message: {
                 minlength: 5
             },
             email: {
                 required: true,

                 email: true
             }
         },
         messages: {
             name: "Please enter your name",
             post: "Please select one post",
             email: "Please enter a valid email address",
             resume: "Please upload a file",
             message: {
                 minlength: "Your message is too short"

             }
         },
         submitHandler: function (frm) {
             var form = $('form[name=send_resume]')[0];
             var form_data = new FormData(form);



             $.ajax({
                 type: $('form[name=send_resume]').attr('method'),
                 url: $('form[name=send_resume]').attr('action'),
                 dataType: 'json',
                 data: form_data,
                 processData: false,
                 contentType: false,
                 cache: false,
                 enctype: 'multipart/form-data',
                 beforeSend: function () {
                     // setting a timeout
                     $('.send_resume').text('Loading..').prop('disabled', true);
                 },
                 success: function (response) {
                     if (response.code == 200) {
                         toastr["success"](response.message);
                         resetForm('send_resume');
                     } else {
                         toastr["error"](response.message);
                     }

                 },
                 error: function (err) {
                     toastr["error"](err);
                 },
                 complete: function () {
                     $('.send_resume').text('Send Now').prop('disabled', false);
                 },
             });
             return false;




         }
     });
     /* -------- */
     /*  request a quote */
     $("form[name='get_quote']").validate({
         // Specify validation rules
         errorElement: 'small',
         errorClass: 'help-inline',
         highlight: function (element) {
             $(element).closest('.form-control').addClass('has-error');
         },
         unhighlight: function (element) {
             $(element).closest('.form-control').removeClass('has-error');
         },
         rules: {
             contact_person: "required",
             product: "required",
             email: {
                 required: true,
                 email: true
             }
         },
         messages: {
             contact_person: "Please enter your name",
             product: "Please select at least one service",
             email: "Please enter a valid email address",

         },
         submitHandler: function (frm) {
             var form = $('form[name=get_quote]')[0];
             var form_data = new FormData(form);

             $.ajax({
                 type: $('form[name=get_quote]').attr('method'),
                 url: $('form[name=get_quote]').attr('action'),
                 dataType: 'json',
                 data: form_data,
                 processData: false,
                 contentType: false,
                 cache: false,
                 enctype: 'multipart/form-data',
                 beforeSend: function () {
                     // setting a timeout
                     $('.get_quote').text('Loading..').prop('disabled', true);
                 },
                 success: function (response) {
                     if (response.code == 200) {
                         toastr["success"](response.message);
                         resetForm('get_quote');
                     } else {
                         toastr["error"](response.message);
                     }

                 },
                 error: function (err) {
                     toastr["error"](err);
                 },
                 complete: function () {
                     $('.get_quote').text('Submit Now').prop('disabled', false);
                 },
             });
             return false;




         }
     });

 });
 $(function () {
     toastr.options = {
         "closeButton": true,
         "debug": false,
         "newestOnTop": true,
         "progressBar": true,
         "positionClass": "toast-top-right",
         "preventDuplicates": true,
         "onclick": null,
         "showDuration": "300",
         "hideDuration": "1000",
         "timeOut": "5000",
         "extendedTimeOut": "1000",
         "showEasing": "swing",
         "hideEasing": "linear",
         "showMethod": "fadeIn",
         "hideMethod": "fadeOut"
     }
 });
 

 $(document).ready(function () {
     /*  ------------subscribe---------- */
     $("form[name='subscriber']").validate({
         // Specify validation rules
         errorElement: 'small',
         errorClass: 'error',
         highlight: function (element) {
             $(element).closest('.form-control').addClass('has-error');
         },
         unhighlight: function (element) {
             $(element).closest('.form-control').removeClass('has-error');
         },
         rules: {

             email: {
                 required: true,
                 email: true
             }
         },
         messages: {
             email: "Please enter a valid email address",

         },
         submitHandler: function (frm) {

             $.ajax({
                 type: $('form[name=subscriber]').attr('method'),
                 url: $('form[name=subscriber]').attr('action'),
                 dataType: 'json',
                 data: $('form[name=subscriber]').serialize(),

                 beforeSend: function () {
                     // setting a timeout
                     $('.subscribe_btn').html('<i class="ti-reload></i>').prop('disabled', true);
                 },
                 success: function (response) {
                     if (response.code == 200) {
                         toastr["success"](response.message);
                         $('input[name=email]').val('');
                     } else if (response.code == 201) {
                         toastr["warning"](response.message);
                         $('input[name=email]').val('');
                     } else {
                         toastr["error"](response.message);
                     }

                 },
                 error: function (err) {
                     toastr["error"](err);
                 },
                 complete: function () {
                     $('.subscribe_btn').html('<i class="ti-arrow-right"></i>').prop('disabled', false);
                 },
             });
             return false;
         }
     });
   


 });