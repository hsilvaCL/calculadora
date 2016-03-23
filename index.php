<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <body>
       
        <form action="calculosarit.php" method="POST">
            Valor A<br>
            <input type="text" name="val_a" id="val_a">
            <br>
            <select name="operacion" id="operacion">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
                <option value="^">^</option>
              </select>
            <br>
            Valor B:<br>
            <input type="text" name="val_b" id ="val_b">
            <input type="button" value="Enviar" onclick="calculo();">
            <input type="text" name="resultado" id="resultado">
        </form>
        <script type="text/javascript">
            function calculo(){
                var oper = $("#operacion").val();
                var a = $("#val_a").val();
                if (a==""){
                    alert("Defina valor de A");
                    return false;
                }
                var b = $("#val_b").val();
                if (b==""){
                    alert("Defina valor de B");
                    return false;
                }
                /*Uso de función para caracter especial*/
                $.ajax({
                    url:'calculosarit_ajax.php',
                    type:'POST',
                    data:"val_a="+a+"&"+"val_b="+b+"&"+"operacion="+encodeURIComponent(oper),
                    success:function(html){
                       $("#resultado").val(html);
                    }
                });
                return true;
            }
            
        </script>
    </body>
    
</html>
