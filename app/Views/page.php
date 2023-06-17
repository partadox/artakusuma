<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arta Kusuma - Personal Website</title>
    <meta name="description" content="Arta Kusuma - Programer Freelance - Programmer Kota Palu Sulawesi Tengah. ".<?= $title ?> >

    <!--
    - favicon
  -->
    <link
      rel="shortcut icon"
      href="public/assets/images/new-moon-face.svg"
      type="image/x-icon"
    />

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="public/assets/css/style.css" />

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!--
    - #MAIN
  -->

    <main>
      <!--
      - #SIDEBAR
    -->

      <aside class="sidebar" data-sidebar>
        <div class="sidebar-info">
          <figure class="avatar-box">
            <img
              src="public/assets/images/new-moon-face.svg"
              alt="Arta Kusuma"
              width="80"
            />
          </figure>

          <div class="info-content">
            <h1 class="name" title="Arta Kusuma">Arta Kusuma H.</h1>

            <p class="title">Software Engineer</p>
          </div>

          <button class="info_more-btn" data-sidebar-btn>
            <span>Show Contacts</span>

            <ion-icon name="chevron-down"></ion-icon>
          </button>
        </div>

        <div class="sidebar-info_more">
          <div class="separator"></div>

          <ul class="contacts-list">
            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Email</p>

                <a href="mailto:artakusuma@hotmail.com" class="contact-link"
                  >artakusuma@hotmail.com</a
                >
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="man-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Age</p>
                    <?php
                        $birthDate = "11-7-1996";
                        $birthDate = explode("-", $birthDate);

                        //get age from date or birthdate
                        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                            ? ((date("Y") - $birthDate[2]) - 1)
                            : (date("Y") - $birthDate[2]));
                        echo "<time>". $age . "</time>";
                    ?>
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Domicile</p>

                <address>
                  Palu, Central Sulawesi or <br />
                  Surabya, East Java
                </address>
              </div>
            </li>
          </ul>

          <div class="separator"></div>

          <ul class="social-list">
            <li class="social-item">
              <a href="https://www.instagram.com/arta.kusumah/" target="_blank" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li class="social-item">
              <a href="https://www.linkedin.com/in/arta-kusuma/" target="_blank" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li class="social-item">
              <a href="https://www.youtube.com/channel/UCIlILlIlLsBQyi00dl87fpg" target="_blank" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

            <li class="social-item">
              <a href="https://github.com/partadox" target="_blank" class="social-link">
                <ion-icon name="logo-github"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </aside>

      <!--
      - #main-content
    -->

      <div class="main-content">
        <!--
        - #NAVBAR
      -->

        <nav class="navbar">
          <ul class="navbar-list">
            <li class="navbar-item">
              <a type="button" href="javascript:history.back()" class="navbar-link" style="display: flex; align-items: center;" data-nav-link> <ion-icon name="rocket-outline" style="margin-right: 5px;"></ion-icon>Back</a>
            </li>
          </ul>
        </nav>

        <!--
        - #Page
      -->

        <article class="about active" data-page="about">
          <header>
            <h2 style="padding-right: 100px;" class="h2 article-title"><?= $title ?></h2>
          </header>

          <section class="about-text">
            <?php if ($page == "portfolio"): ?>
              <?= $porto['content'] ?>
            <?php endif; ?>
            <?php if ($page == "blog"): ?>
                <?= $blog['content'] ?>
            <?php endif; ?>
          </section>
        </article>
      </div>
    </main>

    <!--
    - custom js link
  -->
    <script src="public/assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
