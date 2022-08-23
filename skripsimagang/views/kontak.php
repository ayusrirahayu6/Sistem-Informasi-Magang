<?php 
session_start();
include "../connect/db_conn.php";
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Sistem Informasi Magang</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <meta property="og:title" content="Kontak - magang" />
    <meta property="og:title" content="Daftar - magang" />
    <meta property="og:title" content="InfoMagang1 - magang" />
    <meta property="og:title" content="Pengumuman - magang" />
    <meta property="og:title" content="Login - magang" />
    <meta property="og:title" content="Kontak1 - magang" />
    <meta property="og:title" content="Pengumuman1 - magang" />
    <meta property="og:title" content="KirimDokumen1 - magang" />
    <meta property="og:title" content="InfoMagang - magang" />
    <meta property="og:title" content="KirimDokumen - magang" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Titillium Web;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-scheme-green100);
        background-color: var(--dl-color-scheme-yellow20);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body>
    <div>
      <link href="../css/kontak.css" rel="stylesheet" />

      <div class="kontak-container">
        <div class="navbar-container">
          <div class="kontak-max-width max-width">
            <div class="kontak-logo">
              <a href="../home.php">
              <span class="brand-Name">
                <span class="kontak-text01">SI -</span>
                <span>MAGANG</span>
              </span>
              </a>
            </div>
            <div class="kontak-links">
              <a href="../home.php" class="kontak-text03 navbar-Link">Beranda</a>
              <a href="info_magang.php" class="kontak-navlink navbar-Link">
                Info Magang
              </a>
              <a href="kontak.php" class="kontak-navlink1 navbar-Link">
                Kontak
              </a>
              <a href="pengumuman.php" class="kontak-navlink2 navbar-Link">
                Pengumuman
              </a>
              <?php
                if(isset($_SESSION['userr']) && !empty($_SESSION['userr'])){
              ?>
              <span><b>|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?= $_SESSION['userr']['inputnama'] ?></b>
              &nbsp&nbsp<i class="fas fa-user"></i></span>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="../process/logout_process.php" class="btn btn-warning btn-sm">Logout</a>
              <?php }else{
              ?>
              <a
                href="login.php"
                class="kontak-navlink3 button-secondary button"
              >
                Log In
              </a>
              <a
                href="daftar.php"
                class="kontak-navlink4 button button-primary"
              >
                Daftar
              </a>
              <?php } ?>
            </div>
            <div class="kontak-burger-menu navbar-burger-menu">
              <svg viewBox="0 0 1024 1024" class="kontak-icon">
                <path
                  d="M128 256h768v86h-768v-86zM128 554v-84h768v84h-768zM128 768v-86h768v86h-768z"
                ></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="kontak-features">
          <h1 class="kontak-text04">
            <span>Kontak Bagian dan Cabang Perusahaan</span>
          </h1>
          <div class="kontak-container1">
            <div
              class="feature-card11-feature-card feature-card11-root-class-name"
            >
              <h2 class="feature-card11-text">
                <span>Bagian Kepegawaian</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 554326</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name1"
            >
              <h2 class="feature-card11-text">
                <span>Bagian Administrasi</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 554336</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name2"
            >
              <h2 class="feature-card11-text">
                <span>Bagian Teknologi Informasi</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 554386</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name3"
            >
              <h2 class="feature-card11-text">
                <span>Bagian Adm & Keuangan</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 554776</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name7"
            >
              <h2 class="feature-card11-text">
                <span>Bagian Kasubag & Pemasaran</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 554896</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name6"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Cabang Indramayu</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 271576</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name5"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Cabang Sindang</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 277654</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name4"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Cabang Lohhbener</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 276930</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name8"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Cabang Jatinyuat</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. 087717926643</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name19"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Cabang Kedokan Bunder</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. 08112425471</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name18"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Cabang Jatibarang</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 351491</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name17"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Cabang Kandanghaur</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 505423</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name16"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Cabang Patrol</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 610338</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name15"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Unit Bangodua</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 356400</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name14"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Unit Losarang</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 505394</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name13"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Unit Gabus Wetan</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 505816</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name12"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Unit Jatisawit</span>
              </h2>
              <span class="feature-card11-text1">
                <span>Telp. (0234) 352673</span>
              </span>
            </div>
            <div
              class="feature-card11-feature-card feature-card11-root-class-name11"
            >
              <h2 class="feature-card11-text">
                <span>Perumdam Unit Arahan</span>
              </h2>
              <span class="feature-card11-text1"><span>Telp. -</span></span>
            </div>
          </div>
        </div>
        <footer class="kontak-footer">
          <span class="brand-Name">
            <span class="kontak-text07">SI -</span>
            <span>MAGANG</span>
          </span>
          <span class="kontak-text09">
            © 2020 SIMAGANG All Rights Reserved.
          </span>
          <div class="kontak-icon-group">
            <a
              href="https://www.facebook.com/perumdamtdaindramayu"
              target="_blank"
              rel="noreferrer noopener"
              class="kontak-link"
            >
              <svg viewBox="0 0 602.2582857142856 1024" class="kontak-icon2">
                <path
                  d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                ></path>
              </svg>
            </a>
          </div>
        </footer>
      </div>
    </div>
    <script>
      window.onload = () => {
        const runAllScripts = () => {
          initializeAllAccordions()
        }

        const listenForUrlChanges = () => {
          let url = location.href
          document.body.addEventListener(
            'click',
            () => {
              requestAnimationFrame(() => {
                if (url !== location.href) {
                  runAllScripts()
                  url = location.href
                }
              })
            },
            true
          )
        }

        const initializeAllAccordions = () => {
          const allAccordions = document.querySelectorAll('[data-role="Accordion"]');

          allAccordions.forEach((accordion) => {
            const accordionHeader = accordion.querySelector('[data-type="accordion-header"]')
            const accordionContent = accordion.querySelector('[data-type="accordion-content"]')

            accordionHeader.addEventListener('click', () => {
              if (accordionContent.style.maxHeight) {
                accordionContent.style.maxHeight = ''
              } else {
                accordionContent.style.maxHeight = `${accordionContent.scrollHeight}px`
              }
            })
          })
        }

        listenForUrlChanges()
        runAllScripts()
      }
    </script>
  </body>
</html>
