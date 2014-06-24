<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tandem Consultores Legales</title>
<style type="text/css">
body {
	background-color: #465e7f;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(img/bg.png);
	background-repeat: no-repeat;
	background-position:bottom center;
	background-attachment:fixed;
}
</style>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script>
function valida()
{
	var mensaje="";
	var nom=document.getElementById('nom').value;
	if(nom == "")
	{mensaje+="\n- Nombre";}
	
	var cor=document.getElementById('correo').value;
	if(cor == "")
	{mensaje+="\n- Correo electrónico";}
	
	var men=document.getElementById('mensaje').value;
	if(men == "")
	{mensaje+="\n- Mensaje";}
	
	if(mensaje!="")
	{alert("La siguiente información es necesaria, ¡verifique por favor!"+mensaje);
	return(false);}
	
	document.form1.submit();
}
</script>
</head>

<body>
<table width="920" border="0" align="center" cellpadding="0" cellspacing="10">
  <tr>
    <td align="center"><table width="878" border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td width="505" align="right"><img src="img/logotipo2.png" width="150" height="90" border="0" /></td>
        <td width="343" align="right" valign="top"><table width="65" border="0" cellspacing="5" cellpadding="0">
          <tr>
            <td width="16"><a href="index.php"><img src="img/home.png" width="14" height="13" border="0" title="Inicio" /></a></td>
            <td width="16" align="center">&nbsp;</td>
            <td width="16"><a href="http://www.tandemlegal.mx/webmail" target="_blank"><img src="img/mail.png" width="18" height="12" border="0" title="Webmail" /></a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="880" height="468" valign="top" style="background-image:url(img/bg_contacto.png); background-repeat:no-repeat;"><table width="860" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td width="101" rowspan="3">&nbsp;</td>
        <td height="100" colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td valign="top"><span class="texto" align="justify"><strong>TANDEM CONSULTORES LEGALES, SC</strong><br />
          San Vicente 203,<br />
          Fracc. San  Cayetano,<br />
          C.P. 20010,<br />
          Aguascalientes,  Ags., M&Eacute;XICO.<br />
          Tel: +52 (449)  9149780<br />
          contacto@tandemlegal.mx</span></td>
        <td width="305" rowspan="2" valign="top"><form id="form1" name="form1" method="post" action="enviomail.php">          <table width="280" border="0" align="center" cellpadding="0" cellspacing="5">
            <tr>
              <td width="73" align="right" class="texto"><strong>*Nombre</strong></td>
              <td width="222"><input name="nom" type="text" class="cuadros" id="nom" /></td>
              </tr>
            <tr>
              <td align="right" class="texto"><strong>Tel&eacute;fono</strong></td>
              <td><input name="tel" type="text" class="cuadros" id="tel" /></td>
              </tr>
            <tr>
              <td align="right" class="texto"><strong>Ciudad</strong></td>
              <td><input name="ciu" type="text" class="cuadros" id="ciu" /></td>
              </tr>
            <tr>
              <td align="right" class="texto"><strong>*Correo</strong></td>
              <td><input name="correo" type="text" class="cuadros" id="correo" /></td>
              </tr>
            <tr>
              <td align="right" valign="top" class="texto"><strong>*Mensaje</strong></td>
              <td><textarea name="mensaje" rows="8" class="cuadros" id="mensaje"></textarea></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="button" name="button" id="button" value="enviar &gt;&gt;" onclick="valida()" /></td>
              </tr>
            </table>
        </form></td>
        </tr>
      <tr>
        <td width="406" valign="top">
        <iframe width="400" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.mx/maps/ms?ie=UTF8&amp;hl=es&amp;msa=0&amp;msid=210119543837110325976.0004a3050411c485cc13e&amp;ll=21.901004,-102.31164&amp;spn=0.007167,0.017123&amp;z=15&amp;output=embed"></iframe><br /><a href="http://maps.google.com.mx/maps/ms?ie=UTF8&amp;hl=es&amp;msa=0&amp;msid=210119543837110325976.0004a3050411c485cc13e&amp;ll=21.901004,-102.31164&amp;spn=0.007964,0.017166&amp;z=15&amp;source=embed" class="ligaubicacion" target="_blank" >Ampliar mapa</small></a>
        
       </td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
</table>

<div id="bottom">
  <br />
  <table width="790" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><a href="index.php" class="ligabottom">INICIO</a> | <a href="nosotros.php" class="ligabottom">NOSOTROS</a> | <a href="servicios.php" class="ligabottom">SERVICIOS</a> | <a href="publicaciones/" class="ligabottom">PUBLICACIONES</a> | <a href="contacto.php" class="ligabottom">CONTACTO</a></td>
      <td align="right">TANDEM CONSULTORES LEGALES    &copy; 2011   DERECHOS RESERVADOS </td>
    </tr>
  </table>
</div>
</body>
</html>