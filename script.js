let dic = document.getElementById ("banco")
function traduzir(){
        //1 receber palavras do input 
        let palavra = document.getElementById("produto").value
        
        //2 buscar
    //fiz uma arow function que vai comparar
    //os campos pt:"" com a variável palavra
    //e retornar um valor em en:
     
        let registro = banco.find (p => p.pt.toUpperCase()===palavra.toUpperCase().trim())        //2.1
      if(registro==undefined){
        document.getElementById("saida").innerText = "not found"
      }else{
      let traducao = registro.en
      
        //3 exibir
         document.getElementById("saida").innerText = traducao
      }
      }