<?php require_once "template/default.php" ?>
    
  <div id="header">
    <ul id="header-items">
      <li class="header-item"><a href="#">Home</a></li>
        <li class="header-item" id="portfolio"><a href="#categories">Portfolio</a>
            <ul id="dropdown">
                <li class="header-item"><a href="portretten.php">Portretten</a></li>
                <li class="header-item"><a href="natuur.php">Natuur</a></li>
                <li class="header-item"><a href="steden.php">Steden</a></li>
                <li class="header-item"><a href="urbex.php">Urbex</a></li>
            </ul>
        </li>
        <li class="header-item"><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  
      <!---------------------------------------------------       Slider        ----------------------------------------------------->
    
    <div id="container">
        <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="view">
                    <img class="d-block w-100" src="img/DSC_0147-min.jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive">Iris Ligtenberg</h3>
                    <p>Fotografie</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="view">
                    <img class="d-block w-100" src="img/_DSC0278-min.jpg" alt="Second slide">
                    <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive">Iris Ligtenberg</h3>
                    <p>Fotografie</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="view">
                    <img class="d-block w-100" src="img/_DSC0280-min.jpg" alt="Third slide">
                    <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive">Iris Ligtenberg</h3>
                    <p>Fotografie</p>
                  </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
      
      <!---------------------------------------------          categroeiren             ----------------------------------------------------------------------------->
    
    <span id="categories"></span>
    <div id="container"> 
      <div class="container2">
        <div class="row">
            <figure class="col-sm picture">
                <a href="portretten.php">
                  <img alt="picture" src="img/categories/deze4-min.jpg" class="img-fluid" />
                  <h3 class="cattext">Portretten</h3>
                </a>
            </figure>
            <figure class="col-sm picture">
                <a href="natuur.php">
                  <img alt="picture" src="img/categories/_DSC0241-min.jpg" class="img-fluid" />
                  <h3 class="cattext">Natuur</h3>
                </a>
            </figure>
            <div class="w-100"></div>
            <figure class="col-sm picture">
                <a href="steden.php">
                  <img alt="picture" src="img/categories/DSC_0978-min.jpg" class="img-fluid" />
                  <h3 class="cattext">Steden</h3>
                </a>
            </figure>
            <figure class="col-sm picture">
                <a href="urbex.php">
                    <img alt="picture" src="img/categories/urbex-min.jpg" class="img-fluid" />
                    <h3 class="cattext">Urbex</h3>
                </a>
            </figure>
        </div>
      </div>
    </div>
      
    <!---------------------------------------------          Parallax             ----------------------------------------------------------------------------->
  <div id="container">
    <div class="parallax"></div>
    <div id="info">
        <div class="row">
            <div class="col-6 col-md-4">
                <img id="contactimg" src="img/Schermafbeelding%202019-12-29%20om%2015.40.41%20(1).png">
            </div>
            <div class="col-12 col-sm-6 col-md-8">
                <h4 style="font-size: 20px">
                    Welkom op mijn website!<br />
                    Mijn naam is Iris Ligtenberg.<br />
                    Ik ben 22 jaar oud en geboren en getogen in Rijssen.<br />
                    Op dit moment volg ik de opleiding Human Resource Management.<br />
                    Sinds drie jaar geleden beschik ik over een spiegelreflexcamera.<br />
                    Sindsdien is fotografie een echte hobby van mij geworden.<br />
                    Ik vind het erg leuk om foto’s van de natuur of personen te maken.<br />
                </h4>
             </div>
        </div>
    </div>
  </div>
</body>
</html>