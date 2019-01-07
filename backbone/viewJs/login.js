$(document).ready(function(){

    $("#send").click(function(e){
        $('#createUser').validate({
            rules: {
                password: {
                    required: true
                },
                matricNo: {
                    required: true
                },
                
                
            },
            messages: {
                matricNo : "Input Matric Number",
                password : "Input Password",
                
                
            },
              submitHandler: submitForm
        });

               function submitForm(){
            var data = $("#createUser").serialize();
            $.ajax({
                type: 'POST',
                url: 'backbone/controller/loginUser.php',
                data: data,
                beforeSend: function(){
                    $("#msg").fadeOut();
                    $("#send").html('</span> <img src="assets/img/gif/ajax-loader.gif"></span>  Validating...');
                    $("#send").attr("disabled", true);
                },	
                success: function(response){
                    if (response == "login"){
                        // $("#msg").html(response);
                        $("#send").html('<span><img src="assets/img/gif/ajax-loader.gif"></span> connecting...');
                        window.location.href = "student/index.php";

                    }else{
                        $("#msg").fadeIn(1000,function(){
                            $("#msg").html('<div style="font-size: 14px;" class="alert btn-danger" role="alert"> Invalid Matric No or Password </div>');
                            $("#send").html('Login');
                            $("#send").attr("disabled", false);
                            // $("#createUser")[0].reset();
                        });
                    }

                }
            });// ends create ajax 
        }

    });

});
