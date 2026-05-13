<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_karya WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Karya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-5">
    <div class="container">
        <div class="card bg-secondary text-white p-4 border-warning mx-auto" style="max-width: 600px;">
            <h3 class="text-warning mb-4">Edit Karya</h3>
            
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                
                <div class="mb-3">
                    <label class="form-label">Judul Proyek</label>
                    <input type="text" name="judul" class="form-control" value="<?php echo $data['judul']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Singkat</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required><?php echo $data['deskripsi']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Link URL Gambar</label>
                    <input type="text" name="gambar" class="form-control" value="<?php echo $data['gambar']; ?>">
                </div>
                <button type="submit" class="btn btn-warning w-100 fw-bold">Update Data</button>
                <a href="index.php" class="btn btn-outline-light w-100 mt-2">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>