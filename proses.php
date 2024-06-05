    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
    class Shell{
        protected $ppn;
        private $SSuper,
                $SVPower,
                $SVPowerDiesel,
                $SVPowerNitro;
        public $jumlah;
        public $jenis;

        public function __construct(){
            $this->ppn = 0.1;
        }

        public function setHarga($tipe1, $tipe2, $tipe3, $tipe4){
            $this->SSuper = $tipe1;
            $this->SVPower = $tipe2;
            $this->SVPowerDiesel = $tipe3;
            $this->SVPowerNitro = $tipe4;
        }

        public function getHarga(){
            $data["SSuper"] = $this->SSuper;
            $data["SVPower"] = $this->SVPower;
            $data["SVPowerDiesel"] = $this->SVPowerDiesel;
            $data["SVPowerNitro"] = $this->SVPowerNitro;
            return $data;
        }
    }

    class Beli extends Shell {
        public function hargaBeli(){
            $dataHarga = $this->getHarga();
            $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
            $hargaPPN = $hargaBeli * $this->ppn;
            $hargaBayar = $hargaBeli + $hargaPPN;
            return $hargaBayar;
        }

        public function cetakPembelian() {
            echo "----------------------------------------------------" . "<br>";
            echo "Anda membeli bahan bakar minyak tipe " . $this->jenis . "<br>";
            echo "Dengan jumlah : " . $this->jumlah . " liter <br>";
            echo "Total yang harus anda bayar Rp. " . $this->hargaBeli() . "<br>";
            echo "-----------------------------------------------------" . "<br>";
        }
    }
    ?>
        
    </body>
    </html>
