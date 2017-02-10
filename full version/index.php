<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"  />
        <title>Lead - Web App Coming Soon</title>
        <!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700' rel='stylesheet' type='text/css'>
        <!-- bootstrap 3 & countdown -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/jquery.countdown.css" />
        <!-- overall styles -->
        <link rel="stylesheet" href="css/style.css"  />
        <link rel="shortcut icon" href="favicon.png" />  
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="js/functions.js"></script>
    </head>
    <body id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div id="header">
                        <h1 id="logo">Lead</h1>
                    </div>
                    <div id="intro">
                        <h2>Your New Favourite CRM Coming Soon</h2>
                    </div>
                    <div id="countdown-wrap">
                        <div id="countdown"></div>
                    </div>
                    <div id="signup">
                      <form id="easy" name="contact" method="post" class="validate" action="submit.php" onsubmit="return checkform()">
                        <div id="error"></div>
                        <div id="success">Thank you, your email has been sent.</div>
                        <input type="email" value="" id="email" name="email" placeholder="Email Address *" class="required email">
                        <input type="submit" value="Subscribe" name="subscribe" class="button">
                      </form>
                    </div>
                    <br /><br />
                </div>
                <div class="col-md-7">
                    <div id="laptop">
                        <img src="images/laptop.png" alt="Amazing Website Screenshot" />
                    </div>
                </div>
            </div>
        </div>
        <div class="white-bg clients">
            <div class="container">
                <div class="row">
                    <h3>Our Team</h3>
                    <div class="col-md-3">
                        <img class="client-img" src="images/client-mike.jpg" alt="person one">
                        <h4>Mike Ross</h4>
                        <p class="italic justify">"Lead was just such an amazing theme ipsum dolor sit amet, consectetur adipiscing elit."</p>
                    </div>

                    <div class="col-md-3">
                        <img class="client-img" src="images/client-rachel.jpg" alt="person two">
                        <h4>Rachel Zane</h4>      
                        <p class="italic justify">"I just couldn't say enough nice things, so great ipsum dolor sit amet, consecttur adipiscing elit. "</p>
                    </div>

                    <div class="col-md-3">
                        <img class="client-img" src="images/client-harvey.jpg" alt="person three">
                        <h4>Harvey Specter</h4>
                        <p class="italic justify">"If this was around a few months ago, I wouldn't have bought the other themes ipsum dolor."</p>
                    </div>

                    <div class="col-md-3">
                        <img class="client-img" src="images/client-donna.jpg" alt="person four">
                        <h4>Donna Paulsen</h4>
                        <p class="italic justify">"If this was around a few months ago, I wouldn't have bought the other themes ipsum dolor."</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 services">
                        <span class="webdesign"><img src="images/webdesign.png" alt="Web Design" /></span>
                        <h2 class="service-heading">Quick</h2>
                        <p class="justify">Nam tincidunt urna ac velit egestas, id gravida nisi ultrices. Sed a sodales risus. Proin scelerisque sapien at urna.</p>
                    </div>
                    <div class="col-md-4 services">
                        <span class="branding"><img src="images/branding.png" alt="Branding" /></span>
                        <h2 class="service-heading">Revolutionary</h2>
                        <p class="justify">Cras purus mauris, mollis sollicitudin blandit id, venenatis vitae purus. Aliquam vel leo nunc. Cum sociis natoque. </p>
                    </div>
                    <div class="col-md-4 services">
                        <span class="seo"><img src="images/seo.png" alt="SEO" /></span>
                        <h2 class="service-heading">Support</h2>
                        <p class="justify">Fusce accumsan sit amet arcu ac bibendum. Mauris semper consequat quam sed dapibus. Maecenas varius mi.</p>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer-container">
            <div class="container">
                <h2>Lead</h2>
                <div class="social-snippet">
                    <a href="#"><img src="images/social-fb.png" /></a>
                    <a href="#"><img src="images/social-tw.png" /></a>
                    <a href="#"><img src="images/social-dr.png" /></a>
                    <a href="#"><img src="images/social-li.png" /></a>
                    <a href="#"><img src="images/social-pin.png" /></a>
                    <a href="#"><img src="images/social-gp.png" /></a>
                    <a href="#"><img src="images/social-be.png" /></a>
                    <a href="#"><img src="images/social-fl.png" /></a>
                </div>
                <br>
                <a href="mailto:#">hello@nothinghere.com&nbsp;&nbsp;&nbsp;&nbsp;</a>|<a href="#">&nbsp;&nbsp;&nbsp;&nbsp;+614 123 456 789</a>
                <!-- the usual copyright crap -->
                <div class="copyright">Lead &copy; 2013. All Rights Reserved.<br /><a href="#home">Back To Top</a></div>
                <div class="clearfix"></div>
            </div>
        </footer>

        <script src="js/jquery.countdown.js"></script>
        <script>
            // countdown setup
            // set date, note: months are 0-based ---- numbers are: year, month, day, hour, minute, second, milliseconds
            var ts = (new Date(2018,3,4,19,0,0,0));
            $('#countdown').countdown({ timestamp : ts, movement: 60 });
        </script>
    </body>
</html>