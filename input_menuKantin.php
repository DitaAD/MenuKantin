<html>
    <head>
        <title>Daftar Menu</title>
        <meta name="author" content="Dita Annisa Diningtyas">
        <meta name="nim" content="2210511169">
    </head>

    <body>
        <h3>Daftar Menu di Kantin Mamah Dedeh</h3>
        <form action="output_menuKantin.php" method="POST">
            <table>
                <tr>
                    <td>
                        <input type="checkbox" name="menu[]" value="nasi">Nasi ---> Rp. 2000<br/>
                        <input type="checkbox" name="menu[]" value="ikanBakar">Ikan Bakar ---> Rp. 3000<br/>
                        <input type="checkbox" name="menu[]" value="ayamBakar">Ayam Bakar ---> Rp. 4000<br/>
                        <input type="checkbox" name="menu[]" value="sayurLodeh">Sayur Lodeh ---> Rp. 2000<br/>
                        <input type="checkbox" name="menu[]" value="tumisKangkung">Tumis Kangkung ---> Rp. 2000<br/><br><br><br>
                    </td>
                </tr>
                <tr>
                    <td>Nama Anda : <input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>
                        <br><input type="submit" value="Bayar Sekarang">
                    </td>
                </tr>
                
            </table>
        </form>
    </body>
</html> 
