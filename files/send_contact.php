 
<?PHP
//include("config.sys.php"); 

//include("class.phpmailer.php");
//include("class.smtp.php");
 
 $name=htmlentities($_POST['name'], ENT_QUOTES, "UTF-8"); 
 $lname=htmlentities($_POST['lname'], ENT_QUOTES, "UTF-8"); 
 $email=$_POST['email']; 
 $tel=$_POST['tel'];  
$message=htmlentities($_POST['message'], ENT_QUOTES, "UTF-8");  

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
    <tr><th height="37" colspan="2" scope="col"><strong>DATOS CONTACTO('.date("d-m-Y").')</strong></th></tr> 
    <tr><td width="96" height="30"><strong>NOMBRE</strong>:</td><td width="494">'.$name.' '.$lname.'</td> </tr>
    <tr><td height="30"><strong>EMAIL</strong>:</td> <td>'.$email.'</td> </tr>
    <tr><td height="30"><strong>TEL</strong>:</td> <td>'.$tel.'</td> </tr>  
    <tr> <td height="31"><strong>MENSAJE</strong>:</td> <td>'.$message.'</td> 
    </tr> <tr><td colspan="2" align="center"><p>&nbsp;</p><p>Enviado en sitio web kaaxtiktravel.com</p></td></tr>
    <tr><td height="10" bgcolor="#FF6600" colspan="2"> </td></tr>
  </table> <p>IP Conexion: '.$ipreal.'</p></div> <body>';
  
  $titulo = "Datos Contacto";
   //para el envío en formato HTML 
  $headers = "MIME-Version: 1.0\r\n"; 
  $headers .= "Content-type: text/html; charset=utf-8\r\n"; 

  //dirección del remitente 
  $headers .= "From: Contacto - INFO <info@kaaxtiktravel.com>\r\n";     //copia 


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
<h2>¡GRACIAS POR CONTACTARNOS!</h2>
<h3> UNO DE NUESTROS REPRESENTANTES SE PONDRÁ EN CONTACTO CON USTED EN BREVE.</h3>