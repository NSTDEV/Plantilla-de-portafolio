<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <center>
    <?php 
    $myemail = 'nahueltroncosoraskovsky@gmail.com';<!--Aquí puedes poner tu correo-->
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $message = $_POST['mensaje'];

    $to = $myemail;
    $email_subject = "Nuevo mensaje: $subject";
    $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
    $headers = "From: $email";

    mail($to, $email_subject, $email_body, $headers);
    echo "<h3>El mensaje se ha enviado correctamente</h3>";
    ?>
    </center>
</body>
</html>