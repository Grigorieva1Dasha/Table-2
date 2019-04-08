<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8">
    <title>Таблица умножения</title>
    <style type="text/css"></style>
</head>
<body>
    <form>
        <label>COLS: </label><input type="text" name="cols">
        <p><label>ROWS: </label><input type="text" name="rows"></p>
        <p><input type='submit' value='Send'></p>
    </form>
    <table bordercolor=DarkRed border="2">
        <tr>
            <th bgcolor=DarkRed></th>
            <?php
            if (isset($_GET['rows'])&isset($_GET['cols']))
            {
                if (is_numeric($_GET['rows'])&is_numeric($_GET['cols']))
                {
                    $rows = (int)$_GET['rows'];
                    $cols = (int)$_GET['cols'];
                }
            }
            else
            {
                $rows = 10;
                $cols = 10;
            }
            include "mulipcation table.php";
            create($cols,$rows);
            ?>
        </table>
    </body>
</html>
