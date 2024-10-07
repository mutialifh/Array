<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa 3WD1</title>
    <style>
        /* Styling untuk tabel */
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        /* Styling untuk kartu */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 200px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin: 10px 0;
            font-size: 18px;
        }

        .card p {
            margin: 5px 0;
            font-size: 14px;
        }

        /* Styling umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<h2>Data Siswa 3WD1 (Tabel)</h2>

<!-- Bagian Tabel -->
<table>
    <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
    </tr>
    <?php
    // Membuat array dari data siswa kelas 3WD1
    $siswa3WD1 = [
        [
            "nama" => "Aura",
            "jenis_kelamin" => "Perempuan",
            "jurusan" => "Web Development"
        ],
        [
            "nama" => "Cyntia",
            "jenis_kelamin" => "Perempuan",
            "jurusan" => "Web Development"
        ],
        [
            "nama" => "Hasya",
            "jenis_kelamin" => "Perempuan",
            "jurusan" => "Web Development"
        ],
        [
            "nama" => "Mutia",
            "jenis_kelamin" => "Perempuan",
            "jurusan" => "Web Development"
        ],
        [
            "nama" => "Salwa",
            "jenis_kelamin" => "Perempuan",
            "jurusan" => "Web Development"
        ]
    ];

    // Menampilkan data siswa dalam bentuk tabel
    foreach ($siswa3WD1 as $siswa) {
        echo "<tr>";
        echo "<td>" . $siswa['nama'] . "</td>";
        echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
        echo "<td>" . $siswa['jurusan'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<h2>Data Siswa 3WD1 (Kartu)</h2>

<!-- Bagian Kartu -->
<div class="card-container">
    <?php
    // Menampilkan data siswa dalam bentuk kartu
    foreach ($siswa3WD1 as $siswa) {
        echo "<div class='card'>";
        echo "<h3>" . $siswa['nama'] . "</h3>";
        echo "<p>Jenis Kelamin: " . $siswa['jenis_kelamin'] . "</p>";
        echo "<p>Jurusan: " . $siswa['jurusan'] . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>