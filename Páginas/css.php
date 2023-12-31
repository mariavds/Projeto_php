:root {
  --main-color: #407bff;
  --link-color: #666666;
  --text1: #999999;
  --highligth-text: #333333;
  --input-text: #555555;
  --white-color: #FFFFFF;
  --point-list: #CCCCCC;
  --line-input: #D9D9D9;
  --cor-primaria: rgb(0, 144, 65);
  --cor-secundaria: rgba(28, 141, 71, 0.63);
}

/*
  Fontes
*/

@font-face {
  font-family: Poppins-Regular;
  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
}

@font-face {
  font-family: Poppins-Medium;
  src: url('../fonts/poppins/Poppins-Medium.ttf'); 
}

@font-face {
  font-family: Poppins-Bold;
  src: url('../fonts/poppins/Poppins-Bold.ttf'); 
}

@font-face {
  font-family: Poppins-SemiBold;
  src: url('../fonts/poppins/Poppins-SemiBold.ttf'); 
}

/*
  Zerar estilos
*/

* {
    margin: 0px; 
    padding: 0px; 
    box-sizing: border-box;
}

body, html {
    height: 100%;
    font-family: Poppins-Regular, sans-serif;
}

ul, li {
    margin: 0px;
    list-style-type: none;
}

input, button {
    outline: none !important;
    border: none;
}

button:hover {
    cursor: pointer;
}

/*
  Utilitários
*/

.text1 {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: var(--text1);
  line-height: 1.5;
}

.text2 {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: var(--main-color);
  line-height: 1.5;
}

.margin-bottom-35 {
  margin-bottom: 35px;
}

.margin-top-35 {
  margin-top: 35px;
}

.margin-bottom-8 {
  margin-bottom: 8px;
}

.margin-top-8 {
  margin-top: 8px;
}

.margin-left-50 {
  margin-left: 50px;
}

/*
  Login
*/

.container {
  width: 100%;
  margin: 0 auto;
}

.container-login {
  width: 100%;  
  min-height: 100vh;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background: var(--white-color);  
}

.wrap-login {
  width: 370px;
  margin-right: 50px;
  background: var(--white-color);
}

/*
  Formulário
*/

.login-form {
  width: 100%;
}

.login-form-title {
  display: block;
  font-family: Poppins-Bold;
  font-size: 39px;
  color: var(--highligth-text);
  line-height: 1.2;
  text-align: center;
}

/*
  Input
*/

.wrap-input {
  width: 100%;
  position: relative;
  border-bottom: 2px solid var(--line-input);
}

.input-form {
  font-family: Poppins-SemiBold;
  font-size: 18px;
  color: var(--input-text);
  line-height: 1.2;
  display: block;
  width: 100%;
  height: 52px;
  background: transparent;
  padding: 0 5px;
}

.focus-input-form {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input-form::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  transition: all 0.4s;
  background: var(--main-color);
}

.focus-input-form::after {
  font-family: Poppins-Medium;
  font-size: 18px;
  color: var(--text1);
  line-height: 1.2;
  content: attr(data-placeholder);
  display: block;
  width: 100%;
  position: absolute;
  top: 15px;
  left: 0px;
  padding-left: 5px;
  transition: all 0.4s;
}

.input-form:focus + .focus-input-form::after {
  top: -20px;
  font-size: 15px;
}

.input-form:focus + .focus-input-form::before {
  width: 100%;
}

.has-val.input-form + .focus-input-form::after {
  top: -20px;
  font-size: 15px;
}

.has-val.input-form + .focus-input-form::before {
  width: 100%;
}

/*
  Botão
*/

.container-login-form-btn {
  width: 100%;
  display: flex;
  justify-content: center;
  
}

.login-form-btn {
  font-family: Poppins-Medium;
  font-size: 16px;
  color: var(--white-color);
  line-height: 1.2;
  text-transform: uppercase;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  background-color: var(--cor-primaria);
  border-radius: 5px;
  transition: all 0.4s;
}

.login-form-btn:hover  {
  background-color: var(--cor-secundaria);
}

/*
  Links - Login utils
*/


a {
  
    font-family: Poppins-Regular;
    font-size: 14px;
    line-height: 1.7;
    color: var(--highligth-text);
    margin: 0px;
    transition: all 0.4s;
   
}

a:focus {

    outline: none !important;
}

a:hover {
  text-decoration: none;
  color: var(--highligth-text);
}

/*
  Login utils
*/

.login-utils {
  margin-top: 20px;
}

.login-utils li {
  position: relative;
  padding-left: 16px;
}

.login-utils li::before {
  content: "";
  display: block;
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background-color: var(--point-list);
  top: 45%;
  transform: translateY(-50%);
  left: 0;
}

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