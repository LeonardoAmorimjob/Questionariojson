
function armazenaQeR(){
    var armazenaResp=new Array(2);
    proxPergunta=0;
    for( i=0;i<2;i++){
        armazenaResp[i]=new Array(10);
    }

    
      for(j=0;j<10;j++){
        armazenaResp[0][j]=document.getElementById('quest'+(j+1)).id;
        for(k=proxPergunta;k<(proxPergunta+5);k++){
            //console.log('alt'+(k+1));
            if (document.getElementById('alt'+(k+1)).checked===true){
                
                armazenaResp[1][j]=(k+1);
            }
            
          }
          proxPergunta+=5;
         
          
            
        }
        for(i=0;i<10;i++){
           if(!armazenaResp[1][i]){
            armazenaResp[1][i]="";
           }
        }
        
        return armazenaResp;      
       
}
function converCincoAlt(dados){
   this.dados=dados;
  
   
   for(i=0;i<10;i++){
       resp=this.dados[1][i];
       if(this.dados[1][i]==""){
        this.dados[1][i]=""
    
       }
       else{
           
        this.dados[1][i]= resp-(i*5);
        
       }       
     


   }
   
   return this.dados;
 
}
function convNumLetra(cincoAlt){
    this.cincoAlt=cincoAlt;
    for(i=0;i<10;i++){
        switch (this.cincoAlt[1][i]) {
            case 1:
                this.cincoAlt[1][i] = "a";
              break;
            case 2:
                this.cincoAlt[1][i] = "b";
              break;
            case 3:
                this.cincoAlt[1][i] = "c"
              break;
            case 4:
               this. cincoAlt[1][i] = "d";
              break;
            case 5:
                this.cincoAlt[1][i] = "e"              
            
          }
    }
    
    return this.cincoAlt;

}
   
    

    function principal(){
        idElemento=armazenaQeR();
        altUmcinco=converCincoAlt(idElemento);
        alternativaLetra=convNumLetra(altUmcinco);
        
        console.log(alternativaLetra);
        
        
        //console.log(convNumLetra(converCincoAlt(armazendaQeR())));
        //armazendaQeR();
    
    
        verificaerro=0;
        for(i=0;i<10;i++){
            if(alternativaLetra[1][i]==""){
                alert('a questão '+(i+1)+' esta em branco');
                verificaerro++;
            }
            
        }
        if(verificaerro>0)
        {
            alert(verificaerro+' questão(ões) em branco')
        }
        else{
            url="validacao.php?resp1="+alternativaLetra[1][0];
           
            for (i = 1; i<10; i++) {
                url=url+"&resp"+(i+1)+"="+(alternativaLetra[1][i]) ;              
            }
           
            location.href=url;
        }
    
    
}
function validaLogin(){
    login=document.getElementById('usuario').value;
    senha=document.getElementById('senha').value;
    if(login==""||senha==""){
        alert("Por favor preencher todos os campos.")
    }
}
