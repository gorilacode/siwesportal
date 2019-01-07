$(document).ready(function(){

    $("#send").click(function(e){
        $('#createUser').validate({
            rules: {
                password: {
                    required: true
                },
                username: {
                    required: true
                },
                
                
            },
            messages: {
                username : "Input Username",
                password : "Input Password",
                
                
            },
              submitHandler: submitForm
        });

        function submitForm(){
            var data = $("#createUser").serialize();
            $.ajax({
                type: 'POST',
                url: '../backbone/controller/loginStaff.php',
                data: data,
                beforeSend: function(){
                    $("#msg").fadeOut();
                    $("#send").html('</span> <img src="../assets/img/gif/ajax-loader.gif"></span>  Validating...');
                    $("#send").attr("disabled", true);
                },	
                success: function(response){
                    if (response == "course_adviser"){
                        // $("#msg").html(response);
                        $("#send").html('<span><img src="../assets/img/gif/ajax-loader.gif"></span> connecting...');
                        window.location.href = "course-adviser/index.php";

                    }else if (response == "supervisor"){
                        // $("#msg").html(response);
                        $("#send").html('<span><img src="../assets/img/gif/ajax-loader.gif"></span> connecting...');
                        window.location.href = "supervisor/index.php";

                    }else{
                        $("#msg").fadeIn(1000,function(){
                            $("#msg").html('<div style="font-size: 14px;" class="alert btn-danger" role="alert"> Invalid Username or Password </div>');
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
