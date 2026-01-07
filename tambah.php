<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
            font-weight: bold;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; /* Supaya padding gak bikin lebar */
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #009879;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #007f65;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #666;
            font-size: 14px;
        }

        .back-link:hover {
            color: #009879;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Tambah Siswa Baru</h2>
        
        <form method="POST" action="">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukkan nama..." required>

            <label>Email</label>
            <input type="email" name="email" placeholder="Contoh: kevin@email.com" required>

            <button type="submit" name="simpan">Simpan Data</button>
        </form>

        <a href="index.php" class="back-link">← Kembali ke Daftar</a>
    </div>

    <?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        
        $insert = mysqli_query($koneksi, "INSERT INTO siswa (nama, email) VALUES ('$nama', '$email')");
        if($insert){
            header("Location: index.php");
        } else {
            echo "<p style='text-align:center; color:red;'>Gagal menyimpan data!</p>";
        }
    }
    ?>

</body>
</html>
