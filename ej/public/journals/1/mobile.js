<script>
function openMenu() {
    var navButton = document.getElementsByClassName("fa fa-bars")[0];
	navButton.onclick = function () {
		var navBar = document.getElementById("navbar");
		navBar.classList.toggle ("menu");
	}
}
</script>
