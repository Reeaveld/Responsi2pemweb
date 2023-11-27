<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sejarah</title>
    <link rel="stylesheet" href="src/sejarah.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a id="navbar__logo">Demon Ward</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="index.html" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <p class="navbar__links" id="sejarah-page">Sejarah</p>
          </li>
          <li class="navbar__item">
            <a href="karakter.html" class="navbar__links" id="karakter-page">Karakter</a>
          </li>
          <li class="navbar__item">
            <a href="artikel.html" class="navbar__links" id="artikel-page">Artikel</a>
          </li>
          </li>
          <li class="navbar__btn">
            <a href="login.html" class="button" id="logout">Keluar</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Alur Section -->
    <div class="alur" id="alur">
      <div class="alur__container">
        <div class="alur__content">
          <a href="sejarah.html">← Sejarah</a>
          <h1>Mount Natagumo Arc</h1>
          <img src="./img/sejarah/5.png" alt="Alur cerita" width="994.4" height="559.9"/>
          <p>Kali ini Tanjiro, Zenitsu, Inosuke mendaki Gunung Natagumo dalam misi kelompok pertama mereka untuk mengalahkan keluarga laba-laba iblis yang mengerikan. Setelah melakukan misi berbahaya melawan mantan anggota 12 Kizuki, Tanjiro, Zenitsu dan Inosuke akhirnya bertemu dengan anggota 12 Kizuki pertama bernama Rui. Rui adalah iblis tingkat atas pertama yang diperkenalkan dalam cerita. 
            <br><br>
            Saat arc ini berjalan, Rui adalah iblis terkuat yang pernah ditemui oleh Tanjiro.
            Selain memperkenalkan anggota 12 Kizuki dan kekuatan yang mereka punya, arc ini juga mengungkap bahwa Tanjiro dapat menggunakan pernafasan matahari alias Hinokami Kagura. Dalam arc ini juga kita juga bertemu dengan dua orang hashira atau pilar pemburu iblis, Giyu Tomioka dan juga Shinobi, hashira dengan pernafasan serangga.
          </p>
      </div>
    </div>
  </div>
      

    <!--Footer Section -->
    <div class="footer__container">
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <img src="./img/register_login/logo.png" alt="Demon Slayer" width="57" height="53"/>
          </div>
          <p class="website__rights">Copyright @2023 Demon Ward</p>
        </div>
      </section>
    </div>

  <script src="index.js"></script>
  <script>
    document.getElementById('sejarah-page').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
</body>
</html>