<?php
//入力チェック(受信確認処理追加)
if(
  !isset($_POST['name']) || $_POST['name']=='' ||
  !isset($_POST['lid']) || $_POST['lid']=='' ||
  !isset($_POST['lpw']) || $_POST['lpw']==''
){
  exit('ParamError');
}

//1. POSTデータ取得
$name= $_POST['name'];
$id     = $_POST['id'];
$lid   = $_POST['lid'];
$lpw  = $_POST['lpw'];
$kanri = $_POST['kanri'];
$kei = $_POST['kei'];

//2. DB接続します(エラー処理追加)
include('functions.php');
$pdo = db_conn();


//3．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE '. $table .' SET name=:a1, lid=:a2, lpw=:a3, kanri_flg=:a4,life_flg=:a5 WHERE id=:id');
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $lid, PDO::PARAM_STR);
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':a4', $kanri, PDO::PARAM_STR);
$stmt->bindValue(':a5', $kei, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  header('Location: user_select.php');
  exit;
}
?>
