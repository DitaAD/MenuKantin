<?php
    $menu=$_POST['menu'];
    $nama=$_POST['nama'];

    $hargaMenu = array(
        "nasi" => 2000,
        "ikanBakar" => 3000,
        "ayamBakar" => 4000,
        "sayurLodeh" => 2000,
        "tumisKangkung" => 2000
    );

    //menghitung total harga
    $totalHarga = 0;

    foreach ($menu as $item) {
        $totalHarga += $hargaMenu[$item];
    }

?>

<html>
    <head>
        <title>Tampilan Menu</title>
        <meta name="author" content="Dita Annisa Diningtyas">
        <meta name="nim" content="2210511169">
    </head>

    <body>
        <table>
            <tr>
                <td><br><h2>Total Harga : <?php echo $totalHarga; ?></h2></td>
            </tr>
            <tr>
                <td>
                    <?php
                        //menentukan bonus & diskon
                        $bonus = "";
                        $diskon = 0;
                        
                        //jika total harga >= 7000 dan < 13000
                        if ($totalHarga >= 7000 && $totalHarga < 13000) {
                            $bonus = "Minuman Gratis: Teh Manis Dingin";

                        //jika total harga = 13000
                        } elseif ($totalHarga == 13000) {
                            $bonus = "Minuman Gratis: Jus Jeruk";
                            $diskon = $totalHarga * 0.1;
                            $totalHarga -= $diskon;
                        }

                        //menampilkan bonus jika dapat 
                        if ($bonus != "") {
                            echo "<b>Hi, $nama</b>";
                            echo "<h2>Bonus:</h2>";
                            echo "<ul><li>$bonus</li>";
                            
                            //menampilkan diskon dan harga sekarang setelah dapat bonus
                            if ($diskon > 0) {
                                echo "<li>Diskon: $diskon</li>";
                                echo "<li>Harga Sekarang: $totalHarga</li>";
                            }
                            echo "</ul>";

                        //jika tidak dapat bonus
                        } else {
                            echo "<b>Selamat Makan $nama, by Mamah Dedeh</b>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>
