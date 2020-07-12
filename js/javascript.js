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
    var id = id;
    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();
    document.getElementById('corpo-chat').style.display = 'flex';
    //gifzin brabo de progresso
    result.innerHTML = '<img src="images/Progresso.gif"/>';

    //Iniciando a requisição com o get no processamento do chat
    xmlreq.open("GET", "processaatendimento.php?id=" + id, true);


    xmlreq.onreadystatechange = function(){
    	if(xmlreq.readyState == 4){
    		result.innerHTML = xmlreq.responseText;
    	}else{
    		result.innerHTML = "Erro, pai: " + xmlreq.statusText;
    	}
    };
    xmlreq.send(null)
}
function adaptachat(){
	document.getElementById('corpo-chat').style.width = '100%';
}
