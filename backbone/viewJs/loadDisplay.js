$(document).ready(function(){

    displayName();
    displayStudent();
    displaySupervisor();
    displayReport()

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

            $.ajax({
                url: '../../backbone/controller/displayStudent.php',
                data: 'getStudents',
                success:function(html){
                $("#displayStudent").html(html);
            }
        });
    }

    function displaySupervisor() {
            var name = $("#key").val();

            $.ajax({
                type: 'GET',
                url: '../../backbone/controller/displaySupervisor.php',
                data: {name : name },
                success:function(html){
                $("#displaySupervisor").html(html);
            }
        });
    }

    function displayReport() {

            $.ajax({
                url: '../../backbone/controller/displayReport.php',
                data: 'getReport',
                success:function(html){
                $("#displayReport").html(html);
            }
        });
    }



});