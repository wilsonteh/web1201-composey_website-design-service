<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/png" href="../media/Favicon.svg"/>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <title> Contact | Composey </title>

   <!-- Cache issue, the code will force css file to reload -->
   <link rel="stylesheet" href="../css/global.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="../css/contact.css?v=<?php echo time(); ?>">

</head>

<body>
   <a id="top" href=""></a>

   <header id="header">
      <div class="logo">
         <a href="../">Composey</a>
      </div>
      <nav>
         <ul>
            <li><a href="../">Home</a></li>
            <li><a href="../pages/portfolio.php">Portfolio</a></li>
            <li><a href="../pages/pricing.php">Pricing</a></li>
         </ul>
      </nav>
      <div class="contact">
         <a href="../pages/contact.php" class="contact-btn">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
         </a>
      </div>
   </header>

   <section id="banner">
      <div class="overlay"></div>
      <img src="../media/two-person.jfif" id="banner-pic" alt="two-person-discussing">

      <h1 class="title">Let's get in <span>touch</span>!</h1>      
      <p class="para">
         Express your ideas with our experienced developers <br>  
         We would like to hear from you. 
      </p>
   </section>

   <br>

   
   <main>
      <div class="illus-wrapper">
         <h1>Contact us today</h1>
         <p>
            Get your project started right away!
         </p>
         
         <img src="../media/illustrations/contact-us.svg" id="contact-illus" alt="contact-us">
      </div>

      <form id="contact-form" action="contact.php" method="POST" >
         <label for="name-field">Name: </label>
         <input type="text" name="name" id="name-field" placeholder="Your Name" required minlength="3">
         <small id="name-error"></small>
         
         <label for="salutation-field">Salutation: </label>
         <select name="salutation" id="salutation-field" required > 
            <option value="">--Select Salutation--</option>
            <option value="mr">Mr.</option>
            <option value="mrs">Mrs.</option>
            <option value="ms">Ms.</option>
            <option value="dr">Dr.</option>
         </select>
         <small id="salutation-error"></small>
         
         <label for="name-field">Company: </label>
         <input type="text" name="company" id="company-field" placeholder="Company Name (optional)" >
         <small id="company-error"></small>
         
         <label for="email-field">Email: </label>
         <input type="email" name="email" id="email-field" placeholder="example@email.com" required>
         <small id="email-error"></small>
         
         <label for="phone-field">Phone Number: </label>
         <input type="tel" name="phoneNo" id="phone-field" placeholder="016 290 3099" required pattern="[0-9]{3} [0-9]{3} [0-9]{4}">
         <small id="phone-error"></small>
         
         <label>Preferred method of contact: </label>
         <div class="radio-wrapper">
            <input type="radio" name="preferredContact" id="email-radio" required>
            <label for="email-radio">Email</label>
            
            <input type="radio" name="preferredContact" id="phone-radio" required>
            <label for="phone-radio">Phone</label>
         </div>
         <small id="preferred-error"></small>
         
         <label for="message-field">Message: </label>
         <textarea name="message" id="message-field" cols="30" rows="5" minlength="10" 
            placeholder="Briefly describe your website request..." required></textarea>
         <small id="msg-error"></small>

         <input type="submit" value="Submit" class="submit-btn">

      </form>
      
      <!-- Show confirmation msg when form has been submitted -->
      <?php if (isset($_POST['name'])) { ?>
         <div class="dialog-overlay">
            <div class="dialog-box">
               <div class="modal-header">
                  <h3 class="modal-title">Form Submitted</h3>
                  <i class="fas fa-times close-btn"></i>
               </div>
               <hr>
               <div class="modal-body">
                  <p>
                     Thanks for contacting us, <strong><?php echo ucfirst($_POST['name']) ?></strong>. 
                     <br>
                     Please allow up to 48 hours for us to get back to you. 
                  </p>
               </div>
               <hr>
               <div class="modal-footer">
                  <button class="confirm-btn">Confirm</button>
               </div>
            </div>
        </div>
      <?php } ?>

    
      
   
   </main>

   <br>

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
               <li><a href="../">Home</a></li>
               <li><a href="../pages/portfolio.php">Portfolio</a></li>
               <li><a href="../pages/pricing.php">Pricing</a></li>
               <li><a href="../pages/contact.php">Contact</a></li>
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


   <script src="../js/formValidation.js"></script>
   <script src="../js/contact.js"></script>
   
</body>

</html>