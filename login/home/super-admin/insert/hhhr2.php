
<?php
    include "../../../../koneksi.php";
    include "../../../../ExcelReader/excel_reader.php";
    
    if ($_POST['upload'] == "upload") {
        $type         =explode(".",$_FILES['namafile-1']['name']);
        
        if (empty($_FILES['namafile-1']['name'])) {
            ?>
                <script language="JavaScript">
                    alert('Oops! Please fill all / select file ...');
                    document.location='../index.php';
                </script>
            <?php
        }
        else if(strtolower(end($type)) !='xls'){
            ?>
                <script language="JavaScript">
                    alert('Oops! Please upload only Excel XLS file ...');
                    document.location='../index.php';
                </script>
            <?php
        }
        
        else{
        $target = basename($_FILES['namafile-1']['name']) ;
        move_uploaded_file($_FILES['namafile-1']['tmp_name'], $target);
    
        $data    =new Spreadsheet_Excel_Reader($_FILES['namafile-1']['name'],false);
    
        $baris = $data->rowcount($sheet_index=0);
    // isi sesuai template excel
        for ($i=2; $i<=$baris; $i++){
            $cdk =$data->val($i, 1);
            $kelompok =$data->val($i, 2);
            $jumlah =$data->val($i, 3);
            $alamat =$data->val($i, 4);
            $desa =$data->val($i, 5);
            $kecamatan =$data->val($i, 6);
            $kabupaten =$data->val($i, 7);
            $luas =$data->val($i, 8);
            $tanaman =$data->val($i, 9);
            $jenis =$data->val($i, 10);
            $map =$data->val($i, 11);
        // isi sesuai field tabel
            $query = mysqli_query($koneksi,"INSERT INTO hhhr VALUES ('','$cdk','$kelompok','$jumlah','$alamat','$desa','$kecamatan','$kabupaten','$luas','$tanaman','$jenis','$map')");        
        }
    
            if(!$query){
                ?>
                    <script language="JavaScript">
                        alert('<b>Oops!</b> 404 Error Server.');
                        document.location='../index.php';
                    </script>
                <?php
            }
            else{
                ?>
                    <script language="JavaScript">
                        alert('Good! Import Excel XLS file success...');
                        document.location='../index.php';
                    </script>
                <?php
            }
        unlink($_FILES['namafile-1']['name']);
        }
    }
?>