<?
// CORREO
$to='ventas@orizon.com.ar';
$subject='Contacto desde la web Orizon';
$message = 
"\nDe: <b>".$_POST['nombre']."</b><br>\n".
"\nEmpresa: <b>".$_POST['empresa']."</b><br>\n".
"\nTeléfono: <b>".$_POST['telefono']."</b><br>\n".
"\nE-mail: <b>".$_POST['email']."</b><br>\n".
"\nLocalidad: <b>".$_POST['localidad']."</b><br>\n".
"\nProvincia: <b>".$_POST['provincia']."</b><br>\n".
"\nPaís: <b>".$_POST['pais']."</b><br>\n".
"\nMensaje: <b>".$_POST['mensaje']."</b><br>\n";
$headers="From: ".$_POST['email']."\r\n";
$headers.="X-Mailer: PHP5\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=utf-8\r\n";
if(mail($to,$subject,$message,$headers)){
	$_POST['nombre']='';
	$_POST['empresa']='';
    $_POST['telefono']='';
	$_POST['email']='';
	$_POST['localidad']='';
	$_POST['provincia']='';
	$_POST['pais']='';
	$_POST['mensaje']='';
	
echo "<script>
alert('Su mensaje ha sido enviado');
window.location= 'index.html'
</script>";
			 
}else{
	header('Location: index.html');
}
?>