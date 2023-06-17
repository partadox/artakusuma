<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arta Kusuma - Personal Website</title>

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
              alt="Arta Kusuma - Freelance Web Developer - Programmer Kota Palu Sulawesi Tengah"
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
                title="Freelance Programmer Kota Palu" >artakusuma@hotmail.com</a
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
                  Palu, Central Sulawesi and <br />
                  Surabaya, East Java
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

            <li class="social-item">
              <a href="https://play.google.com/store/apps/dev?id=8497634079324571062&hl=en-ID" target="_blank" class="social-link">
                <ion-icon name="logo-google-playstore"></ion-icon>
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
              <button class="navbar-link active" data-nav-link>About</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Resume</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Portfolio</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Blog</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Stats</button>
            </li>
          </ul>
        </nav>

        <!--
        - #ABOUT
      -->

        <article class="about active" data-page="about">
          <header >
            <h2 class="h2 article-title">About me</h2>
          </header>

          <section class="about-text">
            <p>
              My name is Arta Kusuma Hernanda. I'm a Software Engineer from
              Surabaya, East Java, currently living in Palu, Central Sulawesi.
              My work mainly involves research in computer vision and web
              development. Recently, my research has been focused on
              implementing deep learning models in medical imaging."
            </p>
          </section>

          <!--
          - I'm doing
        -->

          <section class="service">
            <h3 class="h3 service-title">What i'm doing</h3>

            <ul class="service-list">
              <li class="service-item">
                <div class="service-icon-box">
                  <ion-icon name="code-slash-outline"></ion-icon>
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Web dev</h4>

                  <p class="service-item-text">
                    Fullstack development of information systems or other
                    web-based system.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="service-icon-box">
                  <ion-icon name="eye-outline"></ion-icon>
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Computer vision</h4>

                  <p class="service-item-text">
                    Development of computer vision systems for advanced image
                    processing and analysis.
                  </p>
                </div>
              </li>
            </ul>
          </section>

          <!--
          - Skill
        -->

          <section class="clients">
            <h3 class="h3 clients-title">Skill</h3>

            <ul class="clients-list has-scrollbar">
              <li class="clients-item">
                <a href="#">
                  <img
                    src="public/assets/images/skill/codeigniter-plain-wordmark.svg"
                    alt="client logo"
                    height="55"
                    width="55"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="public/assets/images/skill/javascript-js.svg"
                    alt="client logo"
                    height="55"
                    width="55"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="public/assets/images/skill/nodejs-original.svg"
                    alt="client logo"
                    height="55"
                    width="55"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="public/assets/images/skill/php.svg"
                    alt="client logo"
                    height="55"
                    width="55"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="public/assets/images/skill/file-type-cpp3.svg"
                    alt="client logo"
                    height="55"
                    width="55"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="public/assets/images/skill/python.svg"
                    alt="client logo"
                    height="55"
                    width="55"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="public/assets/images/skill/tensorflow.svg"
                    alt="client logo"
                    height="55"
                    width="55"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="public/assets/images/skill/opencv.svg"
                    alt="client logo"
                    height="55"
                    width="55"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="public/assets/images/skill/file-type-matlab.svg"
                    alt="client logo"
                    height="55"
                    width="55"
                  />
                </a>
              </li>

              
            </ul>
          </section>
        </article>

        <!--
        - #RESUME
      -->

        <article class="resume" data-page="resume">
          <header>
            <h2 class="h2 article-title">Resume</h2>
          </header>

          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>

              <h3 class="h3">Education</h3>
            </div>

            <ol class="timeline-list">
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Master's Degree</h4>

                <span>2021 — 2023</span>

                <p class="timeline-text">
                  Departement Electrical Engineering, focus field Multimedia
                  Intelligent Network. Institut Teknologi Sepuluh Nopember
                  (ITS), Surabaya. My thesis "3D Reconstruction of Veins in
                  Ultrasound Image Based on U-Net"
                </p>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Bachelor's Degree</h4>

                <span>2015 — 2019</span>

                <p class="timeline-text">
                  Departement Computer Engineering. Institut Teknologi Sepuluh
                  Nopember (ITS), Surabaya. My final project "Disease
                  Classification on Dermoscopic Skin Image using Convolutional
                  Neural Network (CNN)"
                </p>
              </li>
            </ol>
          </section>

          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>

              <h3 class="h3">Experience</h3>
            </div>

            <ol class="timeline-list">
              <?php foreach($experience as $exp): ?>
                <li class="timeline-item">
                  <h4 class="h4 timeline-item-title"><?= esc($exp['title']) ?></h4>

                  <span><?= esc($exp['year']) ?></span>

                  <p class="timeline-text">
                    <?= esc($exp['description']) ?>
                  </p>
                </li>
              <?php endforeach; ?>
            </ol>
          </section>

          <section class="skill">
            <h3 class="h3 skills-title">Publication</h3>

            <ul class="skills-list content-card">
            <?php $npub = 0; ?>
            <?php foreach($publication as $pub): ?>
              <li class="skills-item">
                <div class="title-wrapper">
                  <?php  $npub++; ?>
                  <a href="<?= esc($pub['link']) ?>" target="_blank" class="h5"><?= $npub ?>. <?= esc($pub['title']) ?> <br> <?= esc($pub['event']) ?></a>
                </div>
              </li>
            <?php endforeach; ?>
              
            </ul>
          </section>
        </article>

        <!--
        - #PORTFOLIO
      -->

        <article class="portfolio" data-page="portfolio">
          <header>
            <h2 class="h2 article-title">Portfolio</h2>
          </header>

          <section class="blog-posts">
            <ul class="blog-posts-list">
                <?php foreach($porto as $pt): ?>
                  <li class="blog-post-item">
                    <a href="<?= $pt['content'] ?>" target="_blank">

                      <div class="blog-content">
                        <div class="blog-meta">
                          <p class="blog-category"><?= esc($pt['category']) ?></p>
                        </div>

                        <h3 class="h3 blog-item-title">
                          <?= esc($pt['title']) ?>
                        </h3>
                      </div>
                    </a>
                  </li>
                <?php endforeach; ?>
            </ul>
          </section>
          
        </article>
        

        <!--
        - #BLOG
      -->

        <article class="blog" data-page="blog">
          <header>
            <h2 class="h2 article-title">Blog</h2>
          </header>

          <section class="blog-posts">
            <!-- <div class="search-box" style="margin-bottom: 20px;">
              <button class="btn-search"><ion-icon name="search-outline" style="size: 45px;"></ion-icon></button>
              <input type="text" class="input-search" placeholder="Type to Search...">
            </div> -->
            <ul class="blog-posts-list">
                <?php foreach($blog as $bg): ?>
                  <li class="blog-post-item">
                    <a href="<?= $bg['content'] ?>" target="_blank">

                      <div class="blog-content">
                        <div class="blog-meta">
                          <p class="blog-category"><?= esc($bg['category']) ?></p>

                          <span class="dot"></span>

                          <time datetime="2022-02-23"><?= esc($bg['date']) ?></time>
                        </div>

                        <h3 class="h3 blog-item-title">
                          <?= esc($bg['title']) ?>
                        </h3>
                      </div>
                    </a>
                  </li>
                <?php endforeach; ?>
            </ul>
          </section>
          <!-- <button class="btn-tengah" type="submit">
            <ion-icon name="reload-outline"></ion-icon>
            <span>Load More</span>
          </button> -->
          <!-- <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
          </div> -->
        </article>

        <!--
        - #Watch
      -->

      <article class="stats" data-page="stats">
          <header>
            <h2 class="h2 article-title">Stats</h2>
          </header>

          <section class="blog-posts">
            <ul class="blog-posts-list">
              <li class="blog-post-item">
                  <a href="https://www.imdb.com/user/ur73686449/ratings" target="_blank">

                    <figure class="blog-banner-box">
                      <img
                        src="public/assets/images/imdb.jpg"
                        alt="Arta Kusuma Movie Rating"
                        loading="lazy"
                      />
                    </figure>

                    <div class="blog-content">
                      <div class="blog-meta">
                        <p class="blog-category">Ratings</p>
                      </div>

                      <h3 class="h3 blog-item-title">
                        My Watchlist Movie and Series Rating by IMDB
                      </h3>
                    </div>
                  </a>
                </li>
                <li class="blog-post-item">
                  <a href="https://kitsu.io/users/437803" target="_blank">

                    <figure class="blog-banner-box">
                      <img
                        src="public/assets/images/anime.jpg"
                        alt="Arta Kusuma Movie Rating"
                        loading="lazy"
                      />
                    </figure>

                    <div class="blog-content">
                      <div class="blog-meta">
                        <p class="blog-category">Ratings</p>
                      </div>

                      <h3 class="h3 blog-item-title">
                        My Watchlist Anime by Kitsu
                      </h3>
                    </div>
                  </a>
                </li>
            </ul>
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
