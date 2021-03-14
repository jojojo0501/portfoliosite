var validate = function() {

	var flag = true;

	removeElementsByClass("error");
	removeClass("error-form");

	// お名前の入力をチェック
	if(document.form.name.value == ""){
		errorElement(document.form.name, "お名前を入力してください。");
		flag = false;
	}

	// メールアドレスの入力をチェック
	if(document.form.email.value == ""){
		errorElement(document.form.email, "メールアドレスを入力してください。");
		flag = false;
	} else {
		// メールアドレスの形式をチェック
		if(!validateMail(document.form.email.value)){
			errorElement(document.form.email, "メールアドレスの形式が正しくありません。");
			flag = false;
		}
	}

	// お問い合わせ内容の入力をチェック
	if(document.form.content.value == ""){
		errorElement(document.form.content, "お問い合わせ内容を入力してください。");
		flag = false;
	}

	return flag;
}

	//エラーを表示する要素を作成、挿入する
var errorElement = function(form, msg) {
	form.className = "error-form";
	var newElement = document.createElement("div");
	newElement.className = "error";
	var newText = document.createTextNode(msg);
	newElement.appendChild(newText);
	// formの後にnewElementを挿入する
	form.parentNode.insertBefore(newElement, form.nextSibling);
}

	//エラーを表示する要素を削除する
var removeElementsByClass = function(className){
	var elements = document.getElementsByClassName(className);
	while (elements.length > 0){ 
		elements[0].parentNode.removeChild(elements[0]);
	}
}
	//フォームからerror-formクラスを削除をする
var removeClass = function(className){
	var elements = document.getElementsByClassName(className);
	while (elements.length > 0) {
		elements[0].className = "";
	}
}

	//正規表現によるemailの形式チェック
var validateMail = function (val){
	if (val.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)==null) {
		return false;
	} else {
		return true;
	}
}
