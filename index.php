<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Badwords</title>
</head>
<body>

    <!-- Codice PHP -->
    <?php
        // variabile con titolo del manga
        $titolo = 'Holly e Benji';
        // Variabile con trama del manga
        $trama = "Holly Hutton è un ragazzino con una grande passione per il calcio che vuole diventare a tutti i costi un grande campione. Trasferitosi a Fujisawa incontra, girovagando col suo inseparabile amico (il pallone), la squadra della Newppy che si sta contendendo un campo da calcio con la Saint Francis di Benji Price. I tentativi di battere il fortissimo portiere sono vani. Holly dopo aver ricevuto alcune informazioni da Bruce Harper, capitano della Newppy, lancia una sfida al portierone facendogli arrivare il pallone direttamente tra le braccia con un tiro fortissimo. Benji accetta la sfida e Holly per vincerla deve prima dribblare tutta la Saint Francis e poi segnare un goal. Qui interviene la figura di Roberto Sedinho (campione brasiliano) che durante la sfida, cui stava assistendo da spettatore, con un assist perfetto affida ad Holly il pallone vincente. Il campo per l'allenamento passa alla Newppy e Holly decide di far parte di questa squadra di cui diventa capitano e l'allenatore è niente meno che Sedinho, che promette ad Holly di portarlo in Brasile se vincerà il campionato. Molte sono le squadre sfidate nel torneo studentesco e durante il campionato la Newppy cresce tecnicamente e tatticamente, integrando un nuovo giocatore, Tom Becker, validissimo attaccante che con Holly crea azioni superlative. In finale troviamo la Newppy contro la Saint Francis. Holly e Benji di nuovo uno contro l'altro. Il campionato viene consegnato nelle mani di entrambe dopo una partita conclusasi sul 2 a 2. Da qui viene creata, con i giocatori migliori, la Newteam per concorrere al titolo regionale prima e nazionale giovanile poi, dove incontra squadre come la Muppet di Mark Landers, la Flynet di Philip Callaghan, gli Hot Dog dei gemelli Derrick, la Mambo di Julian Ross e altri. Il campionato nazionale viene vinto dalla Newteam e da questo momento le strade di Holly, Benji e Tom si dividono. Holly resta alla Newteam che vincerà nuovamente il campionato assieme alla Toho di Mark Lenders ed entrambi insieme a Benji, Tom e altri protagonisti fondamentali vengono convocati per i mondiali juniores, vinti dalla nazionale nipponica contro la Germania. In questo momento riappare Robinho che decide di mantenere la promessa fatta e portare Holly in Brasile dove per ben 3 anni giocherà nel San Paolo.";
    ?>
    
    <!-- Stampa in HTML delle variabili PHP "titolo", "trama" e conteggio dei caratteri -->
    <h1><?php echo $titolo; ?></h1>
    <p><?php echo $trama; ?></p>
    <h3><?php echo "Lunghezza della trama: " . strlen($trama) . " caratteri." ?></h3>
    <hr>

    <!-- Ripetizione del paragrafo, con sostituzione della stringa censurata -->
    <p><?php echo str_replace($_GET["badword"], "***", $trama) ?></p>
    <!-- Riconteggio dei caratteri dopo la sostituzione della stringa censurata -->
    <h3><?php echo "Lunghezza della trama: " . strlen(str_replace($_GET["badword"], "***", $trama)) . " caratteri." ?></h3>
</body>
</html>