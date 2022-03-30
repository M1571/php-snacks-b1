<?php 

    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eveniet veritatis. mollitia nesciunt autem ipsam. odio ipsa aut, reprehenderit ducimus unde. ullam fugiat quos.';
    $paragrafi = explode('.', $text);

    foreach ($paragrafi as $key => $paragrafo) {
        if (!empty($paragrafo))
            echo 'paragrafo n° ' . $key . ' ' . $paragrafo . '<br/>';
    }
    
?>