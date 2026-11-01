<?php
require_once('controller/data_cv.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $cv['nama'] ?> - Portofolio</title>
    <meta name="description" content="Portofolio <?= $cv['nama'] ?>, pemula web front-end dan mahasiswa Sistem Komputer ITB STIKOM Bali.">
    <meta name="color-scheme" content="light dark">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' fill='%232b3f9e'/%3E%3Ctext x='32' y='43' font-family='Arial,sans-serif' font-size='30' font-weight='700' fill='white' text-anchor='middle'%3ETP%3C/text%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <a class="skip-link" href="#konten">Langsung ke konten</a>

    <header class="site-header">
        <div class="container header-inner">
            <a class="logo" href="#hero"><?= $cv['nama'] ?></a>
            <nav aria-label="Navigasi utama">
                <ul>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#pendidikan">Pendidikan</a></li>
                    <li><a href="#skills">Keahlian</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="konten">
        <section id="hero">
            <div class="container hero-grid">
                <figure class="photo">
                    <img src="public/assets/img/foto-profil.jpg" alt="Foto <?= $cv['nama'] ?>" width="700" height="700">
                </figure>
                <div class="hero-text">
                    <h1>Data Diri</h1>
                    <ul class="rows data-diri">
                        <li><h3>Nama</h3><p><?= $cv['nama_lengkap'] ?></p></li>
                        <li><h3>Tempat/Tanggal Lahir</h3><p><?= $cv['tempat_lahir'] ?>, <?= $cv['tgl_lahir'] ?></p></li>
                        <li><h3>Alamat</h3><p><?= $cv['alamat'] ?></p></li>
                        <li><h3>No. Telepon</h3><p><?= $cv['hp'] ?></p></li>
                        <li><h3>Email</h3><p><?= $cv['email'] ?></p></li>
                    </ul>
                    <div class="actions">
                        <a href="#contact" class="btn btn-primary">Hubungi saya</a>
                        <a href="#skills" class="btn btn-ghost">Lihat keahlian</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container split">
                <h2>Tentang Saya</h2>
                <div class="prose">
                    <p>Saya lahir di <?= $cv['tempat_lahir'] ?>, <?= $cv['tgl_lahir_angka'] ?>, dan tinggal di <?= $cv['kota_tinggal'] ?>.</p>
                    <p>Saya memiliki cita cita menjadi <?= $cv['cita_cita'] ?> dan memiliki hobi <?= $cv['hobi'] ?>.</p>
                </div>
            </div>
        </section>

        <section id="pendidikan">
            <div class="container split">
                <h2>Riwayat Pendidikan</h2>
                <ul class="rows">
                    <?php foreach ($cv['pendidikan'] as $jenjang => $sekolah) : ?>
                        <li><h3><?= $jenjang ?></h3><p><?= $sekolah ?>.</p></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section id="skills">
            <div class="container split">
                <h2>Keahlian</h2>
                <ul class="rows">
                    <?php foreach ($cv['keahlian'] as $skill => $isi) : ?>
                        <li><h3><?= $skill ?></h3><p><?= $isi ?></p></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section id="contact">
            <div class="container split">
                <h2>Kontak Saya</h2>
                <div>
                    <p class="prose-intro">Hubungi saya lewat salah satu kontak di bawah.</p>
                    <ul class="rows">
                        <li><h3>Email</h3><p><a href="mailto:<?= $cv['email'] ?>"><?= $cv['email'] ?></a></p></li>
                        <li><h3>LinkedIn</h3><p><a href="https://www.<?= $cv['linkedin'] ?>" target="_blank" rel="noopener"><?= $cv['linkedin'] ?></a></p></li>
                        <li><h3>GitHub</h3><p><a href="https://<?= $cv['github'] ?>" target="_blank" rel="noopener"><?= $cv['github'] ?></a></p></li>
                        <li><h3>Telepon</h3><p><a href="tel:<?= $cv['hp_link'] ?>"><?= $cv['hp_spasi'] ?></a></p></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; <?= $cv['tahun'] ?> <?= $cv['nama'] ?>.</p>
        </div>
    </footer>

    <script src="public/assets/js/script.js"></script>
</body>
</html>
