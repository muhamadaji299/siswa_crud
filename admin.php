<?php
include 'koneksi.php';

// Query untuk mendapatkan data siswa
$sql = "SELECT * FROM tbl_siswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            font-size: 16px;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(45deg, #4CAF50, #2E8B57);
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #f4f4f4;
        }

        /* About Section */
        .about {
            text-align: center;
            margin-top: 20px;
        }

        .about h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding: 20px;
        }

        .card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 10px;
            color: #4CAF50;
        }

        .card p {
            margin: 5px 0;
            color: #555;
        }

        .card span {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #2E8B57;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: #2E8B57;
            color: white;
            margin-top: 20px;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #f4f4f4;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <h1>About Us</h1>
        </div>
        <div>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>

    <!-- About Section -->
    <div class="container about">
        <h2>Meet Our Students</h2>
        <div class="card-container">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="card">
                        <img src="upload/<?= htmlspecialchars($row['foto']); ?>" alt="<?= htmlspecialchars($row['nama']); ?>">
                        <h3><?= htmlspecialchars($row['nama']); ?></h3>
                        <p><strong>NIS:</strong> <?= htmlspecialchars($row['nis']); ?></p>
                        <p><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($row['jenis_kelamin']); ?></p>
                        <p><strong>Tanggal Lahir:</strong> <?= htmlspecialchars($row['tanggal_lahir']); ?></p>
                        <p><strong>Alamat:</strong> <?= htmlspecialchars($row['alamat']); ?></p>
                        <span>Student Profile</span>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No students found.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 | Designed by Aji</p>
        <p>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
        </p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
