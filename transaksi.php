<html>
    <head>
    </head>
    <body>
        <?php
            if (isset ($_GET['hitung'])) {
                $nama=$_GET['nama'];
                $pembeli=$_GET['pembeli'];
                $menu=$_GET['menu'];
                $jumlah=$_GET['jumlah'];

                if ($pembeli=="member") {
                    if ($menu=="paket1") {
                        $harga= 20000;
                        if ($jumlah==1) {
                            $total= $harga * $jumlah;
                            $diskon= "5%";
                        } else if ($jumlah==3) {
                            $total= $harga * $jumlah;
                            $diskon=  "7%";
                        } else if ($jumlah < 3) {
                            $total= $harga * $jumlah;
                            $diskon=  "10%";
                        }
                    } else if ($menu=="paket2") {
                        $harga= 30000;
                        if ($jumlah==1) {
                            $total= $harga * $jumlah;
                            $diskon= "5%";
                        } else if ($jumlah==3) {
                            $total= $harga * $jumlah;
                            $diskon=  "7%";
                        } else if ($jumlah < 3) {
                            $total= $harga * $jumlah;
                            $diskon=  "10%";
                        }
                    } else if ($menu=="paket3") {
                        $harga= 50000;
                        if ($jumlah==1) {
                            $total= $harga * $jumlah;
                            $diskon= "5%";
                        } else if ($jumlah==3) {
                            $total= $harga * $jumlah;
                            $diskon=  "7%";
                        } else if ($jumlah < 3) {
                            $total= $harga * $jumlah;
                            $diskon=  "10%";
                        }
                    }
                } else if ($pembeli=="non-member") {
                        if ($menu=="paket1") {
                            $harga= 20000;
                            if ($jumlah==1) {
                                $total= $harga * $jumlah;
                                $diskon= "5%";
                            } else if ($jumlah==3) {
                                $total= $harga * $jumlah;
                                $diskon=  "7%";
                            } else if ($jumlah < 3) {
                                $total= $harga * $jumlah;
                                $diskon=  "10%";
                            }
                        } else if ($menu=="paket2") {
                            $harga= 30000;
                            if ($jumlah==1) {
                                $total= $harga * $jumlah;
                                $diskon= "5%";
                            } else if ($jumlah==3) {
                                $total= $harga * $jumlah;
                                $diskon=  "7%";
                            } else if ($jumlah < 3) {
                                $total= $harga * $jumlah;
                                $diskon=  "10%";
                            }
                        } else if ($menu=="paket3") {
                            $harga= 50000;
                            if ($jumlah==1) {
                                $total= $harga * $jumlah;
                                $diskon= "5%";
                            } else if ($jumlah==3) {
                                $total= $harga * $jumlah;
                                $diskon=  "7%";
                            } else if ($jumlah < 3) {
                                $total= $harga * $jumlah;
                                $diskon=  "10%";
                            }
                        }
                    
                        echo "Nama Pelanggan : $nama<br>";
                        echo "Status Pembeli : $pembeli<br>";
                        echo "Total harga : $total<br>";
                        echo "Total diskon : $diskon<br>";
                }
            }
        ?>
        </hr>
    </body>
</html>