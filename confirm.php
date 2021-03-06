<?php 
	// フォームのボタンが押されたら
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// フォームから送信されたデータを各変数に格納
		$name = $_POST["name"];
		$email = $_POST["email"];
		$content  = $_POST["content"];
	}

	// 送信ボタンが押されたら
	if (isset($_POST["submit"])) {
		// 送信ボタンが押された時に動作する処理をここに記述する
        	
        	mb_language("ja");
		mb_internal_encoding("UTF-8");

        	// 件名を変数subjectに格納
        	$subject = "［自動送信］お問い合わせありがとうございました。";
					$subject__toOwn = $name."様よりお問い合わせがあります。" ;
        	// メール本文を変数bodyに格納
		$body = <<< EOM
{$name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】 
{$name}

【 メール 】 
{$email}

【 内容 】 
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;


$body__toOwn = <<< EOM
{$name}　様から下記お問い合わせがありました。

===================================================
【 お名前 】 
{$name}

【 メール 】 
{$email}

【 内容 】 
{$content}
===================================================

EOM;
        
		// 送信元のメールアドレスを変数fromEmailに格納
		$fromEmail = "sarukiti0418@outlook.jp";
		// 送信元の名前を変数fromNameに格納
		$fromName = "【自動返信】お問い合わせを受け付けました。";
		// ヘッダ情報を変数headerに格納する		
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";
		// メール送信を行う
		mb_send_mail($email, $subject, $body, $header);
        // メール送信
    mb_send_mail($fromEmail, $subject__toOwn, $body__toOwn, $email);
 		// サンクスページに画面遷移させる
		header("Location: thanks.php");
		exit;
	}
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<title>JOTA KANEKO ポートフォリオ（お問い合わせ）</title>
<link href="css/reset.css" media="all" rel="stylesheet">
<link href="css/style.css" media="all" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.png" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="p-confirm">
  <div class="p-confirm__container">
    <div><h2>お問い合わせ内容<span>のご確認</span></h2></div>
    <p>お問い合わせ内容は下記の通りで宜しいでしょうか。<br>よろしければ「送信する」ボタンを押して下さい。</p>
    <div>
      <form action="confirm.php" method="post">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <input type="hidden" name="content" value="<?php echo htmlspecialchars($content); ?>">
        <table class="table">
        <tr>
          <th>お名前</th>
          <td><?php echo htmlspecialchars($name); ?></td>
        </tr>
        <tr>
          <th>email</th>
          <td><?php echo htmlspecialchars($email); ?></td>
        </tr>
        <tr>
          <th>内容</th>
          <td><?php echo nl2br(htmlspecialchars($content)); ?></td>
        </tr>
        </table>
        <div class="button">
          <input type="button" class="btn btn__back" value="修正する" onclick="history.back(-1)">
          <button type="submit" class="btn btn__submit" name="submit">送信する</button>
        </div>
        </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</body>
</html>