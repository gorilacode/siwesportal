$(document).ready(function(){

    displayName();
    displayReport();
    displayStudent();

    function displayName() {
            var name = $("#getId").val();

            $.ajax({
                type: 'GET',
                url: '../../backbone/controller/displayName.php',
                data: {name : name },
                success:function(html){
                $("#display").html(html);
            }
        });
    }

    function displayStudent() {
            var name = $("#key").val();

            $.ajax({
                type: 'GET',
                url: '../../backbone/controller/displayStudent2.php',
                data: {name : name },
                success:function(html){
                $("#displayStudent2").html(html);
            }
        });
    }

    function displayReport() {
            var name = $("#key").val();

            $.ajax({
                url: '../../backbone/controller/displayReport2.php',
                data: {name : name },
                success:function(html){
                $("#displayReport2").html(html);
            }
        });
    }


});