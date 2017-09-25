<html> 
<head> 
    <title>Formulario prefijos</title> 
<script> 
var miPopup 
function abreVentana(){ 
    miPopup = window.open("login.php","miwin","width=300,height=150,scrollbars=yes") 
    miPopup.focus() 
} 
</script> 
</head> 
<body> 

<form name=formul> 

<tr> 
    <td align="center"> 
        <input type=image src="imagenes/clima.jpg" width="125" height="115" onclick="abreVentana()"> 
    </td> 
</tr> 
</table> 
</form> 

<!--form action="http://www.mi-dominio.com" method="post">

<input type=image src="imagenes/clima.jpg" width="125" height="115">



</form-->

</body> 
</html>