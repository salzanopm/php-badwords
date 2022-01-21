<?php 
    // inizializzazione variabile paragrafo
    $paragraph = 'Non posso dire questo perchè questo è censurato.';
    
    // parametro get per passare stringa da censurare
    $badword = $_GET['badword'];

    // sostituisco la parola parametrizzata dall'utente con gli asterischi
    $replace_paragraph = str_replace($badword, '***', $paragraph);
?>

<!-- stampo a schermo la stringa -->
<p><?php echo $paragraph;?></p>

<!-- stampo a schermo la lunghezza della stringa -->
<p>La lunghezza del paragrafo qui sopra è di <?php echo strlen($paragraph) - 2;?> battute.</p>

<!--  ristampo a schermo stringa censurata -->
<p><?php echo $replace_paragraph;?></p>

