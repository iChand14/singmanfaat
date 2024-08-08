<?php
$koneksi = mysqli_connect("localhost","root","","singmanfaat");

if (mysqli_connect_errno()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}

    function tambahHHBK($data) {
        global $koneksi;
        $cdk = htmlspecialchars($data["cdk"]);
        $nama_kelompok_tani_instasi = htmlspecialchars($data["nama_kelompok_tani_instasi"]);
        $jumblah_anggota_tenaga_kerja = htmlspecialchars($data["jumblah_anggota_tenaga_kerja"]);
        $blok_alamat = htmlspecialchars($data["blok_alamat"]);
        $desa = htmlspecialchars($data["desa"]);
        $kecamatan = htmlspecialchars($data["kecamatan"]);
        $kabupaten = htmlspecialchars($data["kabupaten"]);
        $hhbk = htmlspecialchars($data["hhbk"]);
        $satuan = htmlspecialchars($data["satuan"]);
        $link_map = htmlspecialchars($data["link_map"]);


    $query = "INSERT INTO hhbk
    VALUES
    ('', '$cdk', '$nama_kelompok_tani_instasi','$jumblah_anggota_tenaga_kerja', '$blok_alamat', '$desa','$kecamatan', '$kabupaten', '$hhbk', '$satuan', '$link_map') 
    ";
    mysqli_query($koneksi, $query);


    return mysqli_affected_rows($koneksi);
    }



    ?>