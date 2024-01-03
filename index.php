<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-coffee fa-3x tm-site-logo"></i>
            <h1 class="tm-site-name">Кафе "Волна"</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="#drink" class="tm-page-link active">
                  <i class="fas fa-mug-hot tm-page-link-icon"></i>
                  <span>Меню напитков</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#about" class="tm-page-link">
                  <i class="fas fa-users tm-page-link-icon"></i>
                  <span>О нас</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#special" class="tm-page-link">
                  <i class="fas fa-glass-martini tm-page-link-icon"></i>
                  <span>Фаст-фуд</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#contact" class="tm-page-link">
                  <i class="fas fa-comments tm-page-link-icon"></i>
                  <span>Контакты</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="page.html" class="tm-page-link">
                  <i class="fas fa-comments tm-page-link-icon"></i>
                  <span>Местоположение</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>        
      </div>
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                <li>
                  <a href="#" class="tm-tab-link active" data-id="cold">Кофе со льдом</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="hot">Горячий кофе</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="juice">Фруктовый сок</a>
                </li>
              </ul>
            </nav>

            <div id="cold" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/iced-americano.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Американо со льдом<span class="tm-list-item-price">$10.25</span></h3>
                    <p class="tm-list-item-description">Американо со льдом - это простая, но приятная смесь эспрессо и холодной воды, подаваемая со льдом, в результате чего получается гладкий и сбалансированный напиток, который сохраняет насыщенный вкус эспрессо, не перегружая вкусовые рецепторы.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-cappuccino.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Капучино со льдом<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Капучино со льдом - это кофейный напиток с добавлением эспрессо, молока, льда и дополнительного подсластителя.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-espresso.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Эспрессо со льдом<span class="tm-list-item-price">$14.25</span></h3>
                    <p class="tm-list-item-description">Эспрессо-тоник (каффе-тоник, кофе-тоник) - популярный летний холодный напиток скандинавского происхождения, состоящий из крепкого кофе, тоника и большого количества льда.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/iced-latte.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Латте со льдом<span class="tm-list-item-price">$11.50</span></h3>
                    <p class="tm-list-item-description">Айс латте – это холодная версия классического напитка, которую готовят на основе кофе, молока и колотого льда. </p>
                  </div>
                </div> 
                                       
              </div>
            </div> 

            <div id="hot" class="tm-tab-content">
              <div class="tm-list">
              
                <div class="tm-list-item">          
                  <img src="img/hot-americano.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Горячий американо<span class="tm-list-item-price">$8.50</span></h3>
                    <p class="tm-list-item-description">Кофе американо (итал. Caffè Americano) – это эспрессо, разбавленный горячей водой. Наличие пенки (крема́) зависит от того, каким способом смешивают кофе и воду.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-cappuccino.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Горячий капучино<span class="tm-list-item-price">$9.50</span></h3>
                    <p class="tm-list-item-description">Хот капучино, или «горячий капучино» – это один из самых популярных напитков на основе кофе. Этот напиток сочетает в себе традиционный капучино и горячий шоколад, создавая уникальное сочетание кофе, молока и шоколада.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-espresso.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Горячий эспрессо<span class="tm-list-item-price">$7.50</span></h3>
                    <p class="tm-list-item-description">Эспрессо готовится путем нагнетания очень горячей воды под высоким давлением через мелко измельченный уплотненный кофе.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/hot-latte.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Горячий латте<span class="tm-list-item-price">$6.50</span></h3>
                    <p class="tm-list-item-description">В мире кофе под словом Латте понимают слоистый коктейль: эспрессо, молоко и небольшое количество молочной пены.</p>              
                  </div>
                </div>
                         
              </div>
            </div>

            <div id="juice" class="tm-tab-content">
              <div class="tm-list">
                <div class="tm-list-item">          
                  <img src="img/smoothie-1.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Клубничный коктейль<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Клубничный коктейль – это освежающий и ароматный напиток, который обычно готовится с использованием свежих клубничных ягод.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-2.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Смузи из красных ягод<span class="tm-list-item-price">$14.50</span></h3>
                    <p class="tm-list-item-description">С этим легким смузи из красных фруктов вы получите простой и вкусный напиток для летних закусок или завтраков.</p>                    
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-3.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Ананасовый коктейль<span class="tm-list-item-price">$16.50</span></h3>
                    <p class="tm-list-item-description">Пи́на кола́да», «пи́нья кола́да» (исп. Piña colada — «процеженный ананас») — традиционный карибский алкогольный коктейль на основе светлого рома с кокосовым молоком и ананасовым соком.</p>              
                  </div>
                </div>
                <div class="tm-list-item">          
                  <img src="img/smoothie-4.png" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Смузи из шпината<span class="tm-list-item-price">$18.50</span></h3>
                    <p class="tm-list-item-description">YСмузи - это очень вкусный, чаще всего диетический напиток из ягод и фруктов, для приготовления которого необходим миксер или блендер.</p>              
                  </div>
                </div>              
              </div>
            </div>
            <!-- end Drink Menu Page -->
          </div>

          <!-- About Us Page -->
          <div id="about" class="tm-page-content">
            <div class="tm-black-bg tm-mb-20 tm-about-box-1">              
              <h2 class="tm-text-primary tm-about-header">О кафе "Волна"</h2>
              <div class="tm-list-item tm-list-item-2">                
                <img src="img/about-1.png" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                <div class="tm-list-item-text-2">
                  <p>"Мы - команда профессионалов, предлагающая уютную атмосферу, отличный сервис и вкусную еду. Наше кафе - идеальное место для проведения времени с друзьями, бизнес-встреч или просто для отдыха. Мы гордимся качеством наших блюд и широким выбором напитков. Посетите нас и убедитесь сами!"</p>
                </div>                
              </div>
            </div>
            <div class="tm-black-bg tm-mb-20 tm-about-box-2">              
              <div class="tm-list-item tm-list-item-2">                
                <div class="tm-list-item-text-2">
                  <h2 class="tm-text-primary">Как мы начинали</h2>
                  <p>"Наше кафе начиналось с маленькой идеи - создать место, где каждый гость почувствует себя как дома. Мы начали с небольшого меню, но с большой страстью к кулинарии и обслуживанию. С течением времени мы выросли, расширили наше меню и улучшили сервис, но наша исходная цель осталась неизменной - предложить уютную атмосферу, отличный сервис и вкусную еду каждому нашему гостю."</p>                  
                </div>                
                <img src="img/about-2.png" alt="Image" class="tm-list-item-img tm-list-item-img-big tm-img-right">                
              </div>
            </div>
          </div>
          <!-- end About Us Page -->

          <!-- Special Items Page -->
          <div id="special" class="tm-page-content">
            <div class="tm-special-items">
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-01.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Специальный напиток</h2>
                  <p class="tm-special-item-text">То́ник — горько-кислый безалкогольный газированный напиток, в котором содержится хинин. Часто используется для разбавления спиртных напитков, особенно джина, приготовления коктейлей.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-02.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Круассан</h2>
                  <p class="tm-special-item-text">Круасса́н — небольшое хлебобулочное изделие, булочка в форме полумесяца (рогалика) из слоёного теста.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-03.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Гамбургеры</h2>
                  <p class="tm-special-item-text">Га́мбургер — это горячее блюдо, обычно состоящее из котлеты из измельчённого мяса, как правило, говядины, помещённой внутрь нарезанной булочки.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-04.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Безе</h2>
                  <p class="tm-special-item-text">Безе – легкий, воздушный десерт, приготовленный из яичных белков, взбитых с сахаром. Второе название безе – меренги.</p>  
                </div>
              </div>      
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-05.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Смузи</h2>
                  <p class="tm-special-item-text">Смузи — холодный десерт в виде смешанных в блендере ягод или фруктов (обычно одного вида) с добавлением кусочков льда, сока или молока.</p>  
                </div>
              </div>
              <div class="tm-black-bg tm-special-item">
                <img src="img/special-06.jpg" alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">Лосось запеченный</h2>
                  <p class="tm-special-item-text">Лосось - это рыба, которая обитает в пресных и соленых водах. Его мясо обладает нежным вкусом и богатым ароматом.</p>  
                </div>
              </div>                      
            </div>            
          </div>
          <!-- end Special Items Page -->

          <!-- Contact Page -->
          <div id="contact" class="tm-page-content">
            <div class="tm-black-bg tm-contact-text-container">
              <h2 class="tm-text-primary">Контактная страница кафе "Волна"</h2>
              <p>Адрес: ул. Пушкина, д. 10, г. Гродно</p>
 <p>Телефон: +375(29)85-95-713 </p>
 <p>Электронная почта: wafevolna@gmail.com </p>
 <p>График работы: Пн-Вс: 10:00-23:00 </p>
 <p>Пожалуйста, свяжитесь с нами, если у вас есть какие-либо вопросы или предложения. Мы всегда рады общению с нашими гостями!</p>
            </div>
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="" method="POST" id="contact-form">
                <div class="tm-form-group">
                  <input type="text" name="name" class="tm-form-control" placeholder="Name" required="" />
                </div>
                <div class="tm-form-group">
                  <input type="email" name="email" class="tm-form-control" placeholder="Email" required="" />
                </div>        
                <div class="tm-form-group tm-mb-30">
                  <textarea rows="6" name="message" class="tm-form-control" placeholder="Message" required=""></textarea>
                </div>        
                <div>
                  <button type="submit" class="tm-btn-primary tm-align-right">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- end Contact Page -->
        </main>
      </div>    
    </div>
    <footer class="tm-site-footer">    
    </footer>
  </div>
    
  <!-- Background video -->
  <div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <source src="video/wave-cafe-video-bg.mp4" type="video/mp4">
      </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>    
  <script>

    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }

    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }    

    function initPage() {
      let pageId = location.hash;

      if(pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`)); 
        showPage($(pageId));
      }
      else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));
      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
    }

    $(document).ready(function(){

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {
        
        if(window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });

      
      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault(); 
        openTab(e, $(e.target).data('id'));
      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function(){
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });
      
  </script>
</body>
</html>