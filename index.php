<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/png" href="media/Favicon.svg"/>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <title> Home | Composey </title>

   <link rel="stylesheet" href="css/global.css">
   <link rel="stylesheet" href="css/index.css">

</head>

<body>
   <a id="top" href=""></a>

   <header id="header">
      <div class="logo">
         <a href="./">Composey</a>
      </div>
      <nav>
         <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./pages/portfolio.php">Portfolio</a></li>
            <li><a href="./pages/pricing.php">Pricing</a></li>
         </ul>
      </nav>
      <div class="contact">
         <a href="./pages/contact.php" class="contact-btn">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
         </a>
      </div>
   </header>

   <section class="banner">
      <div class="title">
         <span>Composey</span>
         <br>
         Composing a website based on <br> your alluring ideas
      </div>
      <div class="cta">
         <a class="portfolio-cta" href="./pages/portfolio.php">View our portfolio</a>
         <a class="contact-cta" href="./pages/contact.php">Get in touch</a>
      </div>
   </section>

   <main id="container">
      <section class="about-us">
         <div class="illus-wrapper">
            <img src="media/illustrations/team-spirit.svg" id="team-illus" alt="team-spirit">
         </div>

         <div class="line"></div>

         <div class="right-wrapper">
            <h1 class="title">who are we</h1>
            <div class="text">
               We are a group of web designers and developers dedicated to make your website ideas come true. 
               Along with that, we will provide you with the services required to successfully allow others 
               to view your website in all its glory.
            </div>
         </div>
         
      </section>

      <section class="portfolio">
         <div class="text-wrapper">
            <h1 class="title">our portfolio</h1>
            At Composey, we have worked with small business owners to help them digitalize their businesses  
         </div>
         
         <div class="image-wrapper">
            <div class="overlay">
               <a href="./pages/portfolio.php" class="portfolio-btn">explore our recent projects</a>
            </div>
         </div>
      </section>

      <section class="contact-us">
         <div class="illus-wrapper">
            <img src="./media/illustrations/lightbulb-moment.svg" id="lightbulb-illus" alt="lightbulb-moment">
         </div>

         <div class="right-wrapper">
            <h1 class="title">got an idea in mind? </h1>
            <div class="text">
               To better understand your needs and vision of a website, you can schedule 
               a free consultation session with our professional group.
            </div>
            <a href="./pages/contact.php" class="schedule-btn">Schedule consultation</a>
         </div>
      </section>
   </main>

   <footer id="footer">
      <div class="back-to-top">
         <a href="#top">
            <i class="fas fa-arrow-up"></i>
            Back to top
         </a>
      </div>

      <section>
         <div class="placeholder"></div>
   
         <nav>
            <ul>
               <li><a href="./">Home</a></li>
               <li><a href="./pages/portfolio.php">Portfolio</a></li>
               <li><a href="./pages/pricing.php">Pricing</a></li>
               <li><a href="./pages/contact.php">Contact</a></li>
            </ul>
         </nav>   
         
         <div class="contact-info">
            <div class="phone-info">
               <!-- <h2>Customer Service:</h2> -->
               <i class="fas fa-phone-alt"></i>
               <a href="https://wa.me/60162390913?text=Hello Composey!" class="phoneNo">016-239 0913</a>
            </div>
      
            <div class="email">
               <!-- <h2>Shoot us an email:</h2> -->
               <i class="fas fa-envelope"></i>
               <a href="mailto:hello@composey.com" class="email-addr">hello@composey.com</a>
            </div>
         </div>
         
         <div class="placeholder"></div>
      </section>

      <div class="copyright">
         &copy; 2021 Composey
      </div>
   </footer>
   

   
</body>

</html>