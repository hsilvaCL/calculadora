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
       
        <form action="calculosarit.php"  onsubmit="return calculo()" method="POST">
            Valor A<br>
            <input type="text" name="val_a" id="val_a">
            <br>
            <select name="operacion">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>
                <option value="^">^</option>
              </select>
            <br>
            Valor B:<br>
            <input type="text" name="val_b" id ="val_b">
            <input type="submit" value="Enviar">
        </form>
        <script type="text/javascript">
            function calculo(){
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
                return true;
            }
            
        </script>
    </body>
    
</html>
