<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ゲームIDとパスワード管理</title>
    <link rel="stylesheet" href="css/game.css">
    <script src="javascript/game.js"></script>
</head>
<body style="margin: 0px;">
    <div id="container">
        <h1>ゲームIDとパスワード管理</h1>
        <form id="game-form">
            <label for="game-id">ゲームID:</label>
            <input type="text" id="game-id" name="game-id" required>

            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required>

            <button type="button" onclick="addEntry()">保存</button>
        </form>
        <h2>登録情報</h2>
        <div id="entry-list">
            <!-- ここに情報が追加されます -->
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
