<?php
    require_once 'libfungsi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    $nama_siswa = $_POST['name'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_tugas = $_POST['tugas'];


    $ns1 = ['nama' => 'Joko', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
    $ns2 = ['nama' => 'Supri', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
    $ns3 = ['nama' => 'Yanto', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
    $ns4 = ['nama' => 'jack  ', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
    $ns5 = ['nama' => $nama_siswa, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];
    ?>
    <div class="container">
        <a href="index.php" class="btn btn-info">Tambah</a>
        <h3>Daftar Nilai Siswa</h3>
        <table class="table table-warning">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Kelulusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($ar_nilai as $ns) {
                    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                    echo '<tr><td>' . $nomor . '</td>';
                    echo '<td>' . $ns['nama'] . '</td>';
                    echo '<td>' . $ns['uts'] . '</td>';
                    echo '<td>' . $ns['uas'] . '</td>';
                    echo '<td>' . $ns['tugas'] . '</td>';
                    echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                    echo '<td>' . grade($nilai_akhir) . '</td>';
                    echo '<td>' . predikat($nilai_akhir) . '</td>';
                    echo '<td>' . kelulusan($nilai_akhir) . '</td>';
                    echo '<tr/>';
                $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>