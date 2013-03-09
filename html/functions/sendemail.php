<?php

    // Send Email
    if($_POST['template-contactform-email'] && $_POST['template-contactform-submit'])
    {
        // Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        // Cabeceras adicionales
        $headers .= 'To: DAT <info@defensaenaccidentedetrafico.com‎>' . "\r\n";
        $headers .= 'From: ' . $_POST['template-contactform-name'] . ' <'. $_POST['template-contactform-email'] .'>' . "\r\n";

        mail(   "fcerezo@localhost",
                "Petición de información [" . $_POST['template-contactform-name'] . "]",
                "<b>Nombre</b> : " . $_POST['template-contactform-name'] . "<br />" .
                "<b>Email</b>  : " . $_POST['template-contactform-email'] . "<br />" .
                "<b>Teléfono</b>  : " . $_POST['template-contactform-phone'] . "<br />" .
                "<b>Mensaje</b><br /> " . $_POST['template-contactform-message'] . "<br />",
                $headers
            );
?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Su <strong>mensaje</strong> se envió correctamente. Nos pondremos en contacto
            lo antes posible. Gracias.
        </div>
<?php

    }
    else
    {
?>
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Un <strong>error</strong> ocurrió. Por favor inténtelo de nuevo.
        </div>
<?php
    }