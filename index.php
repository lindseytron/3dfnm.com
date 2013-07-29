<?php
    include_once('header.php');
    include_once('navigation.php');
?>     
        <div class="container"> <!-- begin main content -->
            <?php
                include_once('slider.php');
                include_once('homepage-content-boxes.php');
            ?>   
        </div> <!-- /container -->
        <div class="tagline-wrapper">
            <div class="container tagline-image">
                <img src="img/animation-tagline.jpg" width="100%" alt="high performance animation tagline" />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="span6">    
                    <h3>Featured Work</h3>
                        <ul class="thumbnails">
                            <li class="span2">
                                <a href="#" class="thumbnail">
                                    <img src="img/featured1_off.jpg" alt="" width="100%" class="rollovers" />
                                </a>
                            </li>
                            <li class="span2">
                                <a href="#" class="thumbnail">
                                    <img src="img/featured2_off.jpg" alt="" width="100%" class="rollovers" />
                                </a>
                            </li>
                            <li class="span2">
                                <a href="#" class="thumbnail">
                                    <img src="img/featured3_off.jpg" alt="" width="100%" class="rollovers" />
                                </a>
                            </li>
                            <li class="span2">
                                <a href="#" class="thumbnail">
                                    <img src="img/featured4_off.jpg" alt="" width="100%" class="rollovers" />
                                </a>
                            </li>
                            <li class="span2">
                                <a href="#" class="thumbnail">
                                    <img src="img/featured5_off.jpg" alt="" width="100%" class="rollovers" />
                                </a>
                            </li>
                            <li class="span2">
                                <a href="#" class="thumbnail">
                                    <img src="img/featured6_off.jpg" alt="" width="100%" class="rollovers" />
                                </a>
                            </li>
                        </ul>

                </div>
                <div class="span3">
                    <h3>Header</h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span3">
                    <h3>Header</h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
            </div>
        </div> <!-- /container -->
        <?php
            include_once('footer.php');
            include_once('scripts.php');
        ?>
    </body>
</html>
