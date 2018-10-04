<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST['name']) || $_POST['name']=='' ||
  !isset($_POST['URL']) || $_POST['URL']=='' ||
  !isset($_POST['coment']) || $_POST['coment']==''
){
  exit('ParamError');
}

//1. POSTデータ取得
$yuni     = $_POST['id'];
$title   = $_POST['name'];
$titleURL  = $_POST['URL'];
$coment = $_POST['coment'];

//2. DB接続します(エラー処理追加)
include('functions.php');
$pdo = db_conn();


//3．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE '. $table .' SET title=:a1, titleURL=:a2, bookcoment=:a3 WHERE yuni=:yuni');
$stmt->bindValue(':a1', $title, PDO::PARAM_STR);
$stmt->bindValue(':a2', $titleURL, PDO::PARAM_STR);
$stmt->bindValue(':a3', $coment, PDO::PARAM_STR);
$stmt->bindValue(':yuni', $yuni, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  header('Location: select.php');
  exit;
}
?>
