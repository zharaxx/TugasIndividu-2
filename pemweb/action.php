<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <body>
            <div id="grad"></div>
            <center>
                <div class="container">
                    <div class="text-input">
                <?php
                $produk = $_GET['name'];
                echo "Produk anda adalah <b>$produk</b>";
                ?><br>        
                <?php
                $jumlah = $_GET['jumlah'];
                echo "Jumlah produk sebanyak : <b>$jumlah</b>";
                ?>
                </div>
                </div>
            </center>
        </body>
    </head>
</html>