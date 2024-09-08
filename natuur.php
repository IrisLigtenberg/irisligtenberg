<?php require_once "template/default.php" ?>
    
  <div id="header">
    <ul id="header-items">
      <li class="header-item"><a href="/">Home</a></li>
        <li class="header-item" id="portfolio"><a href="#">Portfolio</a>
            <ul id="dropdown">
                <li class="header-item"><a href="portretten.php">Portretten</a></li>
                <li class="header-item"><a href="#">Natuur</a></li>
                <li class="header-item"><a href="steden.php">Steden</a></li>
                <li class="header-item"><a href="urbex.php">Urbex</a></li>
            </ul>
        </li>
        <li class="header-item"><a href="contact.php">Contact</a></li>
    </ul>
  </div>

  <div class="container">
     <div class="container3">
            <div class="gallery" id="gallery">
            <?php
                $dir = new DirectoryIterator(dirname("./img/natuur/natuur"));
                foreach ($dir as $fileinfo) {
                    if (!$fileinfo->isDot()) {
                        echo "<div class='viewpic mb-3 pics'>
                                <img alt='picture' src='img/natuur/".$fileinfo->getFilename()."' class='img-fluid fancybox' data-big='img/natuur/".$fileinfo->getFilename()."' />
                            </div>";
                    }
                }
            ?>
         </div>
      </div>
 </div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>
</body>
</html>