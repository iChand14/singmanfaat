<?php
$koneksi = mysqli_connect("localhost","root","","singmanfaat");

if (mysqli_connect_errno()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}

    function tambahJASLING($data) {
        global $koneksi;
        $cdk = htmlspecialchars($data["cdk"]);
        $pengelola = htmlspecialchars($data["pengelola"]);
        $anggota = htmlspecialchars($data["anggota"]);
        $namalokasi = htmlspecialchars($data["namalokasi"]);
        $jenisjasling = htmlspecialchars($data["jenisjasling"]);
        $fungsi = htmlspecialchars($data["fungsi"]);
        $kph = htmlspecialchars($data["kph"]);
        $bkph = htmlspecialchars($data["bkph"]);
        $rph = htmlspecialchars($data["rph"]);
        $desa = htmlspecialchars($data["desa"]);
        $kecamatan = htmlspecialchars($data["kecamatan"]);
        $kabupaten = htmlspecialchars($data["kabupaten"]);
        $link_map = htmlspecialchars($data["link_map"]);


    $query = "INSERT INTO jasling
    VALUES
    ('','$cdk','$pengelola','$anggota','$namalokasi','$jenisjasling','$fungsi','$kph','$bkph','$rph','$desa','$kecamatan','$kabupaten','$link_map')";
    mysqli_query($koneksi, $query);


    return mysqli_affected_rows($koneksi);
    }



    ?>