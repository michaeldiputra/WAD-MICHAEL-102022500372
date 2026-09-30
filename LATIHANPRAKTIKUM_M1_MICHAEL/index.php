<?php
$name = "Michael Ray Diputra";
$nim = "102022500372";
$program = "S1 Sistem Informasi";
$faculty = "Rekayasa Industri";
$entryYear = "2025";
$university = "Telkom University Bandung";
$about = "Saya tertarik belajar teknologi baru dan selalu berusaha menjadi lebih baik.";
$createdAt = "2026-09-27T22:09:23+07:00";
$createdAtText = "Sunday, September 27, 2026 at 10:09:23 PM";
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Profil singkat mahasiswa dan tautan media sosial." />
    <title>Personal Web</title>
    <link rel="icon" href="src/favicon.ico" />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <main class="profile">
      <header class="profile-header">
        <img class="profile-img" src="src/20260304_151713.jpg" alt="Foto profil <?php echo $name; ?>" />
        <h3 class="subtitle"><?php echo $nim; ?></h3>
        <h1><?php echo $name; ?></h1>
        <p class="subtitle"><?php echo $program; ?> · Fakultas <?php echo $faculty; ?></p>
      </header>

      <div class="about">
        <h2 id="about-title">Tentang Saya</h2>
        <p>
          Halo! Saya mahasiswa <strong>Program Studi <?php echo $program; ?></strong>. <?php echo $about; ?>
        </p>
      </div>

      <div class="social">
        <h4 id="social-title">Temukan Saya</h4>
        <nav class="social-links">
          <a href="https://github.com/michaeldiputra" target="_blank">GitHub</a>
          <a href="https://www.instagram.com/michael_257raydi" target="_blank">Instagram</a>
          <a href="https://www.linkedin.com/in/michaeldiputra" target="_blank">LinkedIn</a>
        </nav>
      </div>

      <div class="details">
        <h5 id="details-title">Data Akademik</h5>
        <table aria-labelledby="details-title">
          <tbody>
            <tr>
              <th scope="row">Nama</th>
              <td><?php echo $name; ?></td>
            </tr>
            <tr>
              <th scope="row">NIM</th>
              <td><?php echo $nim; ?></td>
            </tr>
            <tr>
              <th scope="row">Program Studi</th>
              <td><?php echo $program; ?></td>
            </tr>
            <tr>
              <th scope="row">Fakultas</th>
              <td><?php echo $faculty; ?></td>
            </tr>
            <tr>
              <th scope="row">Angkatan</th>
              <td><?php echo $entryYear; ?></td>
            </tr>
            <tr>
              <th scope="row">Universitas</th>
              <td><?php echo $university; ?></td>
            </tr>
          </tbody>
        </table>
        <p class="created">
          Created by
          <time datetime="<?php echo $createdAt; ?>"><?php echo $createdAtText; ?></time>
        </p>
      </div>

      <footer>
        <h6>Terima kasih sudah berkunjung.</h6>
      </footer>
    </main>
  </body>
</html>
