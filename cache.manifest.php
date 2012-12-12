<?php
    header("Content-Type: text/cache-manifest");
?>
CACHE MANIFEST
<?php
    echo "\n# CRC indexu takze nemusim menit po zmene rucne: ".hash_file( 'crc32b', "index.html" ). "\n";
    /* ked pridame dalsie subory ktore sa odkazuju na cache */
    echo "# stats.html hash: ".hash_file( 'crc32b', "stats.html" ). "\n\n";
?>

# pridame loader ktory sa nacitava z inej domeny priklad ak pouzivame CDN
# http://www.sanbaldo.com/wordpress/wp-content/bigrotation2.gif
# pridane pozadie
# images/back.jpg;

images/coffee_cup.png
js/jquery-1.8.3.min.js

NETWORK:
*

FALLBACK:
online.html offline.html
