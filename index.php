<?php

    require_once __DIR__."/Models/Sistema.php";
    require_once __DIR__."/Models/Mail.php";
    require_once __DIR__."/Models/Messaggio.php";
    require_once __DIR__."/Models/Notifica.php";

    $mails=[
        new Mail('pippo', 'ugo', 'oggetto messaggio', 'testo messaggio', 'DRIIINNNN', 'allegato mail', 'notifica blu'),
        new Mail('gino', 'alfonso', 'oggetto messaggio', 'testo messaggio', 'DRIIINNNN', 'allegato mail', 'notifica blu'),
        new Mail('pio', 'pasquale', 'oggetto messaggio', 'testo messaggio', 'DRIIINNNN', 'allegato mail', 'notifica blu'),
        new Mail('franco', 'peppe', 'oggetto messaggio', 'testo messaggio', 'DRIIINNNN', 'allegato mail', 'notifica blu')
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
        <div>
            <?php foreach($mails as $mail) { ?>
                <div><?php echo $mail->getMittente() ?></div>
                <div><?php echo $mail->getDestinatario() ?></div>
                <div><?php echo $mail->getOggetto() ?></div>
                <!-- <div><?php echo $mail->getSuoneria() ?></div> -->
                <div><?php echo $mail->getAllegato() ?></div>
            <?php } ?>
        </div>
    </body>
</html>