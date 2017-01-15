window.onload=function() {

document.getElementById('startbutton').addEventListener('click', function() {
	document.getElementById('main').style.display = "none";
	document.getElementById('inputArea').style.display = "block";
	document.getElementById('inputArea').style.animation = "fadeIn 1s";
});

}