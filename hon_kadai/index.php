<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お気に入り本登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}
  #ta{
    vertical-align:top;
    /* align-items: flex-start; */
    display:block;
	/* margin-bottom:40px; */
	align-items: flex-start;
  }

    </style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>本ブックマーク</legend>
    <table>
      <tr>
     <td><label>書籍名：</td><td><input type="text" name="name"></td></tr>
     <tr>
     <td><label>書籍URL：</td><td><input type="text" name="URL"></td></tr>
     <tr>
     <td><label  id="ta">書籍コメント：</td><td><textArea name="coment" rows="4" cols="40"></textArea></td></tr>
</table>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
