<?php

    require_once __DIR__."/Models/Sistema.php";
    require_once __DIR__."/Models/Mail.php";
    require_once __DIR__."/Models/Messaggio.php";
    require_once __DIR__."/Models/Notifica.php";
    

        $mail1 = new Mail('pippo', 'ugo', 'oggetto messaggio', 'testo messaggio');
        $mail1 -> setAllegato($allegato1);
        $mail2 = new Mail('pio', 'ugo', 'oggetto messaggio', 'testo messaggio');
        $mail2 -> setAllegato($allegato2);
        $mail3 = new Mail('franco', 'ugo', 'oggetto messaggio', 'testo messaggio');
        $mail3 -> setAllegato($allegato3);
        $mail4 = new Mail('gino', 'ugo', 'oggetto messaggio', 'testo messaggio');

    $mails=[
        $mail1,
        $mail2,
        $mail3,
        $mail4
    ];

    $notifiche=[
        new Notifica('pippo', 'ugo', 'oggetto notifica', 'testo notifica', true),
        new Notifica('pippo', 'ugo', 'oggetto notifica', 'testo notifica', false),
    ];

    $sms=[
        new Messaggio('pippo', 'ugo', 'oggetto messaggio', 'testo messaggio', false, true),
        new Messaggio('pippo', 'ugo', 'oggetto messaggio', 'testo messaggio', true, false),
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>mail</h2>
        <?php foreach($mails as $mail) { ?>
            <div>
                <div><?php echo $mail->getMittente() ?></div>
                <div><?php echo $mail->getDestinatario() ?></div>
                <div><?php echo $mail->getOggetto() ?></div>
                <div><?php echo $mail->getContenuto() ?></div>
                <div><?php echo Mail::$suoneria ?></div>
                <div><?php echo Mail::$notifica ?></div>
                <?php if(!is_null($mail->getAllegato())) { ?>
                <div><?php echo $mail->getAllegato()->tipo.".".$mail->getAllegato()->formato ?></div>
                <?php } ?>
                <div><?php echo $mail->Invio() ?></div>
            </div>
            <hr>
        <?php } ?>
        <h2>notifiche</h2>
        <?php foreach($notifiche as $notifica) { ?>
            <div>
                <div><?php echo $notifica->getMittente() ?></div>
                <div><?php echo $notifica->getDestinatario() ?></div>
                <div><?php echo $notifica->getOggetto() ?></div>
                <div><?php echo $notifica->getContenuto() ?></div>
                <div><?php echo $notifica->getVisibile() ?'La notifica è visibile' : 'La notifica non è visibile' ?></div>
                <div><?php echo $notifica->OnClick() ?></div>
                <div><?php echo Notifica::$notifica ?></div>
                <div><?php echo $notifica->Invio() ?></div>
            </div>
            <hr>
        <?php } ?>
        <h2>Messaggi</h2>
        <?php foreach($sms as $messaggio) { ?>
            <div>
                <div><?php echo $messaggio->getMittente() ?></div>
                <div><?php echo $messaggio->getDestinatario() ?></div>
                <div><?php echo $messaggio->getOggetto() ?></div>
                <div><?php echo $messaggio->getContenuto() ?></div>
                <div><?php echo Messaggio::$notifica ?></div>
                <div><?php echo $messaggio->Invio() ?></div>
                <div><?php echo $messaggio->risposta() ?></div>
                <div><?php echo $messaggio->getAccettazioneRisposta() ? 'Accetta risposte' : 'Non accetta risposte' ?></div>
            </div>
            <hr>
        <?php } ?>
    </body>
</html>