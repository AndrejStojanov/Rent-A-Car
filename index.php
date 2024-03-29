<html>
    <head>
        <title>CarGrab</title>
        <link rel="stylesheet" href="css/stylehome.css">
        <link rel="stylesheet" href="boostrap/bootstrap.min.css">
        <script src="boostrap/bootstrap.min.js"></script>
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

      <button onclick="topFunction()" id="kopceZaNagore" title="Оди нагоре">Најгоре</button>
      <script>
      var mybutton = document.getElementById("kopceZaNagore");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>

        <div id="container">
            <div id="navbar">
                <ul>
                    <li><a href="index.html">Почетна</a></li>
                    <li><a href="registracija.html">Регистрација</a></li>
                    <li><a href="zanas.html">За нас</a></li>
                </ul>
                <div id="logo">
                    <img src="sliki/logo.png" alt="">
                </div>
                <ol>
                    <li><a href="#listanakoli">Автомобили</a></li>
                    <li><a href="kontakt.php">Контакт</a></li>
                    <li><a href="najava.html">Најава</a></li>
                </ol>
            </div>
            <div id="sideimg">
                <img src="sliki/lambo.png" alt="">
            </div>
            <div id="content">
                <h2>Најдобар автомобил по најдобра цена!</h2>
                <p>Уживајте во вашето патување со нас.</p>
                <button><a href="#listanakoli">Одберете автомобил</a></button>
                <img src="sliki/logo2.png" alt="">
            </div>

            <!--End Of Header-->
        </div>
        <!--End OF Header-->
        <blockquote class="citat citat-bordered citat-navodnici">
          <p class="citat_text">
            Исто како со облеката, не постои ништо позаводливо од автомобил што одговара на личноста на возачот.
          </p>
          <p class="citat_text citat_text-covek">Џорџо Армани, дизајнер</p>
        </blockquote>
        <section class="article">
            <div class="container py-5" id="listanakoli">
              <h1 class="text-center">Листа на автомобили:</h1><br>
              <div class="row">
                <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                    <div class="card">
                      <img src="sliki/koli/m1.jpg" alt="" class="img-fluid">
                      <p class="pt-3"><a href="koli/m1.php">Mercedes S-Класа</a></p>
                      <span id="cost">5000 денари / ден</span>
                      <span id="name">СЕДАН</span>
                      <small>
                          <a >2015</a>
                          <a >АВТОМАТИК</a>
                      </small>
                    </div>
                  </div>
                  <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                    <div class="card">
                      <img src="sliki/koli/m2.jpg" alt="" class="img-fluid">
                      <p class="pt-3"><a href="koli/m2.php">Mercedes C-Класа</a></p>
                      <span id="cost">3500 денари / ден</span>
                      <span id="name">СЕДАН</span>
                      <small>
                          <a >2019</a>
                          <a >МАНУЕЛНА</a>
                      </small>
                    </div>
                  </div>
                  <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                    <div class="card">
                      <img src="sliki/koli/m3.jpg" alt="" class="img-fluid">
                      <p class="pt-3"><a href="koli/m3.php">Mercedes G-Класа</a></p>
                      <span id="cost">4500 денари / ден</span>
                      <span id="name">ЏИП</span>
                      <small>
                          <a >2018</a>
                          <a >АВТОМАТИК</a>
                      </small>
                    </div>
                  </div>
              </div>


              <br><br>


              <div class="row">
                <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                    <div class="card">
                      <img src="sliki/koli/bmw1.jpg" alt="" class="img-fluid">
                      <p class="pt-3"><a href="koli/bmw1.php">BMW 2-серија</a></p>
                      <span id="cost">2000 денари / ден</span>
                      <span id="name">КУПЕ</span>
                      <small>
                          <a>2016</a>
                          <a>МАНУЕЛНА</a>
                      </small>
                    </div>
                  </div>
                  <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                    <div class="card">
                      <img src="sliki/koli/bmw2.jpg" alt="" class="img-fluid">
                      <p class="pt-3"><a href="koli/bmw2.php">BMW 4-серија</a></p>
                      <span id="cost">3500 денари / ден</span>
                      <span id="name">КУПЕ</span>
                      <small>
                          <a>2019</a>
                          <a>АВТОМАТИК</a>
                      </small>
                    </div>
                  </div>
                  <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                    <div class="card">
                      <img src="sliki/koli/bmw3.jpg" alt="" class="img-fluid">
                      <p class="pt-3"><a href="koli/bmw3.php">BMW X2-серија</a></p>
                      <span id="cost">3000 денари / ден</span>
                      <span id="name">ЏИП</span>
                      <small>
                          <a>2018</a>
                          <a>АВТОМАТИК</a>
                      </small>
                    </div>
                  </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                    <div class="card">
                      <img src="sliki/koli/h1.jpg" alt="" class="img-fluid">
                      <p class="pt-3"><a href="koli/h1.php">Hyundai i20</a></p>
                      <span id="cost">1500 денари / ден</span>
                      <span id="name">ХЕЧБЕК</span>
                      <small>
                          <a>2021</a>
                          <a>АВТОМАТИК</a>
                      </small>
                    </div>
                  </div>
                  <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                    <div class="card">
                      <img src="sliki/koli/h2.jpg" alt="" class="img-fluid">
                      <p class="pt-3"><a href="koli/h2.php">Hyundai Tucson</a></p>
                      <span id="cost">3300 денари / ден</span>
                      <span id="name">ЏИП</span>
                      <small>
                          <a>2017</a>
                          <a>МАНУЕЛНА</a>
                      </small>
                    </div>
                  </div>
                  <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                    <div class="card">
                      <img src="sliki/koli/h3.jpg" alt="" class="img-fluid">
                      <p class="pt-3"><a href="koli/h3.php">Hyundai Elantra</a></p>
                      <span id="cost">1200 денари / ден</span>
                      <span id="name">СЕДАН</span>
                      <small>
                          <a>2014</a>
                          <a>МАНУЕЛНА</a>
                      </small>
                    </div>
                  </div>
              </div>

            </div>
        </section>
        <!--end Of New Product-->
        <div class="title-box">
          <h1>Нашиот тим:</h1>
        </div>
        <div class="row team">
        <div class="team-row col-md-3">
          <div class="profile-box">
            <h4>Јордан <br>Трајков</h4>
            <small>Развивач</small>
            <img src="sliki/tim/jordan.jpg" alt="">
            <div class="social-link">
              <a href="https://www.facebook.com/jordan.trajkov.9">
              <i class="fa fa-facebook"></i></a>
            </div>
            <div class="social-link">
              <a href="https://www.instagram.com/jordantrajkov3/">
              <i class="fa fa-instagram"></i></a>
            </div>
            <p>
              Менаџер,&nbsp;&nbsp;Развивач.
            </p>
          </div>
        </div>
        <div class="team-row col-md-3">
          <div class="profile-box">
            <h4>Александар <br>Петров</h4>
            <small>Развивач</small>
            <img src="sliki/tim/aleksandar.jpg" alt="">
            <div class="social-link">
              <a href="https://www.facebook.com/aleksandar.petrov.5492/">
              <i class="fa fa-facebook"></i></a>
            </div>
            <div class="social-link">
              <a href="https://www.instagram.com/aleksandar.petrov10/">
              <i class="fa fa-instagram"></i></a>
            </div>
            <p>
              Веб дизајнер,&nbsp;&nbsp;динамичко уредување.
            </p>
          </div>
        </div>
        <div class="team-row col-md-3">
          <div class="profile-box">
            <h4>Андреј <br>Стојанов</h4>
            <small>Развивач</small>
            <img src="sliki/tim/andrej.jpg" alt="">
            <div class="social-link">
              <a href="https://www.facebook.com/andrej.stojanov.7">
              <i class="fa fa-facebook"></i></a>
            </div>
            <div class="social-link">
              <a href="https://www.instagram.com/andrejstojanov10/">
              <i class="fa fa-instagram"></i></a>
            </div>
            <p>
              Тестер,&nbsp;&nbsp;Поврзувач,&nbsp;&nbsp;Дебагер.
            </p>
          </div>
        </div>
        </div>
        <!--End Of Team-->
        <section id="services">
          <div class="container">
              <h1>Нашата услуга:</h1>
              <div class="row services">
                  <div class="col-md-3 text-center">
                      <div class="icon">
                          <i class="fa fa-user"></i>
                      </div>
                      <h3>ЗАДОВОЛНИ КЛИЕНТИ</h3>
                      <h3>
                         2000 +
                      </h3>
                  </div>
                  <div class="col-md-3 text-center">
                      <div class="icon">
                          <i class="fa fa-car"></i>
                      </div>
                      <h3>АВТОМОБИЛИ</h3>
                      <h3>
                         100 +
                      </h3>
                  </div>
                  <div class="col-md-3 text-center">
                      <div class="icon">
                          <i class="fa fa-university"></i>
                      </div>
                      <h3>ДОСТАПНИ ГРАДОВИ</h3>
                      <h3>
                          30 +
                      </h3>
                  </div>
                  <div class="col-md-3 text-center">
                      <div class="icon">
                          <i class="fa fa-star"></i>
                      </div>
                      <h3>РЕЈТИНГ</h3>
                      <h3>
                          4.9 / 5.0
                      </h3>
                  </div>
              </div>
          </div>
      </section>
      <!--End Of Services-->
      <section class="article1">
        <div class="container py-5">
          <h1 class="text-center">Последни додадени автомобили:</h1><br>
          <div class="row">
            <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                <div class="card">
                  <img src="sliki/koli/bmw1.jpg" alt="" class="img-fluid">
                  <p class="pt-3"><a href="#">BMW 2-серија</a></p>
                  <span id="cost">2000 денари / ден</span>
                  <span id="name">КУПЕ</span>
                  <small>
                      <a>2016</a>
                      <a>МАНУЕЛНА</a>
                  </small>
                </div>
              </div>
              <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                <div class="card">
                  <img src="sliki/koli/m1.jpg" alt="" class="img-fluid">
                  <p class="pt-3"><a href="#">Mercedes S-Класа</a></p>
                  <span id="cost">5000 денари / ден</span>
                  <span id="name">СЕДАН</span>
                  <small>
                      <a>2015</a>
                      <a>АВТОМАТИК</a>
                  </small>
                </div>
              </div>
              <div class="col-lg-4 wow bounceIn" data-wow-delay="0.3s">
                <div class="card">
                  <img src="sliki/koli/h2.jpg" alt="" class="img-fluid">
                  <p class="pt-3"><a href="#">Hyundai Tucson</a></p>
                  <span id="cost">3000 денари / ден</span>
                  <span id="name">ЏИП</span>
                  <small>
                      <a>2017</a>
                      <a>МАНУЕЛНА</a>
                  </small>
                </div>
              </div>
          </div>
          </div>
        </div>
      </section>
      <!--End Of article-->
      <footer>
          <div class="copy-right">
              @  COPYRIGHT 2022,&ensp;CarGrab Inc.,&ensp;Александар Петров,&ensp;Јордан Трајков,&ensp;Андреј Стојанов.&emsp;Сите права задржани.
          </div>
      </footer>
    </body>
</html>
