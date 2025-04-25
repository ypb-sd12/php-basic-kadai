<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP基礎編</title>
    <meta http-equiv='refresh' content='10; URL='>
</head>

<body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>社員名</td>
                <td>
                    <input type="text" name="employee_name">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="employee_age">
                </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td>
                    <select name='department'>
                        <option value='開発部'>開発部</option>
                        <option value='営業部'>営業部</option>
                        <option value='人事部'>人事部</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit">
    </form>


    <p>
        <?php

        ?>
    </p>
</body>

</html>