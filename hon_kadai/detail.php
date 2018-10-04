<?php
// getで送信されたidを取得
$yuni = $_GET['yuni'];
// echo "GET:".$id;


//1.  DB接続します
include('functions.php');
$pdo = db_conn();

//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM '. $table .' WHERE yuni=:yuni');
$stmt->bindValue(':yuni',$yuni, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false){
  // エラーのとき
  errorMsg($stmt);
}else{
  // エラーでないとき
  $rs = $stmt->fetch();
  // fetch()で1レコードを取得して$rsに入れる
  // $rsは配列で返ってくる．$rs["id"], $rs["name"]などで値をとれる
  // var_dump()で見てみよう
}
?>

<!-- htmlは「index.php」とほぼ同じです -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新ページ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新ページ</legend>

    <table>
      <tr>
     <td><label>書籍名：</td><td><input type="text" name="name" value="<?=$rs['title']?>"></td></tr>
     <tr>
     <td><label>書籍URL：</td><td><input type="text" name="URL" value="<?=$rs['titleURL']?>"></td></tr>
     <tr>
     <td><label  id="ta">書籍コメント：</td><td><textArea name="coment" rows="4" cols="40" value="<?=$rs['bookcoment']?>"></textArea></td></tr>
</table>
     <input type="submit" value="送信">
     <input type="hidden" name="id" value="<?=$rs['yuni']?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
