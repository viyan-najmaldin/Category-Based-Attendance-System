<!DOCTYPE html>
<html lang="en">
<?php include 'templates/header.php' ?>

<body>
  <header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__logo">
            <a href="#header">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="30" height="30" class="bi yel-col pb-2 bi-calendar2-check" viewBox="0 0 16 16">
                <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
              </svg>
              <span class='yel-col'>CB</span>AS
            </a>
          </div>

          <div class="nav__menu">

            <ul class="nav__list">
              <li class="nav__item">
                <a href="#home" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="#about" class="nav__link scroll-link">About</a>
              </li>
              <li class="nav__item">
                <a href="#footer" class="nav__link scroll-link">Contact us</a>
              </li>
            </ul>
          </div>
          <div class="nav__login">
            <a href="./login.php" class="icon__item">
              Login
            </a>
          </div>
        </nav>

      </div>
    </div>
  </header>
  <main>
    <section class="section testimonial" id="home">
      <div class="testimonial__container">
        <div class="glide" id="glide_4">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img style="margin-bottom: 20px;" src="https://i.pinimg.com/originals/49/e7/80/49e7800d6828dbf1abbb89c9f42a1f75.png" alt="">
                  </div>
                  <p class='aaaa'>CBAS is to help the administrators, in order to know the attendance data of their employees.
                  </p>

                </div>
              </li>
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img style="margin-bottom: 20px;" src="./images/list.png" alt="">
                  </div>
                  <p class='aaaa'>This Website helps Users to get daily or monthly information about Time of
                    Arriving and Leaving that were Tracked by the Card Reader Machine in the
                    Reception</p>

                </div>
              </li>
              <li class="glide__slide">
                <div class="testimonial__box">
                  <div class="client__image">
                    <img style="margin: button 0px" src="./images/machine.png" alt="">
                  </div>
                  <p class='aaaa'>Using the employee and students card number for taking their attendance not just for passage.
                  </p>
                </div>
              </li>
            </ul>
          </div>

          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
          </div>
        </div>
      </div>
    </section>
    <section class="section about" id="about">
      <div class="container">
        <div class="about__content">
          <div class="about__data">
            <p>A <span class=''>Project</span> will be Submitted to the Department</p>
            <p>In the Partial Fulfillment of the Requirement for the Dgree of </p>
            <p>Bachelor of Science-BSc- in <span class=''>Software and Informatics Engineering</span></p>
            <p class='py-3'>Iman zuher, Viyan Najmaddin, Shara Osman, Sakar Masod</p>
            <div class="img">
              <img src="https://sites.google.com/a/su.edu.krd/sarwa-dashti/_/rsrc/1466493608102/home/SUE.GIF" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <br><br>
  <?php include 'templates/footer.php' ?>
</body>

</html>