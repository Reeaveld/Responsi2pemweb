<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sejarah</title>
    <link rel="stylesheet" href="./src/sejarah-arc.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar Section -->
    <?php 
      include '../template/navbar.php';
    ?>

    <!-- Alur Section -->
    <div class="alur" id="alur">
      <div class="alur__container">
        <div class="alur__content">
          <a href="sejarah.php">← Sejarah</a>
          <h1>Entertainment District Arc</h1>
          <img src="./img/sejarah/9.jpeg" alt="Alur cerita" width="994.4" height="559.9"/>
          <p>Kali ini Trio Utama seri ini mendapatkan misi untuk pergi ke Distrik Lampu Merah dimana mereka harus menyamar di rumah bordil untuk menemukan iblis yang mendatangkan malapetaka di kota tersebut.
            <br><br>
            Di arc ini kalian diperkenalkan dengan Sound Hashira Tengen Uzui dan ketiga istrinya. Arc ini memiliki beberapa pertarungan terbaik dalam seri dan memperkenalkan Iblis Tingkat Atas Daki dan Gyutaro. Di arc ini kalian bisa melihat perubahan pada Nezuko yang bertransformasi menjadi aneh dan lebih kuat hingga dapat melawan Daki, meskipun dia hampir kehilangan kesadarannya sebagai manusia.
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