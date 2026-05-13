<?php
// index.php
include 'koneksi.php'; 
// Menarik data dari database, diurutkan dari yang terbaru (DESC)
$query = mysqli_query($koneksi, "SELECT * FROM tb_karya ORDER BY id DESC");
$semua_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Portofolio Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5 bg-dark text-light">
    <div class="container">
        <h2 class="mb-4">Karya Saya</h2>
        <a href="tambah.php" class="btn btn-primary mb-4">Tambah Data</a>

        <div class="row">
            <?php foreach($semua_data as $data) : ?>
                <div class="col-md-4 mb-3">
                    <div class="card bg-secondary text-white">
                        <div class="card-body">
                            <h4><?php echo $data['judul']; ?></h4>
                            <p><?php echo $data['deskripsi']; ?></p>
                            
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>