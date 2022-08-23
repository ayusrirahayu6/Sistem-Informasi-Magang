<?php 

session_start();
include "connect/db_conn.php";
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
    <meta property="og:title" content="magang" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Home1 - magang" />
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
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <div>
      <link href="./home.css" rel="stylesheet" />

      <div class="home-container">
        <div class="navbar-container">
          <div class="home-max-width max-width">
            <a href="home.php">
            <div class="home-logo">
              <span class="brand-Name">
                <span class="home-text01">SI -</span>
                <span>MAGANG</span>
              </span>
            </div>
              </a>
            <div class="home-links">
              <a href="home.php" class="home-text03 navbar-Link">Beranda</a>
              <a href="views/info_magang.php" class="home-navlink navbar-Link">
                Info Magang
              </a>
              <a href="views/kontak.php" class="home-navlink1 navbar-Link">Kontak</a>
              <a href="views/pengumuman.php" class="home-navlink2 navbar-Link">
                Pengumuman
              </a>
              <?php
                if(isset($_SESSION['userr']) && !empty($_SESSION['userr'])){
              ?>
              <span><b>|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?= $_SESSION['userr']['inputnama'] ?></b>
              &nbsp&nbsp<i class="fas fa-user"></i></span>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="process/logout_process.php" class="btn btn-warning btn-sm">Logout</a>
              <?php }else{
              ?>
              <a href="views/login.php" class="home-navlink3 button-secondary button" >
                <span>Log In</span>
                <span></span>
              </a>
              <a href="views/daftar.php" class="home-navlink4 button button-primary">
                Daftar
              </a>
              <?php } ?>
            </div>
            <div class="home-burger-menu navbar-burger-menu">
              <svg viewBox="0 0 1024 1024" class="home-icon">
                <path
                  d="M128 256h768v86h-768v-86zM128 554v-84h768v84h-768zM128 768v-86h768v86h-768z"
                ></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="home-hero">
          <h1 class="home-text06">SISTEM INFORMASI MAGANG</h1>
          <span class="home-text07">
            <span>
              PERUMDAM Tirta Darma Ayu Merupakan Perusahaan Umum Darah Air Minum
              Milik Negara
            </span>
            <br />
            <span>
              Perusahaan Mewadahi Setiap SDM untuk Belajar dan Mendapatkan Ilmu
              Khususnya di Perusahaan
            </span>
            <br />
            <span>untuk Melaksanakan Magang</span>
          </span>
          
          <?php
            if(isset($_SESSION['userr']) && empty($_SESSION['userr'])){
          ?>
          <div class="home-btn-group">
            <a href="views/daftar.php" class="home-navlink5 button">Daftar</a>
            <a href="views/login.php" class="home-navlink6 button">login</a>
          </div>
          <?php } ?>
        </div>
        <div class="home-section section-container">
          <div class="home-max-width1 max-width">
            <div class="home-image">
              <img
                alt="image"
                src="https://images.unsplash.com/photo-1611175694989-4870fafa4494?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDMxfHx1cGxvYWR8ZW58MHx8fHwxNjUwMDkwNjQz&amp;ixlib=rb-1.2.1&amp;w=1200"
                class="home-hero-image"
              />
            </div>
            <div class="home-content">
              <span class="home-text13 before-Heading">UNDUH DOKUMEN</span>
              <h1 class="home-text14">
                <span class="home-text15">
                  SILAHKAN UNDUH TEMPLATE DOKUMEN MAGANG
                </span>
              </h1>
              <span class="home-text16">
                Sebelum kamu mengirim dokumen magang, silahkan sesuaikan dokumen
                tersebut dengan template yang sudah kami tentukan
              </span>
              <div class="home-container01">
                <a href="process/download_docmg.php" class="home-navlink7 button-secondary button bg-transparent">
                  UNDUH DOKUMEN
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="home-section1 section-container">
          <div class="home-max-width2 max-width">
            <div class="home-content1">
              <span class="home-text17 before-Heading">
                KIRIM DOKUMEN MAGANG
              </span>
              <h1 class="home-text18">
                <span class="home-text19">
                  SILAHKAN KIRIM DOKUMEN MAGANG MU DI SINI
                </span>
              </h1>
              <span class="home-text20">
                Ketentuan dokumen magang dapat disesuaikan dengan template yang
                sudah ada, silahkan upload delam bentuk pdf.
              </span>
              <div class="home-container02">
                <a
                  href="views/info_magang.php"
                  class="home-navlink7 button-secondary button bg-transparent"
                >
                  KIRIM DOKUMEN
                </a>
              </div>
            </div>
            <div class="home-image1">
              <img
                alt="image"
                src="https://images.unsplash.com/photo-1586880244406-556ebe35f282?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDY3fHxjb21wdXRlcnxlbnwwfHx8fDE2NTAwOTA5MjQ&amp;ixlib=rb-1.2.1&amp;w=1200"
                class="home-hero-image1"
              />
            </div>
          </div>
        </div>
        <div class="home-section2 section-container">
          <div class="home-max-width3 max-width">
            <div class="home-image2">
              <img
                alt="image"
                src="public/playground_assets/jc-gellidon-fnc3yctccoi-unsplash%2014%20%5B1%5D-1200w.png"
                class="home-hero-image2"
              />
            </div>
            <div class="home-content2">
              <span class="home-text21 before-Heading">get started</span>
              <h1 class="home-text22">BAGAIMANA ALUR KIRIM DOKUMEN MAGANG ?</h1>
              <div class="home-step">
                <div class="home-number">
                  <span class="home-text23">1</span>
                </div>
                <div class="home-container03">
                  <span class="home-title">Daftar atau Log In</span>
                  <span class="home-text24">
                    Jika kamu sudah memiliki aku di website ini silahkan login,
                    namun jika kamu belum memiliki akun silahkan daftar terlebih
                    dahulu, gunakan email yang aktif ya!
                  </span>
                </div>
              </div>
              <div class="home-step1">
                <div class="home-number1">
                  <span class="home-text25">2</span>
                </div>
                <div class="home-container04">
                  <span class="home-title1">Kirim Dokumen</span>
                  <span class="home-text26">
                    Silahkan Kirim Dokuemn, sesuai dengan template dokumen yang
                    dapat kamu unduh sebelumnya.
                  </span>
                </div>
              </div>
              <div class="home-step2">
                <div class="home-number2">
                  <span class="home-text27">3</span>
                </div>
                <div class="home-container05">
                  <span class="home-title2">Cek Email</span>
                  <span class="home-text28">
                    Jika sudah mengirimkan dokumen, tunggu notifikasi dari pihak
                    perusahaan terkait dokumen yang telah kamu kirim di email
                    yang sudah kamu daftarkan !
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-container">
          <div class="home-max-width4 max-width">
            <span class="home-text29 before-Heading">get started</span>
            <h1 class="home-text30">SESUAIKAN MAGANG DENGAN JURUSANMU</h1>
            <div class="home-cards-container">
              <div class="card-card card-root-class-name2">
                <div class="card-info">
                  <span class="card-text"><span>Teknik/SI/TI</span></span>
                  <span class="card-text1">
                    <span>
                      jika jurusanmu smk tkj, smk rpl, TI, SI dan teknik
                      lainnya, kamu bisa daftar di bagian TI/Keuangan
                      database/Jaringan
                    </span>
                  </span>
                </div>
              </div>
              <div class="card-card card-root-class-name">
                <div class="card-info">
                  <span class="card-text">
                    <span>Akutansi, Perhotelan, Pemasaran</span>
                  </span>
                  <span class="card-text1">
                    <span>
                      Jika jurusanmu akuntansi, perhotelan, pemasaran dan
                      lainnya, kamu bisa daftar di keuangan, bag pemasaran,
                      kepegawaian.
                    </span>
                  </span>
                </div>
              </div>
              <div class="card-card card-root-class-name1">
                <div class="card-info">
                  <span class="card-text">
                    <span>Sekertaris, Manajemen, Ekonomi</span>
                  </span>
                  <span class="card-text1">
                    <span>
                      Jika jurusanmu terkait kesekertariatan, manajemn, dan
                      ekonomi, kamu bisa daftar di bag administrasi, personalia.
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="home-section4 section-container">
          <div class="home-max-width5 max-width">
            <div class="home-f-a-q">
              <div class="home-questions">
                <span class="home-text31 before-Heading">faq</span>
                <h1 class="home-text32">
                  <span class="home-text33">Frequently Asked</span>
                  <br />
                  <span class="home-text35">Questions</span>
                </h1>
                <div data-role="Accordion" class="home-question question">
                  <div data-type="accordion-header" class="home-trigger">
                    <span class="home-text36">
                      Bagaimana peserta mendapatkan notifikasi?
                    </span>
                    <svg viewBox="0 0 1024 1024" class="home-icon02">
                      <path
                        d="M810 554h-256v256h-84v-256h-256v-84h256v-256h84v256h256v84z"
                      ></path>
                    </svg>
                  </div>
                  <div data-type="accordion-content" class="question-content">
                    <span class="home-text37">
                      Amet minim mollit non deserunt ullamco est sit aliqua
                      dolor do amet sint. Velit officia consequat duis enim
                      velit mollit.
                    </span>
                  </div>
                </div>
                <div data-role="Accordion" class="question">
                  <div data-type="accordion-header" class="home-trigger1">
                    <span class="home-text38">
                      Berapa lama notifikasi keputusan di kirim?
                    </span>
                    <svg viewBox="0 0 1024 1024" class="home-icon04">
                      <path
                        d="M810 554h-256v256h-84v-256h-256v-84h256v-256h84v256h256v84z"
                      ></path>
                    </svg>
                  </div>
                  <div data-type="accordion-content" class="question-content">
                    <span class="home-text39">
                      Amet minim mollit non deserunt ullamco est sit aliqua
                      dolor do amet sint. Velit officia consequat duis enim
                      velit mollit.
                    </span>
                  </div>
                </div>
                <div data-role="Accordion" class="question">
                  <div data-type="accordion-header" class="home-trigger2">
                    <span class="home-text40">
                      Apakah peserta magang pasti di terima?
                    </span>
                    <svg viewBox="0 0 1024 1024" class="home-icon06">
                      <path
                        d="M810 554h-256v256h-84v-256h-256v-84h256v-256h84v256h256v84z"
                      ></path>
                    </svg>
                  </div>
                  <div data-type="accordion-content" class="question-content">
                    <span class="home-text41">
                      Amet minim mollit non deserunt ullamco est sit aliqua
                      dolor do amet sint. Velit officia consequat duis enim
                      velit mollit.
                    </span>
                  </div>
                </div>
                <div data-role="Accordion" class="question">
                  <div data-type="accordion-header" class="home-trigger3">
                    <span class="home-text42">
                      Apa saja guna sistem informasi magang ini?
                    </span>
                    <svg viewBox="0 0 1024 1024" class="home-icon08">
                      <path
                        d="M810 554h-256v256h-84v-256h-256v-84h256v-256h84v256h256v84z"
                      ></path>
                    </svg>
                  </div>
                  <div data-type="accordion-content" class="question-content">
                    <span class="home-text43">
                      Amet minim mollit non deserunt ullamco est sit aliqua
                      dolor do amet sint. Velit officia consequat duis enim
                      velit mollit.
                    </span>
                  </div>
                </div>
              </div>
              <img
                alt="image"
                src="public/playground_assets/group%202-1200w.png"
                class="home-image3"
              />
            </div>
            <div class="home-banner">
              <span class="home-text44 before-Heading">
                Sistem informasi magang
              </span>
              <h1 class="home-text45">
                <span>Kunjungi Website Resmi Lainnya dari</span>
                <br />
                <span>PERUMDAM Tirta Darma Ayu</span>
              </h1>
              <span class="home-text49">
                <span>
                  Kunjungi website resmi lainnya untuk mendapatkan informasi
                  lainnya dari
                </span>
                <br />
                <span>PERUMDAM Tirta Darma Ayu</span>
              </span>
              <div class="home-btns">
                <a
                  href="https://www.pdamindramayu.co.id/informasi"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link button button-transparent"
                >
                  Website Resmi
                </a>
                <a
                  href="https://play.google.com/store/apps/details?id=com.infopelanggan.pdamtda&amp;hl=en&amp;gl=US"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link01 button button-gradient"
                >
                  Aplikasi Resmi
                </a>
              </div>
            </div>
          </div>
        </div>
        <footer class="home-footer">
          <div class="home-links-container">
            <div class="home-container06">
              <div class="footer-column">
                <span class="home-text53">Bagian</span>
                <span class="home-text54">Administrasi Umum &amp; Program</span>
                <span class="home-text55">
                  Bagian Penjualan, Pelayanan &amp; Penagihan
                </span>
                <span class="home-text56">Bagian Operasional</span>
                <span class="home-text57">Bagian Personalia</span>
                <span>Bagian Keuangan &amp; TI</span>
              </div>
              <div class="footer-column">
                <span class="home-text59">App</span>
                <a
                  href="https://play.google.com/store/apps/details?id=com.pdamtda.simpeg&amp;hl=in&amp;gl=US"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link02"
                >
                  SIMPEG
                </a>
                <a
                  href="https://play.google.com/store/apps/details?id=com.infopelanggan.pdamtda&amp;hl=en&amp;gl=US"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link03"
                >
                  Info Pelanggan
                </a>
              </div>
              <div class="footer-column">
                <span class="home-text60">Company</span>
                <a
                  href="https://www.pdamindramayu.co.id/tentang-kami"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link04"
                >
                  Tentang Kami
                </a>
                <span class="home-text61">Budaya Kerja</span>
                <a
                  href="https://www.pdamindramayu.co.id/karir"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link05"
                >
                  Karir
                </a>
                <a
                  href="https://www.pdamindramayu.co.id/informasi"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link06"
                >
                  Berita
                </a>
                <a
                  href="https://www.pdamindramayu.co.id/kontak"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link07"
                >
                  Kontak
                </a>
              </div>
              <div class="footer-column">
                <span class="home-text62">Security</span>
                <a
                  href="https://www.google.com/maps/dir/-6.5337796,107.444037/-6.3451063,108.323725/@-6.496363,107.3240246,9z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link08"
                >
                  Alamat (Maps)
                </a>
                <span>Pusat Bantuan</span>
              </div>
              <div class="footer-column">
                <span class="home-text64">Follow</span>
                <a
                  href="https://www.pdamindramayu.co.id/tentang-kami"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link09"
                >
                  Website
                </a>
                <a
                  href="https://www.facebook.com/perumdamtdaindramayu/"
                  target="_blank"
                  rel="noreferrer noopener"
                  class="home-link10"
                >
                  Facebook
                </a>
              </div>
            </div>
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
