<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="user_select.php">ユーザー一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>ログインID：<input type="text" name="lid"></label><br>
     <label>ログインPW：<input type="text" name="lpw"></label><br>
     <label>管理者：<input type="radio" name="kanri" value=0 checked="checked"><label>一般</label>
     <input type="radio" name="kanri" value=1 ><label>管理者</label></label><br>
     <label>継続 or 退会：<input type="radio" name="kei" value=0 checked="checked"><label>継続</label>
     <input type="radio" name="kei" value=1><label>退会</label></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
