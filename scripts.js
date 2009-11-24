
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

// Ajusta altura quando seleciona uma guia
function calcularAltura()
{
    //alert('Teste 2');
    //find the height of the internal page
    // var altura=document.getElementById('frameguia').contentWindow.document.body.scrollHeight;
    alert(document.getElementById('frameguia').contentDocument.document.body.scrollHeight);

    //change the height of the iframe
    // document.getElementById('frameguia').height=altura;
}

function janelaPopup(urlLink, name, x, y)
{
  var myWindow = open(urlLink, 'Nome5', 'scrollbars=1,menubar=0,location=0,resizable=1,toolbar=0,status=0, top="0", left="0", width=' + x + ',height=' + y) ;
  myWindow.focus();
 }
