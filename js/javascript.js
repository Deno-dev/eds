 function CriaRequest() {
     try{
         request = new XMLHttpRequest();        
     }catch (IEAtual){
          
         try{
             request = new ActiveXObject("Msxml2.XMLHTTP");       
         }catch(IEAntigo){
          
             try{
                 request = new ActiveXObject("Microsoft.XMLHTTP");          
             }catch(falha){
                 request = false;
             }
         }
     }
      
     if (!request) 
         alert("Seu Navegador não suporta Ajax!");
     else
         return request;
 }
function abrirconversa(id) {
	//Declarando váriaveis
	document.getElementById('corpo-chat').style.width = '75%';
    document.getElementById('input').style.width = '60%';
    var id = id;
    var result = document.getElementById("Resultado");
    var result2 = document.getElementById("direita");
    var xmlreq = CriaRequest();
    var xmlreq2 = CriaRequest();
    document.getElementById('corpo-chat').style.display = 'flex';
    //gifzin brabo de progresso
    result.innerHTML = '<center><img src="images/Progresso.gif"/></center>';

    //Iniciando a requisição com o get no processamento do chat
    xmlreq.open("GET", "processaatendimento.php?id=" + id, true);
    xmlreq2.open("GET", "processausuario.php?id=" + id, true);

    xmlreq.onreadystatechange = function(){
    	if(xmlreq.readyState == 4){
    		result.innerHTML = xmlreq.responseText;
    	}else{
    		result.innerHTML = "Erro, pai: " + xmlreq.statusText;
    	}
    };
    xmlreq2.onreadystatechange = function(){
        if(xmlreq2.readyState == 4){
            result2.innerHTML = xmlreq2.responseText;
        }else{
            result2.innerHTML = "Erro, pai: " + xmlreq2.statusText;
        }
    };
    xmlreq2.send(null)
    xmlreq.send(null)
}
function adaptachat(){
	document.getElementById('corpo-chat').style.width = '100%';
    document.getElementById('input').style.width = '70%';
}
