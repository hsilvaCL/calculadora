<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <form action="calculosarit.php" method="POST">
            Valor A<br>
            <input type="text" name="val_a">
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
            <input type="text" name="val_b">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
