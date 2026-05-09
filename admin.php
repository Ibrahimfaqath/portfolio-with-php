<?php 
session_start();

include 'helper/config.php';

if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page or show error_clear_last
    header('Location: login.php');
    exit;
} 

$portfolioItems = [];
// get portfolio items from database
$stmt = $pdo->prepare("SELECT * FROM portfolio_items ORDER BY created_at DESC");
$stmt->execute();

$portfolioItems = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Handle form submission to add new portfolio (POST) item
// data disimpan di session untuk sementara, nanti bisa diganti dengan database jika sudah belajar database
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'])) {
   $title = $_POST['title'] ?? '';
   $description = $_POST['description'] ?? '';

   // 1. Inisialisasi nama file (default kosong jika tidak upload)
   $imageName = '';

   // 2. Cek apakah ada file yang diupload
   if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
     $targetDir = "uploads/";  

     // Agar nama file tidak bentrok, kita beri prefix waktu
     $imageName = time() . "_" . basename($_FILES["image"]["name"]);
     $targetFilePath = $targetDir . $imageName;

    // 3. Pindahkan file dari memori temporary ke folder tujuan
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        die("Gagal mengupload gambar.");
    }
   }

   if ($title && $description) {
    // 4. Simpan NAMA FILE-nya saja ke database
    $sql = "INSERT INTO portfolio_items (title, description, image) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $description, $imageName]);

    header("Location: admin.php");
    exit;
   }
}

// Handle delete apache_get_version
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];

    // 1. Ambil nama file gambar dari database sebelum datanya dihapus
    $stmt = $pdo->prepare("SELECT image FROM portfolio_items WHERE id = ?");
    $stmt->execute([$id]);
    $item = $stmt->fetch();

    if ($item && $item['image']) {
        $filePath = "uploads/" . $item['image'];
        // 2. Cek apakah filenya benar-benar ada di folder, lalu hapus
        if (file_exists($filePath)) {
            unlink($filePath); // Ini fungsi sakti untuk menghapus file di PHP
        }
    }

    // 3. Baru hapus data dari database
    $sql = "DELETE FROM portfolio_items WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    header("Location: admin.php");
    exit;
}

$title = "Admin Page";
$page = "about";
include 'header.php';
?>

<link rel="stylesheet" href="style/admin.css">

  <section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Admin Panel</h2>
            <p>Halaman ini hanya bisa diakses setelah login. Di sini Anda bisa menambahkan item portfolio yang akan ditampilkan di halaman portfolio.</p>

        </div>
    </div>
  </section>
  <section>
    <div class="container">
        <h2>Tambah Portfolio Item</h2>
    </div>
  </section>
  <section>
    <div class="container">
        <form action="admin.php" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" placeholder="Masukkan judul portfolio" required>

            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="description" id="description" rows="5" placeholder="Masukkan deskripsi portfolio" required></textarea>

            </div>
            <div class="form-group">
                <label for="image">URL Gambar (opsional)</label>
                <input type="file" name="image" id="image" placeholder="Masukkan gambar portfolio" >
            </div>
            <button type="submit" class="btn">Tambah Portfolio</button>
        </form>
    </div>
  </section>
  <section>
    <div class="container">
        <div class="section-title">
            <h2>Daftar Portfolio</h2>
            <p>Berikut adalah daftar item portfolio yang sudah ditambahkan.</p>

        </div>

        <div class="table-wrapper">
            <table class="portfolio-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($portfolioItems as $index => $item): ?>
                        <tr>
                            <td><?php echo $index + 1;?></td>
                            <td><?php echo htmlspecialchars($item['title']); ?> </td>
                            <td><?php echo htmlspecialchars($item['description']); ?></td>
                            <td>
                              <?php if ($item['image']): ?>
                                <img class="table-image" src="uploads/<?php echo htmlspecialchars($item['image']); ?>" ... >
                              <?php else: ?>
                                -
                              <?php endif; ?>    
                            </td>
                            <td>
                              <form action="admin.php" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $item['id']; ?>">
                                <button type="submit" class="btn" onclick="return confirm('yakin mau hapus datanya?')">Hapus</button>
                              </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
