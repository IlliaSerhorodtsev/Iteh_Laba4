<?
session_start();

// создаем новую сессию или 
if (isset($_GET['ok'])) {
    $_SESSION['login'] = $_GET['login'];
    Header("Location: test.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    table {
        background: #d4a752;
    }

    body {
        background: #e7e6e2;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>

        <form>
            <table border='1'>
                <tr>
                    <th colspan='2'>

                        <h2>Введите имя</h2>

                    </th>
                </tr>
                <tr>
                    <td>ИМЯ:</td>
                    <td><input type=text name=login></td>
                </tr>
                <tr>

                    <th colspan='2'><input type=submit name=ok value=OK></th>

                </tr>
            </table>
        </form>
    </center>

</body>

</html>