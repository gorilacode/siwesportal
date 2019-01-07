$(document).ready(function(){

    displayLogs();
    displaySeen();
    displayUnseen()

   function displayLogs() {
            var name = $("#matricNo").val();

            $.ajax({
                type: 'GET',
                url: '../backbone/controller/displayLogs.php',
                data: {name : name },
                success:function(html){
                $("#displayLogs").html(html);
            }
        });
    }

    function displaySeen() {
            var name = $("#matricNo").val();

            $.ajax({
                type: 'GET',
                url: '../backbone/controller/displaySeen.php',
                data: {name : name },
                success:function(html){
                $("#displaySeen").html(html);
            }
        });
    }

    function displayUnseen() {
            var name = $("#matricNo").val();

            $.ajax({
                type: 'GET',
                url: '../backbone/controller/displayUnseen.php',
                data: {name : name },
                success:function(html){
                $("#displayUnseen").html(html);
            }
        });
    }

});
