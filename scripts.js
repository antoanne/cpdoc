
function mostra(id) {
    if (document.getElementById(id).style.visibility =='visible')
	{
	    document.getElementById(id).style.display = "none";
	    document.getElementById(id).style.visibility = "hidden";
	    return;
	}
    document.getElementById(id).style.display = "block";
    document.getElementById(id).style.visibility = "visible";
}
