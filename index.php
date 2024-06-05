<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: #94B49F;
            font-family: 'Poppins', sans-serif;
        }

        h1{
            color:#94B49F;
            font-weight: bold;
            text-align: center;
        }

        .container {

        }

        .card{
            background: #FFFDE3;
        }
        select{
            width: 198px;
        }

        .hasil{
            color:#94B49F;
        }
    </style>
    <title>Bahan Bakar Shell</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center">
    <div class="card p-5 mt-5">
    <center>
        <h1>Form Pembelian Bahan Bakar</h1>
        <br>
        <table>
            <form action="" method="post">
            <tr>
                <td>Masukan Jumlah Liter : &nbsp;</td>
                <td>
                    <input type="number" name="liter" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td>Pilih Tipe Bahan Bakar : &nbsp; </td>
                <td>
                    <select name="jenis" class="form-control">
                        <option hidden>Pilih Bahan Bakar</option>
                        <option value="SSuper">Shell Super</option>
                        <option value="SVPower">Shell V-Power</option>
                        <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                        <option value="SVPowerNitro">Shell V-Power Nitro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br><input type="submit" class="btn btn-lg btn-block btn-success" value="Beli" name="kirim"></td>
            </tr>
            </form>
        </table>
        <br>
        <div class="hasil">
        <?php
include 'proses.php';
$proses = new Beli();
$proses->setHarga(15420, 16130, 18310, 16510);
if (isset($_POST['kirim'])) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];

    $proses->hargaBeli();
    $proses->cetakPembelian();
}
?>
</div>
    </div>
    </div>
    </center>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>