<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/login.css">
<html>
    <head>
      <title>time list loginページ/title>
      </head>
      <body>
        <div class="container">
          <h2>ログイン</h2>
          <form action="/login" method="POST">
            <label for="username">ユーザー名またはメールアドレス:</label>
            <input type="text" id="username" name="username">
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="ログイン">
            <button class="register-button">新規登録</button>
          </form>
        </div>
      </body>
      </html>