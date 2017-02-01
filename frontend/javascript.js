function ajax_add(title) {
	if(title != ''){
		var client = new XMLHttpRequest();
		client.open('get', '../backend/add.php?title='+title+'', true); // asynchronicznie
		client.send();
		location.reload();
	}
	else alert('Nie podałeś treści zadania!');
}
	
	
function ajax_del(id) {
    var client = new XMLHttpRequest();
	client.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("id").innerHTML =
			this.responseText;
		}
	};
    client.open('get', '../backend/del.php?id='+id+'', true); // asynchronicznie
    client.send();
	location.reload();
}
	
	
function ajax_check(id,already) {
    var client = new XMLHttpRequest();
    client.open('get', '../backend/check.php?id='+id+'&already='+already+'', true);// asynchronicznie
    client.send();
	location.reload();       
}
	
	
function made_all() {
	var client = new XMLHttpRequest();
	client.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('made_this').innerHTML = this.responseText;
		}
	};
	client.open('get', '../backend/todo.php', true); // asynchronicznie
	client.send();
}