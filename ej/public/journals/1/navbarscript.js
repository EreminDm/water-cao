<script type="text/javascript">
var navbar = new Array('subNavbar');
startList = function allclose() {
	for (i=0; i < id_menu.length; i++){
		document.getElementById(navbar[i]).style.display = "none";
	}
}
function openMenu(id){
	for (i=0; i < navbar.length; i++){
		if (id != navbar[i]){
			document.getElementById(navbar[i]).style.display = "none";
		}
	}
	if (document.getElementById(id).style.display == "block"){
		document.getElementById(id).style.display = "none";
	}else{
		document.getElementById(id).style.display = "block";
	}
}
window.onload=startList;
</script>
