@import url('https://fonts.googleapis.com/css2?family=Krona+One&family=Montserrat&display=swap'); 
/*importar fontes com a pagina em ingles*/
:root{
    --cor-primaria: rgb(0, 144, 65);
    --cor-secundaria: #ffffff;
    --cor-terciaria: #DA2628;
    --cor-quaternaria: rgb(0, 0, 0);
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Tahoma, sans-serif;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
   
}
section{
    position: relative;
    width: 100%;
    min-height: 100vh;
    padding: 100px;
    background: #ffffff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow: hidden;
}
/*.circulo{
    position:absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #008F49;
    clip-path: circle(50% at bottom right);
}*/
/*header{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 10px 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #008F49 ;
    
}*/

/*
header .logo{
    position: relative;
    max-width: 1000px;
}*/

/*header .navegacao ul{
    position: relative; um ao lado do outro
    display: flex; 
    padding: 20px;
}

header .navegacao ul li{
    /*tira os pontinhos de lista dos itens do menu
    list-style: none;
}
header .navegacao ul li a{
    /*modifica o menu da paágina inicial
    color: rgb(255, 255, 255);

    display: inline-block;
    text-decoration: none; /*retira a marcaçao de link
    font-weight: 500;
    font-size: 16px;
    margin-left: 100px;
}
*/

.container{
    /*textos da pagina de início*/
    position:relative;
    font-size: 25px;
    width: 100%;
    display: flex;
    color: varr(--cor-quaternaria) ;
    align-items: center;
    justify-content: space-between;
    padding: 4px;
}
.container .texto{
    position: relative;
    max-width: 600px;
    margin-right: 20px;
    font-size: 20px;
}
.container .texto h2{
    color: varr(--cor-primaria); /*cor do texto em h2*/
    font-size: 38px;/*tamanho do texto escrito dentro de h2>*/
    padding-top: 25px;
    /*margin-bottom: 10px;
    line-height:2.5em ;
    font-weight:700 ;*/
}

.container .texto p{
    color: varr(--cor-quaternaria);
    font-size: 36px;
    padding-top: 30px;
    width: 110%;
    

}
.container .texto a{
    display: inline-block;
    margin-top: 50px;
    padding: 10px 25x;
    background: varr(--cor-primaria);
    color: varr(--cor-secundaria);
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 1px;
    border-radius: 40px;
    transition: 0.3s ease-in-out;
}
/*footer{
    top: 0;
    left: 0;
    width: 100%;
    padding: 10px 10px;
    display: flex;
    align-items: stretch;
    justify-content: space-between;
    background-color: #c6ffe4 ;
    
}*/

/*.rodape{
    top: 0;
    left: 0;
    width: 100%;
    padding: 0px 0px;
    display:flex;
    align-items:stretch;
    justify-content: space-around;
}*/

.dp{
    text-decoration: none; 
    color:inherit;
    
    
}
.container .texto a:hover{
    transform: translateY(-10px);
    background-color: varr(--cor-primaria);
}
.container .produtos-link{
    border: 2px solid varr(--cor-primaria);
    border-radius: 16px;
    color: #1b2e19;
    display: inline; 
    padding: 18px; /*distancia entre a borda e o texto*/

}
.icons {
    position: absolute;
    bottom: 40px;
    left: 90px;
    display: flex;
    align-items: center;
    padding: 1px;
    justify-content: center;
    
}
.icons li{
    list-style: none;
}
.icons li a{
    display: inline block;
    width: 55px;
    height: 60px;
    border-radius: 50%; /*arredonda as pontas das bordas*/
    margin-left: 35px;
    align-items: center;
    display: flex;
    transition: 0.5s ease-in-out ;
    
}
.icons li a:hover{
    transform: translateY(-10px);
}

.icons li a img{
    transform: scale(0.76); /*muda o tamanho dos icones*/
}

.container1{
    text-align: center;
}
.titulo{
    color: varr(--cor-primaria)
}
.missao{
    color: varr(--cor-terciaria);
}
.visao{
    color: varr(--cor-terciaria);
}
.valores{
    color: varr(--cor-terciaria);
}
.contato{
    color:varr(--cor-primaria);
}
.icons2{
    list-style:none;
    display: flex;
    flex-direction: column;
    align-items:flex-start;
    color:varr(--cor-primaria);
    
}

.departamentos{
    color:varr(--cor-primaria);
}
