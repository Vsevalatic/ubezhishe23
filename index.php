<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Убежище 23</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="overlay" class="overlay"></div>
    <header>
        <div class='logo'>
            <img src="images/logo1.png" alt="лого">
            
        </div>
        <div class="menu">
            <div class="hair"><a href="#first"><h2>О нас</h2></a></div>
            <div class="hair"><a href="#second"><h2>Услуги</h2></a></div>
            <div class="hair"><a href="#third"><h2>Цена</h2></a></div>
            <div class="hair"><a href="#seventh"><h2>Акции</h2></a></div>
            <div class="hair"><a href="#forth"><h2>Конфигурация пк</h2></a></div>
            <div class="hair"><a href="#fifth"><h2>Местонахожение</h2></a></div>
            <div class="hair"><a href="#sixth"><h2>Контакты</h2></a></div>
            <div class="hair"><button id="showQRBtn"><h2 style="color: #FECD28;">Забронировать</h2></button></div>
        </div>
    </header>
    <main>
      
      <div id="qr-container" class="qr-container">
        <span class="close" onclick="closeQR()">×</span>
        <div class="qr-content">
            <p>Бронируйте места в клубе с помощью LANGAME App!</p>
            <img id="qr-code-image" src="qr-code.png" alt="QR-код" />
        </div>
      </div>
      <script src="script.js"></script>
        <section class="products">
            <div class="telo">
              <div class="podlozka4">
                <div class="gallery">
                  <img src="images/1zal.webp" alt="лого" class="thumbnail" onclick="openCarousel(0)">
                  <img src="3zal.webp" alt="лого" class="thumbnail" onclick="openCarousel(0)">
                  <img src="2zal.webp" alt="лого" class="thumbnail" onclick="openCarousel(0)">
                </div>
              </div>
              <div id="carousel" class="carousel">
                <span class="close" onclick="closeCarousel()">×</span>
                <div class="carousel-content">
                    <img id="carousel-img" src="" alt="Фото" />
                    <button class="prev" onclick="changeImage(-1)">&#10094;</button>
                    <button class="next" onclick="changeImage(1)">&#10095;</button>
                </div>
              </div> 
              <script src="script.js"></script>
              
              <div class="podlozka3" id="first">
                <h2 class="name">О нас</h2>

                  <div class="aboutus">
                      <p>Смотрители Убежища 23 приветствуют тебя, путник!
                        Убежище 23 - место для всех любителей компьютерных игр и технологий, где каждый посетитель может насладиться атмосферой игровой индустрии. Миссия Убежища - предоставить обитателям пустошей современные игровые компьютеры с мощным железом, широкий выбор игр на любой вкус, а так же
                        комфортную обстановку для отдыха и общения.
                        Стандартные секции обеспечат вам комфортный игровой опыт от RTS и RPG до Online-шутеров и MMO. VIP секции окунут вас в атмосферу домашнего уюта и наполнят командным духом.
                        Смотрители Убежища всегда готовы приютить вас, помочь с настройкой оборудования и решением любых
                        возникших вопросов.</p>
                  </div>
              </div>      
              <div class="podlozka">
                <h2 class="name" id="second">Услуги</h2>
                  <div class="uslugi">
                      <div class="usluga"><img src="imac.png" class="pic"><p>30 компьютеров</p></div>
                      <div class="usluga"><img src="pad.png" class="pic"><p>4 консолей</p></div>
                      <div class="usluga"><img src="crown.png" class="pic"><p>10 VIP компьютеров</p></div>
                      <div class="usluga"><img src="user.png" class="pic"><p>Клубные аккаунты</p></div>
                      <div class="usluga"><img src="input.png" class="pic"><p>Можно со своими девайсами</p></div>
                      <div class="usluga"><img src="food.png" class="pic"><p>Еда и напитки</p></div>
                  </div>
              </div>      
             
              <div class="podlozka1"> 
                <h2 class="name" id="third">Цены</h2>
                <div class="price">
                  <h2 style="color: white">Цены от 120 рублей в час</h2>
                  <a href="price.jpg" target="_blank">
                    Узнать все цены
                  </a>
                </div>
              </div> 
              <div class="podlozka1"> 
                <h2 class="name" id="seventh">Акции</h2>
                <div class="sales">
                  <a href="index1.html" target="_blank">Узнать все наши акции</a>
                </div>
              </div> 

              <div class="podlozka2">
                <h2 class="name" id="forth">Конфигурация компьютеров</h2>
                <div class="config">
                    <table>

                        <thead>
                          <tr>
                            <th scope="col">Оборудование</th>
                            <th scope="col">Общий зал</th>
                            <th scope="col">VIP</th>
                        
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Процессор</th>
                            <td>AMD Ryzen 5 5600X</td>
                            <td>AMD Ryzen 5 3600X</td>
                            
                          </tr>
                          <tr>
                            <th scope="row">Видеокарта</th>
                            <td>AMD Radeon RX 580 8 Gb</td>
                            <td>AMD</td>

                          </tr>
                      
                          <tr>
                            <th scope="row">Оперативная память</th>
                            <td>16 Gb DDR4</td>
                            <td>16 Gb DDR4</td>

                          </tr>
                          <tr>
                            <th scope="row">Жесткий диск</th>
                            <td>SSD</td>
                            <td>SSD</td>

                          </tr>
                          <tr>
                            <th scope="row">Клавиатура</th>
                            <td>HyperX</td>
                            <td>HyperX</td>

                          </tr>
                          <tr>
                            <th scope="row">Мышь</th>
                            <td>HyperX</td>
                            <td>HyperX</td>

                          </tr>
                          <tr>
                            <th scope="row">Гарнитура</th>
                            <td>HyperX</td>
                            <td>HyperX</td>

                          </tr>
                          <tr>
                            <th scope="row">Кресло</th>
                            <td>Cougar</td>
                            <td>Cougar</td>

                          </tr>
                          <tr>
                            <th scope="row">Монитор</th>
                            <td>AOC 27" 144Гц</td>
                            <td>AOC 27" 144Гц</td>

                          </tr>
                          <tr>
                            <th scope="row">Интернет</th>
                            <td>>100Мбит</td>
                            <td>>100Мбит</td>

                          </tr>
                        </tbody>
                      </table>
              </div>      
                </div>
                <div class="podlozka5">
                  <h2 class="name" id="fifth">Местонахожение</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d315.092399294354!2d59.953736015792245!3d57.90853050431534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0YPQsdC10LbQuNGJ0LUgMjMg0L3QuNC20L3QuNC5INGC0LDQs9C40Ls!5e0!3m2!1sru!2sru!4v1738964982670!5m2!1sru!2sru" width="1050" height="600" style="border: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="podlozka1"> 
                  <h2 class="name">Контакты</h2>
                  <div class="contactic">
                    <a href="https://vk.com/ubezhishe23" target="_blank">Переходите в нашу группу в VK!</a>
                  </div>
                </div>
            </div>
        </section>
    </main>
    <div class="create-line"></div>
    <footer>
      <div class="contact-info" id="sixth">
          <div class="ml"><img src='ml.png'></div>
          <div class="contact">
              <p><strong>Email:</strong> ubezhishe23@yandex.ru</p>
              <p><strong>Телефон:</strong> +7 (912) 048-85-90</p>
              <p><strong>Адрес:</strong> улица Карла Маркса, 23А, Нижний Тагил, Россия</p>
          </div>
          <div class="social-media">
              <p><strong>Контакты в социальных сетях:</strong></p>
              <ul>
                  <li><a href="https://vk.com/ubezhishe23" target="_blank">ВКонтакте</a></li>
                  <li><a href="https://yandex.ru/maps/11168/nizhniy-tagil/?ll=59.954075%2C57.908689&mode=poi&poi%5Bpoint%5D=59.953992%2C57.908546&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D232597725180&z=18.02" target="_blank">Яндекс.Карты</a></li>
                  <li><a href="https://2gis.ru/ntagil/firm/70000001089816038?m=59.954741%2C57.907745%2F15.85" target="_blank">2гис</a></li>
                  <li><a href="avtor.jpg" target="_blank">Автор</a></li>
              </ul>
          </div>
          <div class="gp"><img src='gp.png'></div>
      </div>
        
    </footer>
</body>
</html>