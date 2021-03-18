<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian</title>
</head>
<body>  
     <h1>Form Nilai Siswa</h1>
     <!--
     Request :
     get
     post-->
     <form method="GET" action="form_nilai.php" >

        <label for="">Nama</label>
        <input type="text" name="nama" value="" size="30"></br>
        <label for="">NIM</label>
        <input type="text" name="NIM" value="" size="30"></br>
        <select name="mata_kuliah" id="">
            <option value="">Nama Mata Kuliah</option>
            <option value="pemrograman web">Pemrograman Web</option>
            <option value="basis data">Basis Data</option>
            <option value="pemrograman web">Statistik</option>
            <option value="pemrograman web">Ket. Komunikasi</option>
            <option value="pemrograman web">Bhs. Inggris</option>
            <option value="pemrograman web">UI/UX</option>
            <option value="pemrograman web">PKN</option>
            <option value="pemrograman web">Jaringan Komputer</option>
        </select></br>
            

        <label for="">Nilai Tugas</label>
        <input type="text" name="nilai_tugas" value=""></br>

        <label for="">Nilai UTS</label>
        <input type="text" name="nilai_uts" value=""></br>

        <label for="">Nilai UAS</label>
        <input type="text" name="nilai_uas" value=""></br>

        <input type="submit" name="kiriim" value="kirim">
     </form>
</body>
<?php
$nama = $_GET['name'];
$nim = $_GET['nim'];
$nilai_tugas = $_GET['nilai_tugas'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uts'];
$mata_kuliah = $_GET['mata_kuliah'];
$total_nilai = ($nilai_tugas + $nilai_uts + $nilai_uas);
$peringkat_huruf = $_GET['peringkat_huruf'];
$simpan = $_GET['simpan'];
?>
        <?php
        $total_nilai=($nilai_tugas + $nilai_uts +$nilai_uas);
        $na = ($total_nilai /3)
        ?>
<?php 
    if ($na <= 24 )
    {
$peringkat_huruf = 'E';
    }
    else if ($na <= 33 )
    {
$peringkat_huruf = 'D';
    }
    else if ($na <= 58)
    {
$peringkat_huruf = 'C';
    }
    else if ($na <= 83)
    {
$peringkat_huruf = 'B';
    }
    else
    {
$peringkat_huruf = 'A';
    }
?>

    </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama : <?= $name?></li></li>
                    <li class="list-group-item">Nim : <?= $nim?></li></li>
                    <li class="list-group-item">Mata Kuliah : <?= $mata_kuliah?></li></li>
                    <li class="list-group-item">Nilai UTS : <?= $nilai_uts?></li></li>
                    <li class="list-group-item">Nilai UAS : <?= $nilai_uas?></li></li>
                    <li class="list-group-item">Nilai Tugas : <?= $nilai_tugas?></li></li>
                    <li class="list-group-item">Total Nilai : <?= $total_nilai?></li></li>
                    <li class="list-group-item">Peringkat Huruf : <?= $peringkat_huruf?></li>
                        
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C : 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : K urang dari 40 </li>
                    
                    
                </ul>
                </div>
            </div>
        
        
    </div>


    
</body>
</html>