
<?php
    include "../koneksi.php";
    include "../ExcelReader/excel_reader.php";
    
    if ($_POST['upload'] == "upload") {
        $type         =explode(".",$_FILES['namafile-1']['name']);
        
        if (empty($_FILES['namafile-1']['name'])) {
            ?>
                <script language="JavaScript">
                    alert('Oops! Please fill all / select file ...');
                    document.location='../tambah.php';
                </script>
            <?php
        }
        else if(strtolower(end($type)) !='xls'){
            ?>
                <script language="JavaScript">
                    alert('Oops! Please upload only Excel XLS file ...');
                    document.location='../tambah.php';
                </script>
            <?php
        }
        
        else{
        $target = basename($_FILES['namafile-1']['name']) ;
        move_uploaded_file($_FILES['namafile-1']['tmp_name'], $target);
    
        $data    =new Spreadsheet_Excel_Reader($_FILES['namafile-1']['name'],false);
    
        $baris = $data->rowcount($sheet_index=0);
    
        for ($i=2; $i<=$baris; $i++){
            $cdk =$data->val($i, 1);
            $pengelola =$data->val($i, 2);
            $jumlah =$data->val($i, 3);
            $namalokasi =$data->val($i, 4);
            $jenis =$data->val($i, 5);
            $fungsi =$data->val($i, 6);
            $kph =$data->val($i, 7);
            $bkph =$data->val($i, 8);
            $rph =$data->val($i, 9);
            $desa =$data->val($i, 10);
            $kecamatan =$data->val($i, 11);
            $kabupaten =$data->val($i, 12);
            $map =$data->val($i, 13);
            
            $query = mysqli_query($koneksi,"INSERT INTO jasling VALUES ('','$cdk','$pengelola','$jumlah','$namalokasi','$jenis','$fungsi','$kph','$bkph','$rph','$desa','$kecamatan','$kabupaten','$map')");        
        }
        
            if(!$query){
                ?>
                    <script language="JavaScript">
                        alert('<b>Oops!</b> 404 Error Server.');
                        document.location='../tambah.php';
                    </script>
                <?php
            }
            else{
                ?>
                    <script language="JavaScript">
                        alert('Good! Import Excel XLS file success...');
                        document.location='../tambah.php';
                    </script>
                <?php
            }
        unlink($_FILES['namafile-1']['name']);
        }
    }
?>