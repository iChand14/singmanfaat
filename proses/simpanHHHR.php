<?php
$koneksi = mysqli_connect("localhost","root","","singmanfaat");

if (mysqli_connect_errno()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}

    function tambahHHHR($data) {
        global $koneksi;
        $cdk = htmlspecialchars($data["cdk"]);
        $kelompok = htmlspecialchars($data["kelompok"]);
        $jumlah = htmlspecialchars($data["jumlah"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $desa = htmlspecialchars($data["desa"]);
        $kecamatan = htmlspecialchars($data["kecamatan"]);
        $kabupaten = htmlspecialchars($data["kabupaten"]);
        $luas = htmlspecialchars($data["luas"]);
        $tanaman = htmlspecialchars($data["tanaman"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $map = htmlspecialchars($data["link-map"]);


    $query = "INSERT INTO hhhr
    VALUES
    ('','$cdk','$kelompok','$jumlah','$alamat','$desa','$kecamatan','$kabupaten','$luas','$tanaman','$jenis','$map')";
    mysqli_query($koneksi, $query);


    return mysqli_affected_rows($koneksi);
    }



?>