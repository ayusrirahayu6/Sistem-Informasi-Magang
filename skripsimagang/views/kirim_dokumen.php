<?php 

session_start();
include "../connect/db_conn.php";

if (isset($_SESSION['userr'])) {

 ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <title>KirimDokumen - magang</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
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
      <link href="../kirim-dokumen.css" rel="stylesheet" />

      <div class="kirim-dokumen-container">
        <div class="navbar-container">
          <div class="kirim-dokumen-max-width max-width">
            <a href="../home.php">
            <div class="kirim-dokumen-logo">
              <span class="brand-Name">
                <span class="kirim-dokumen-text1">SI -</span>
                <span>MAGANG</span>
              </span>
            </div>
            </a>
            <div class="kirim-dokumen-links">
              <a href="../home.php" class="kirim-dokumen-text3 navbar-Link">
                Beranda
              </a>
              <a
                href="info_magang.php"
                class="kirim-dokumen-navlink navbar-Link"
              >
                Info Magang
              </a>
              <a href="kontak.php" class="kirim-dokumen-navlink1 navbar-Link">
                Kontak
              </a>
              <a
                href="pengumuman.php"
                class="kirim-dokumen-navlink2 navbar-Link"
              >
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
                class="kirim-dokumen-navlink3 button-secondary button"
              >
                Log In
              </a>
              <a
                href="daftar.php"
                class="kirim-dokumen-navlink4 button button-primary"
              >
                Daftar
              </a>
              <?php } ?>
            </div>
            <div class="kirim-dokumen-burger-menu navbar-burger-menu">
              <svg viewBox="0 0 1024 1024" class="kirim-dokumen-icon">
                <path
                  d="M128 256h768v86h-768v-86zM128 554v-84h768v84h-768zM128 768v-86h768v86h-768z"
                ></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="kirim-dokumen-banner">
          <span class="kirim-dokumen-text4">
            <span class="kirim-dokumen-text5">sistem informasi magang</span>
          </span>
          <form action="../process/upload_docmg.php"  enctype="multipart/form-data" method="post">
          <div class="kirim-dokumen-container1">
            <input
              type="text"
              id="inputnama"
              name="inputnama"
              readonly
              value="<?= $_SESSION['userr']['inputnama']; ?>"
              required
              placeholder="Nama Lengkap / Nama Perwakilan"
              class="kirim-dokumen-textinput input"
            />
            <input
              type="email"
              id="inputemail"
              name="inputemail"
              readonly
              value="<?= $_SESSION['userr']['inputemail']; ?>"
              required
              maxlength="20"
              minlength="8"
              placeholder="Email"
              class="kirim-dokumen-textinput1 input"
            />
            <input
              type="text"
              id="inputasalsekolah"
              name="inputasalsekolah"
              readonly
              value="<?= $_SESSION['userr']['inputasalsekolah']; ?>"
              required
              maxlength="20"
              minlength="8"
              placeholder="Asal Sekolah"
              class="kirim-dokumen-textinput2 input"
            />
            <input
              type="file"
              id="inputfile"
              name="inputfile"
              required
              placeholder="Kirim Dokumen"
              class="kirim-dokumen-textinput3 input"
            />
            <button id="kirimdoc" name="kirimdoc" value="<?= $_GET['id']?>" class="kirim-dokumen-navlink5 button"> Kirim Dokumen </button>
          </div>
            </form>
        </div>
        <div class="kirim-dokumen-social-bar">
          <span id="footerdaftar" class="kirim-dokumen-text7">
            PERUMDAM Tirta Darma Ayu
          </span>
        </div>
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
<?php 
}else{
    echo "<script> alert('Silahkan Melakukan Login Terlebih dahulu! ')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../views/login.php'>";
}
 ?>
