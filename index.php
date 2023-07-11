<?php

    require_once __DIR__."/Models/Sistema.php";
    require_once __DIR__."/Models/Mail.php";
    require_once __DIR__."/Models/Messaggio.php";
    require_once __DIR__."/Models/Notifica.php";
    
    $allegato1 = new Allegato('PDF', 'testo');
    
    $mails=[
        new Mail('pippo', 'ugo', 'oggetto messaggio', 'testo messaggio', $allegato1, 'notifica blu'),
        new Mail('pio', 'ugo', 'oggetto messaggio', 'testo messaggio', $allegato1, 'notifica blu'),
        new Mail('franco', 'ugo', 'oggetto messaggio', 'testo messaggio', $allegato1, 'notifica blu'),
        new Mail('gino', 'ugo', 'oggetto messaggio', 'testo messaggio', $allegato1, 'notifica blu'),
    ];

    var_dump($mails);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php foreach($mails as $mail) { ?>
            <div>
                <div><?php echo $mail->getMittente() ?></div>
                <div><?php echo $mail->getDestinatario() ?></div>
                <div><?php echo $mail->getOggetto() ?></div>
                <div><?php echo $mail->getContenuto() ?></div>
                <div><?php echo Mail::$suoneria ?></div>
                <div><?php echo Mail::$notifica ?></div>
            </div>
            <hr>
        <?php } ?>
    </body>
</html>