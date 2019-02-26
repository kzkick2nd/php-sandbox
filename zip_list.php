<?php
    $z = new ZipArchive();
    $z->open("./sample.zip");

    for( $i = 0; $i < $z->numFiles; $i++ ) {
        print($z->getNameIndex($i));
        print(PHP_EOL);
    }
