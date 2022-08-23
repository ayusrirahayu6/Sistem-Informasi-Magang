<?php 
session_start();
include "../connect/db_conn.php";
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Login - magang</title>
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
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>

    <div>
      <link href="../login_css.css" rel="stylesheet" />

      <div class="login-container">
        <div class="navbar-container">
          <div class="login-max-width max-width">
            <a href="../home.php">
            <div class="login-logo">
              <span class="brand-Name">
                <span class="login-text01">SI -</span>
                <span>MAGANG</span>
              </span>
            </div>
            </a>
            <div class="login-links">
              <a href="../home.php" class="login-text03 navbar-Link">Beranda</a>
              <a href="info_magang.php" class="login-navlink navbar-Link">
                Info Magang
              </a>
              <a href="kontak.php" class="login-navlink1 navbar-Link">
                Kontak
              </a>
              <a href="pengumuman.php" class="login-navlink2 navbar-Link">
                Pengumuman
              </a>
              <a
                href="login.php"
                class="login-navlink3 button-secondary button"
              >
                Log In
              </a>
              <a
                href="daftar.php"
                class="login-navlink4 button button-primary"
              >
                Daftar
              </a>
            </div>
            <div class="login-burger-menu navbar-burger-menu">
              <svg viewBox="0 0 1024 1024" class="login-icon">
                <path
                  d="M128 256h768v86h-768v-86zM128 554v-84h768v84h-768zM128 768v-86h768v86h-768z"
                ></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="login-banner">
          <span class="login-text04">
            <span class="login-text05">sistem informasi magang</span>
          </span>
          <h1 class="login-text06">Silahkan Login jika sudah memiliki akun</h1>
          <form action="../process/login_process.php" method="post" enctype='multipart/form-data'>
            <div class="login-container1">
            <table>
              <tr>
                <td></td>
                <td>
                    <input type="email" id="inputemail" name="inputemail" required placeholder="Email" class="login-textinput input">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="password" id="inputkatasandi" name="inputkatasandi" required maxlength="20" minlength="8" placeholder="Kata Sandi" class="login-textinput1 input">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <button type="submit" class="login-navlink5 button" >Login</button>
                </td>
            </tr>
          </table></div>
        </form>
        </div>
        <footer class="login-footer">
          <span class="brand-Name">
            <span class="login-text08">SI -</span>
            <span>MAGANG</span>
          </span>
          <span class="login-text10">© 2020 SIMAGANG All Rights Reserved.</span>
          <div class="login-icon-group">
            <a
              href="https://www.facebook.com/perumdamtdaindramayu/"
              target="_blank"
              rel="noreferrer noopener"
              class="login-link"
            >
              <svg viewBox="0 0 602.2582857142856 1024" class="login-icon2">
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
