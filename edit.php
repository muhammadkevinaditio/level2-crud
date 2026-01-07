<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
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
            box-sizing: border-box; 
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ffc107; /* Warna Kuning untuk Edit */
            color: #333;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #e0a800;
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
            color: #333;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Edit Data Siswa</h2>
        
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

            <label>Nama Lengkap</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>

            <label>Email</label>
            <input type="email" name="email" value="<?php echo $data['email']; ?>" required>

            <button type="submit" name="update">Update Data</button>
        </form>

        <a href="index.php" class="back-link">← Batal & Kembali</a>
    </div>

    <?php
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        
        $update = mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', email='$email' WHERE id='$id'");
        if($update){
            header("Location: index.php");
        } else {
            echo "<p style='text-align:center; color:red;'>Gagal update data!</p>";
        }
    }
    ?>

</body>
</html>
