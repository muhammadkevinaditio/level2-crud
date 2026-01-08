<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa Level 5 </title>
    <style>
        /* Mengatur font agar lebih modern */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 40px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        /* Style untuk Tabel */
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto; /* Tengah halaman */
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #009879; /* Warna Hijau Tosca */
            color: #ffffff;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.1em;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Style untuk Tombol */
        a {
            text-decoration: none;
            font-weight: bold;
        }

        .btn {
            padding: 8px 15px;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-add {
            background-color: #009879;
            display: block;
            width: fit-content;
            margin: 0 auto 20px auto; /* Tengah */
            text-align: center;
        }

        .btn-add:hover {
            background-color: #007f65;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .btn-edit {
            background-color: #ffc107; /* Kuning */
            color: #333;
            margin-right: 5px;
        }

        .btn-edit:hover {
            background-color: #e0a800;
        }

        .btn-delete {
            background-color: #dc3545; /* Merah */
        }

        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <h2>Daftar Siswa</h2>
    
    <a href="tambah.php" class="btn btn-add">+ Tambah Siswa Baru</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM siswa");
            while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-edit">Edit</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-delete" onclick="return confirm('Yakin hapus?');">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
