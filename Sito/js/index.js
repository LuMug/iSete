function addConf() {
	var v_nome = $("#addC [name='nome']").val();
	var v_valore = $("#addC [name='valore']").val();
	var v_desc = $("#addC [name='descrizione']").val();
	$.post("configurazione/addConf.php", {nome:v_nome, valore:v_valore, descrizione:v_desc}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}
function remConf() {
	var v_nome = $("#remC [name='nome']").val();
	$.post("configurazione/remConf.php", {nome:v_nome}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}
function updConf() {
	var v_nome = $("#updC [name='nome']").val();
	var v_valore = $("#updC [name='valore']").val();
	var v_desc = $("#updC [name='descrizione']").val();
	$.post("configurazione/updConf.php", {nome:v_nome, valore:v_valore, descrizione:v_desc}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}
function addUser() {
	var v_email = $("#addU [name='email']").val();
	var v_pass = $("#addU [name='password']").val();
	var v_credito = $("#addU [name='credito']").val();
	var v_pass2 = $("#addU [name='ripeti']").val();
	$.post("utenti/aggiungiUtente.php", {email:v_email, password:v_pass, ripeti:v_pass2, credito:v_credito}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}
function remUser() {
	var v_email = $("#remU [name='email']").val();
	$.post("utenti/togliUtente.php", {email:v_email}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}
function updUser() {
	var v_email = $("#updU [name='email']").val();
	var v_credito = $("#updU [name='credito']").val();
	$.post("utenti/massimocredito.php", {email:v_email, credito:v_credito}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}