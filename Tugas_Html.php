<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firza Ekaputra - Website</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <h1>Welcome to my Personal Homepage!</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <p id="clock"></p>
    </header>

    <section id="home">
        <h2>About Me</h2>
        <div class="profile">
            <p> Halo semuanya! Saya <strong>Firza Ekaputra Zulfiqar</strong>, mahasiswa <strong>Teknik Informatika</strong> di Universitas Sam Ratulangi, Manado. Saat ini saya sedang menempuh semester 6.
        </p>
        <p>
            Saya aktif di berbagai organisasi seperti <em>Himpunan Mahasiswa Elektro</em>, <em>Badan Kerohanian Fakultas</em>, hingga <em>Himpunan Mahasiswa Islam Manado</em>.
        </p>
        <p>
            Di luar kampus, saya adalah alumni program <strong>Pertukaran Mahasiswa Merdeka 2024</strong> di Universitas Padjadjaran, serta penerima beasiswa <strong>Karya Salemba Empat</strong> tahun 2023–2024.
        </p>
        <p>
            Saya lahir di <strong>Manado, 4 Maret 2003</strong> dan berasal dari Makassar. Kini berusia <strong>22 tahun</strong>, saya berharap dapat menjadi pribadi yang bermanfaat bagi sekitar, menjadi pemimpin yang baik, serta terus istiqomah dalam mempelajari agama Islam.
        </p>
        <p><em>Terima kasih telah berkunjung. Have fun exploring!</em></p>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section id="gallery">
        <h2>Gallery</h2>
        <div class="multi-slideshow">
          <figure class="slide-group">
            <img src="IMAGES/Unpad.jpg" alt="Me">
            <figcaption>Me</figcaption>
          </figure>
          <figure class="slide-group">
            <img src="IMAGES/Family.jpg" alt="Family">
            <figcaption>Family</figcaption>
          </figure>
          <figure class="slide-group">
            <img src="IMAGES/ball.jpg" alt="Field">
            <figcaption>Field</figcaption>
          </figure>
        </div>
    </section>

    <!-- BLOG SECTION -->
    <section id="blog">
        <h2>Blog</h2>
        <?php
        $result = $conn->query("SELECT * FROM artikel_blog");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<article>";
                echo "<h3>" . htmlspecialchars($row['judul']) . "</h3>";
                echo "<p>" . nl2br(htmlspecialchars($row['isi'])) . "</p>";
                echo "</article>";
            }
        } else {
            echo "<p>Belum ada artikel.</p>";
        }
        ?>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact">
        <h2>Contact</h2>
        <address>
            <p>Email: <a href="mailto:firzazulfiqar026@student.unsrat.ac.id">firzazulfiqar026@student.unsrat.ac.id</a></p>
            <p>Instagram: <a href="https://instagram.com/firzaputraa_" target="_blank">@firzaputraa_</a></p>
        </address>
    </section>

    <script src="script.js"></script>
</body>
</html>
