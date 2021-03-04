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
        	$subject = "［自動送信］お問い合わせ内容の確認";
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
		$fromName = "お問い合わせテスト";
		// ヘッダ情報を変数headerに格納する		
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";
		// メール送信を行う
		mb_send_mail($email, $subject, $body, $header);
        // メール送信
    mb_send_mail($fromEmail, $subject__toOwn, $body__toOwn, $email);
 		// サンクスページに画面遷移させる
		header("Location: http://jota-portfolio.sakura.ne.jp/contact/thanks.php");
		exit;
	}
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2></div>
<div>
	<form action="confirm.php" method="post">
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <input type="hidden" name="content" value="<?php echo htmlspecialchars($content); ?>">
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>お名前</label>
                    <p><?php echo htmlspecialchars($name); ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo htmlspecialchars($email); ?></p>
                </div>
                <div>
                    <label>お問い合わせ内容</label>
                    <p><?php echo nl2br(htmlspecialchars($content)); ?></p>
                </div>
            </div>
		<input type="button" value="内容を修正する" onclick="history.back(-1)">
		<button type="submit" name="submit">送信する</button>
	</form>
</div>
</body>
</html>