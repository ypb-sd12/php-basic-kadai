<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP基礎編</title>
    <!-- <meta http-equiv='refresh' content='4; URL='> 画面自動更新 -->
</head>

<body>
    <h2>登録が完了しました。</h2>
    <!-- <h2>お問い合わせを承りました。</h2> -->
    <p>社員情報がデータベースに保存されました。</p>
    <button id="back-btn" onclick="location.href='form.php';">戻る</button>

    <?php
    session_start();

    // セッション変数を初期化
    $_SESSION = array();

    // セッションを終了
    session_destroy();
    ?>
</body>

</html>