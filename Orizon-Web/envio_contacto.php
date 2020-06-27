<?

$asunto = "Quiero ser vendedor -  contacto desde la web Orizon";
	
	$msg = "<b>Nombre y Apellido: </b>".$_POST['nombre']."<br><b>Teléfono: </b>".$_POST['telefono']."<br><b>Email: </b>".$_POST['email']."<br><b>País: </b>".$_POST['pais']."<br><b>Provincia: </b>".$_POST['provincia']."<br><b>Localidad: </b>".$_POST['localidad']."<br><b>Asunto: </b>".$_POST['razon']."<br><b>Comentarios: </b>".$_POST['mensaje'];
	
$headers.="X-Mailer: PHP5\n";	
$cabeceras.= "MIME-Version: 1.0\r\n";
$cabeceras .="Content-type: text/html; charset=iso-8859-1\r\n";
$cabeceras.= 'To: elzeke55@gmail.com' . "\r\n";
//$cabeceras .= 'To: pachajsc@gmail.com' . "\r\n";

$cabeceras .= 'From: Orizon' . "\r\n";

$to = "elzeke55@gmail.com"; //, s.gutierrez@mas54.com  j.torres@mas54.com


if(mail($to,$asunto,$msg,$cabeceras)){
	$_POST['nombre']='';
    $_POST['telefono']='';
	$_POST['email']='';
	$_POST['razon']='';
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