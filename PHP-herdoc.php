<?php
    /*
        heredoc preserves the line breaks and other whitespaces
        (including indentation) in text. The herdoc is created with <<< followed by a delimiting identifier 'TEXT'
        followed, and starting on the next line, by the text to be qouted, and then closed
        by the same delimeter. The closing delimeter MUST not be indented. It can only contain 
        aplanumeric characters and underscores, and must start with a non-digit character or underscore.
    */
    $str = <<< TEXT
    "That is just as I intended." TheoNeUpKID said "I am the man and php is easy to learn"
    TEXT;

    echo $str, "\n";
?>