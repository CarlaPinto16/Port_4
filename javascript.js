var b = 1, maior = 0;

function altura_produtos(){
    // classe c4
    var i;

    var caixa = document.getElementsByClassName('limite');

    for(i=0; i<caixa.length; i++){
        if(caixa[i].clientHeight > maior) maior = caixa[i].clientHeight;
        console.log(caixa[i].clientHeight);
    }

    for(i=0; i<caixa.length; i++){ 
        caixa[i].style = 'height: '+ maior +'px;';
    }

    console.log('maior: '+ maior);

    maior = 0;
}

function janela(){
    var x, i, w4;
    var corpo = document.getElementById('corpo');   
    var c2 = document.getElementsByClassName('c2');
    var c4 = document.getElementsByClassName('c4');

    x = corpo.clientWidth;
    
    if(x<=750){ w2 = 100; w4 = 100; }
    else {
        if(x<=1000){ w2 = 100; w4 = 50; }
        else { w2 = 50; w4 = 25;  }
    }

    altura_produtos();
    
    for(i=0 ; i<c2.length ; i++){ c2.item(i).style = 'width: '+ w2 +'%;'; }
    for(i=0 ; i<c4.length ; i++){ c4.item(i).style = 'width: '+ w4 +'%;'; }
}

function banner(){
    var banner_imagem = document.getElementById('banner_imagem');
    
    b++;
    b > 5 ? b = 1 : b;

    banner_imagem.src = 'imagens/'+ b +'.jpg'; 
    setTimeout('banner()', 5000);
}

var inicio = 0, fim = 2;

function equipa(valor){
    var i, n;
    var c3 = document.getElementsByClassName('c3');
    
    n = c3.length;

    inicio = inicio + valor;
    fim = fim + valor;

    if( inicio < 0 ) inicio = 0;
    if( fim >= n) fim = n -1;

    for(i=0 ; i<n ; i++){

        if(i>=inicio & i<=fim) c3[i].style = 'display: block'; 
        else c3[i].style = 'display: none';
    }



    //console.log(valor);
    console.log(inicio +' '+ fim);
}

function verificar(){
    var cor;
    var password  = document.getElementById('password');
    var confirmar = document.getElementById('confirmar');

    if( password.value == confirmar.value && password.value.length >= 8 ){
        cor = 'white';
    }
    else {
        cor = 'rgb(193, 108, 108)';
    }

    password.style  = 'background-color: '+ cor;
    confirmar.style = 'background-color: '+ cor;
}
