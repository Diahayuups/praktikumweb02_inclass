<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
</head>

<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="row">
        <div class="col-md-8 py-3">
            <h3>Belanja Online</h3>
            <hr>
            <?php
            // Proses formulir ketika disubmit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $costumer = $_POST["costumer"];
                $produk = $_POST["produk"];
                $jumlah = (int) $_POST["jumlah"];

                // Menghitung harga berdasarkan pilihan produk
                $hargaPerProduk = 0;
                switch ($produk) {
                    case 'TV':
                        $hargaPerProduk = 4200000;
                        break;
                    case 'Kulkas':
                        $hargaPerProduk = 3100000;
                        break;
                    case 'Mesin Cuci':
                        $hargaPerProduk = 3800000;
                        break;
                }

                // Menghitung total harga
                $totalHarga = $jumlah * $hargaPerProduk;
            }
            ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Costumer</label>
                    <div class="col-6">
                        <input name="costumer" placeholder="Nama Costumer" type="text" class="form-control"
                            required="required">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label>
                    <div class="col-6">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"
                                required="required">
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"
                                required="required">
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input"
                                value="Mesin Cuci" required="required">
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                    <div class="col-6">
                        <input name="jumlah" type="number" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-6">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

            <?php
            // Menampilkan total harga jika formulir sudah disubmit
            if (isset($totalHarga)) {
                echo '<div id="total_harga">Total Harga untuk ' . $jumlah . ' ' . $produk . ': ' . number_format($totalHarga) . '</div>';
            }
            ?>
        </div>

        <div class="col-md-4 py-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Daftar Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TV : 4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas : 3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci : 3.800.000</td>
                    </tr>
                    <tr>
                        <td>Harga Dapat Berubah Setiap Saat</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>