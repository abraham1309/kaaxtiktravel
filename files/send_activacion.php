 
<?PHP
//include("config.sys.php"); 

//include("class.phpmailer.php");
//include("class.smtp.php");
$codigo=$_POST['codigo'];
 $name=htmlentities($_POST['name'], ENT_QUOTES, "UTF-8"); 
 $email=$_POST['email']; 
 $tel=$_POST['tel']; 
 $country=$_POST['country'];  
$hotel=$_POST['hotel']; 
$policy=$_POST['policy']; 

function GetUserIP() {

    if(isset($_SERVER)){
      if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
        return $_SERVER["HTTP_X_FORWARDED_FOR"];


      if (isset($_SERVER["HTTP_CLIENT_IP"]))
        return $_SERVER["HTTP_CLIENT_IP"];

      return $_SERVER["REMOTE_ADDR"];
    }

    if (getenv('HTTP_X_FORWARDED_FOR'))
      return getenv('HTTP_X_FORWARDED_FOR');

    if (getenv('HTTP_CLIENT_IP'))
      return getenv('HTTP_CLIENT_IP');

    return getenv('REMOTE_ADDR');
  }

  $ipreal=GetUserIP();


  $contenido='<body><div style="border:#33F 2px solid; width:850px"><p>&nbsp;</p>
  <table width="600" border="0" align="center">
    <tr><th height="37" colspan="2" scope="col"><strong>DATOS ACTIVACION ('.date("d-m-Y").')</strong></th></tr>
    <tr><td width="96" height="30"><strong>CODIGO</strong>:</td><td width="494">'.$codigo.'</td> </tr>
    <tr><td width="96" height="30"><strong>NOMBRE</strong>:</td><td width="494">'.$name.'</td> </tr>
    <tr><td height="30"><strong>EMAIL</strong>:</td> <td>'.$email.'</td> </tr>
    <tr><td height="30"><strong>TEL</strong>:</td> <td>'.$tel.'</td> </tr> 
    <tr> <td height="31"><strong>PAIS</strong>:</td> <td>'.$country.'</td> </tr>
    <tr> <td height="31"><strong>HOTEL</strong>:</td> <td>'.$hotel.'</td> 
    </tr> <tr><td colspan="2" align="center"><p>&nbsp;</p><p>Enviado en sitio web kaaxtiktravel.com</p></td></tr>
    <tr><td height="10" bgcolor="#FF6600" colspan="2"> </td></tr>
  </table> <p>IP Conexion: '.$ipreal.'</p></div> <body>';
  
  $titulo = "Datos Activacion";
   //para el envío en formato HTML 
  $headers = "MIME-Version: 1.0\r\n"; 
  $headers .= "Content-type: text/html; charset=utf-8\r\n"; 

  //dirección del remitente 
  $headers .= "From: Contacto - Activacion <info@kaaxtiktravel.com>\r\n";     //copia 
  $headers .= "Bcc: Copia <drancharan@gmail.com>\r\n"; 

    //dirección de respuesta, si queremos que sea distinta que la del remitente  
  $headers .= "Reply-To: info@kaaxtiktravel.com\r\n"; 

  //ruta del mensaje desde origen a destino 
  $headers .= "Return-path: info@kaaxtiktravel.com\r\n"; 
  //$para = 'diegodavid.ek@gmail.com';
  $para = 'info@kaaxtiktravel.com';
  /*
  if($email=="" || $phone=="" || $nombre=="") {
      $alerta = 1;
  } else {
      mail($para, $titulo, $contenido, $headers);
      $alerta = 2;
  }
 */

  mail($para, $titulo, $contenido, $headers);

?>
<h2>¡Gracias por registrarte!</h2>
<h3> En un lapso de 48 a 72 horas uno de nuestros Travel Concierge se podrá en contacto contigo para darte todos los detalles sobre el uso de tu Kaaxtik Travel.</h3>
<h3> Conoce los hoteles y destinos que Kaaxtik Travel tiene para ti: </h3><br>
					 <div class="col-md-3">
						<a class="btn_full align-bottom" href="../cancun.html"><i class="icon_set_1_icon-35"></i> Conoce Mas</a>
					</div>