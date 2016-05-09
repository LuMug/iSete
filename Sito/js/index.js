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
	var v_grp = $("#addU [name='grp']").val();
	$.post("utenti/aggiungiUtente.php", {email:v_email, password:v_pass, grp:v_grp, credito:v_credito}, function (res) {
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
function addCap() {
	var v_nome = $("#aggiungiCap [name='nome']").val();
	var v_pracq = $("#aggiungiCap [name='prezzoAcquisto']").val();
	var v_prven = $("#aggiungiCap [name='prezzoVendita']").val();
	var v_qntrmn = $("#aggiungiCap [name='quantitaRimanente']").val();
	$.post("capsule/addCapsula.php", {nome:v_nome, prezzoAcquisto:v_pracq, prezzoVendita:v_prven, quantitaRimanente: v_qntrmn}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}
function remCap() {
	var v_nome = $("#rimuoviCap [name='nome']").val();
	$.post("capsule/remCapsula.php", {nome:v_nome}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}
function updCap() {
	var v_nome = $("#modificaCap [name='nome']").val();
	var v_pracq = $("#modificaCap [name='prezzoAcquisto']").val();
	var v_prven = $("#modificaCap [name='prezzoVendita']").val();
	$.post("capsule/remCapsula.php", {nome:v_nome, prezzoAcquisto:v_pracq, prezzoVendita:v_prven}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}

function request() {
	var v_capsula = $("#request [name='capsula']").val();
	var v_qta = $("#request [name='qta']").val();
	$.post("index.php", {capsula:v_capsula, qta:v_qta}, function (res) {
		alert(res);
		location.reload();
		//location.href = location.href;
	});
}