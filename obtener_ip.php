<?php
function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
       
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
   
    return $_SERVER['REMOTE_ADDR'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        function enviar(){
            var ip = $('#ip').val();
            var fecha = $('#fecha').val();
            if(ip != ''){
                $.ajax({
                    url: 'correo.php',
                    type: 'POST',
                    data: "ip="+ip+"&fecha="+fecha,
                })
                .done(function(data) {
                    console.log(data);
                    window.close();
                })
                .fail(function(data) {
                    console.log(data);
                })
                .always(function() {
                    console.log("complete");
                });
            }
        }
   </script>
</head>
<body onload="enviar();">
    <input type="hidden" value="<?php echo getRealIP(); ?>" id="ip">
    <input type="hidden" value="<?php echo date('Y-m-d H:i:s'); ?>" id="fecha">
</body>
</html>