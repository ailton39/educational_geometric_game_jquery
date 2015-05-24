<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script>
$(document).ready(function()
{

// inicio circulo
$("#pega").click(function()
{
 exa  =1;
 exc  =0;
 exd  =0;
 exe  =0;
 exf  =0;
 exg  =0;
 exh  =0;
 exi  =0;
 exj  =0;
  

if (exa == exb){
	alert('Parabéns você clickou em dois circulos!');
	$("#solta").fadeOut("slow");
	$("#pega").fadeOut("slow");
	
	}

});


$("#solta").click(function()
{
 exb  =1;
 exc  =0;
 exd  =0;
 exe  =0;
 exf  =0;
 exg  =0;
 exh  =0;
 exi  =0;
 exj  =0;
 

if(exb == exa){
	alert('Parabéns você clickou em dois circulos!');
	$("#solta").fadeOut("slow");
	$("#pega").fadeOut("slow");

	} 
});
//fim circulo
// inicio quadrado	
$("#cc").click(function()
{
 exa  =0;
 exb  =0;
 exc  =1;
 exe  =0;
 exf  =0;
 exg  =0;
 exh  =0;
 exi  =0;
 exj  =0;
  

if (exc == exd){
	$("#cc").fadeOut("slow");
	$("#dd").fadeOut("slow");
	} 

});


$("#dd").click(function()
{
 exa  =0;
 exb  =0;
 exd  =1;
 exe  =0;
 exf  =0;
 exg  =0;
 exh  =0;
 exi  =0;
 exj  =0;

if(exd == exc){
	$("#cc").fadeOut("slow");
	$("#dd").fadeOut("slow");
	} 
});
//fim quadrado
// inicio retangulo	
$("#gg").click(function()
{
 exa  =0;
 exb  =0;
 exc  =0;
 exd  =0;
 exe  =1;
 exg  =0;
 exh  =0;
 exi  =0;
 exj  =0;
  

if (exe == exf){
	$("#hh").fadeOut("slow");
	$("#gg").fadeOut("slow");
	} 

});


$("#hh").click(function()
{
 exa  =0;
 exb  =0;
 exc  =0;
 exd  =0;
 exf  =1;
 exg  =0;
 exh  =0;
 exi  =0;
 exj  =0;

if(exf == exe){
	$("#hh").fadeOut("slow");
	$("#gg").fadeOut("slow");
	} 
});
//fim retangulo
// inicio poligono	
$("#aa").click(function()
{
 exa  =0;
 exb  =0;
 exc  =0;
 exd  =0;
 exe  =0;
 exf  =0;
 exg  =1;
 exi  =0;
 exj  =0;
 

if (exg == exh){
	$("#aa").fadeOut("slow");
	$("#bb").fadeOut("slow");
	} 

});


$("#bb").click(function()
{
 exa  =0;
 exb  =0;
 exc  =0;
 exd  =0;
 exe  =0;
 exf  =0;
 exh  =1;
 exi  =0;
 exj  =0;

if(exh == exg){
	$("#aa").fadeOut("slow");
	$("#bb").fadeOut("slow");
	} 
});
//fim poligono
// inicio estrela	
$("#ee").click(function()
{
 exa  =0;
 exb  =0;
 exc  =0;
 exd  =0;
 exe  =0;
 exf  =0;
 exg  =0;
 exh  =0;
 exi  =1;
 

if (exi == exj){
	$("#ee").fadeOut("slow");
	$("#ff").fadeOut("slow");
	} 

});


$("#ff").click(function()
{
 exa  =0;
 exb  =0;
 exc  =0;
 exd  =0;
 exe  =0;
 exf  =0;
 exg  =0;
 exh  =0;
 exj  =1;

if(exj == exi){
	$("#ee").fadeOut("slow");
	$("#ff").fadeOut("slow");
	} 
});
//fim estrela
});


</script>

<style type="text/css">
a{ text-decoration:none; color:#000;}
#a{ width:800px; height:50px; border:#CCC 2px solid;}
#a p{ font-family:Verdana, Geneva, sans-serif; font-size:25px; margin:5px 0px 0px 15px; }
#all{ width:800px; height:800px; margin:0 auto;}
#um{ width:150px; height:150px; position:absolute; top:70px; left:400px;}
#dois{width:150px; height:150px; position:absolute; top:170px; left:670px;}
#tres{width:150px; height:150px; position:absolute; top:270px; left:400px;}
#quatro{width:150px; height:150px; position:absolute; top:80px; left:600px;}
#cinco{width:150px; height:150px; position:absolute; top:260px; left:820px;}
#seis{width:150px; height:150px; position:absolute; top:420px; left:820px;}
#sete{width:150px; height:150px; position:absolute; top:430px; left:650px;}
#oito{width:150px; height:150px; position:absolute; top:460px; left:400px;}
#nove{width:150px; height:150px; position:absolute; top:70px; left:800px;}
#dez{width:150px; height:150px; position:absolute; top:250px; left:530px;}
#re{ width:160px; height:30px; position:relative; top:500px; left:270px; font-family:Verdana, Geneva, sans-serif; font-size:22px;
border:#CCC 2px solid; color:#000;}

</style>
</head>
<body>
<div id="all">
<div id="a"><p>Click nas figuras geométricas iguas para obter os resultados!</p></div>
<div id="um"><a  id="pega" href="#" ><img src="/game/img/circulo.png"  /></a></div>
<div id="cinco"><a id="solta" href="#"><img src="/game/img2/circulo.png" /></a></div>

<div id="tres"><a id="cc" href="#"><img src="/game/img/quadrado.png" /></a></div>
<div id="sete"><a id="dd" href="#"><img src="/game/img/quadrado.png" /></a></div>

<div id="oito"><a id="gg" href="#"><img src="/game/img/retangulo.png" /></a></div>
<div id="quatro"><a id="hh" href="#"><img src="/game/img/retangulo.png" /></a></div>

<div id="dois"><a id="aa" href="#"><img src="/game/img/poligono.png" /></a></div>
<div id="seis"><a id="bb" href="#"><img src="/game/img/poligono.png" /></a></div>

<div id="nove"><a id="ee" href="#"><img src="/game/img/star.png" /></a></div>
<div id="dez"><a id="ff" href="#"><img src="/game/img/star.png" /></a></div>

<div id="re"><a href="index.php">Reniciar jogo!</a></div>
</div>
</body>
</html>