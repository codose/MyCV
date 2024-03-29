<!DOCTYPE html>
<html>

<head>
   <title>Osemwingie Oshodin CV</title>

   <meta name="viewport" content="width=device-width" />
   <meta name="Author" content="Osemwingie Oshodin"/>
	<meta name="keywords" content="CV Resume">
	
	<meta name="description" content="Osemwingie's CV, detailed description of Skills, past Jobs, Educational and Experiences">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://codose.000webhostapp.com">
    <meta property="og:title" content="Osemwingie Oshodin's CV">
    <meta property="og:description" content="Osemwingie's CV, detailed description of Skills, past Jobs, Educational and Experiences">
    <meta property="og:image" content="https://res.cloudinary.com/codose/image/upload/v1566608150/StartNg%20Task2/codose_ttpjnz.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://codose.000webhostapp.com">
    <meta property="twitter:title" content="@codose_">
    <meta property="twitter:description" content="Osemwingie's CV, detailed description of Skills, past Jobs, Educational and Experiences">
    <meta property="twitter:image" content="https://res.cloudinary.com/codose/image/upload/v1566608150/StartNg%20Task2/codose_ttpjnz.jpg">
   <meta charset="UTF-8">

   <link type="text/css" rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
   <script src="js/main.js"></script>
</head>

<body id="top">
   <div id="page">
      <div class="cv-head">
         <div id="dp">
            <img src="https://res.cloudinary.com/codose/image/upload/v1566608150/StartNg%20Task2/codose_ttpjnz.jpg" alt="Profile image">
         </div>

         <div id="name">
            <h1>Osemwingie Oshodin</h1>
            <h2>Android and web developer</h2>
            <div id="contact">
               <ul>
                  <li>Tel: +2348165757132</li>
                  <li>Email: <a href="mailto:osemwingieoshodin@gmail.com" target="_blank">osemwingieoshodin@gmail.com</a>
                  </li>
                  <li><a href="https://twitter.com/codose_">Twitter: @codose</a> </li>
                  <li><a href="https://github.com/codose">Github.com/codose</a></li>
               </ul>
            </div>
         </div>


         <div class="clear"></div>
      </div>

      <div id="cv-body">

         <section>
            <div class="col-title">
               <h1>Skills</h1>
            </div>
            <div class="col-description">
               <table class="skills">
                  <tr>
                     <th>Skill</th>
                     <th><i>Proficiency Level</i></th>
                  </tr>
                  <tr>
                     <td>Microsoft apps and tools</td>
                     <td><i>Advanced</i></td>
                  </tr>
                  <tr>
                     <td>Adobe Illustrator and Photoshop</td>
                     <td><i>Intermediate</i></td>
                  </tr>
                  <tr>
                     <td>Android Development</td>
                     <td><i>Intermediate</i></td>
                  </tr>
                  <tr>
                     <td>Html and CSS</td>
                     <td><i>Advanced</i></td>
                  </tr>
                  <tr>
                     <td>Python</td>
                     <td><i>Intermediate</i></td>
                  </tr>
                  <tr>
                     <td>Google Digital Skills</td>
                     <td><i>Advanced</i></td>
                  </tr>
               </table>
            </div>
            <div class="clear"></div>
         </section>

         <section>
            <div class="col-title">
               <h1>Education</h1>
            </div>

            <div class="col-description">
               <article>
                  <h2>Immaculate Conception college</h2>
                  <p class="cvDetails"></p>
                  <p>2007-2008</p>
               </article>
               <article>
                  <h2>Kalac Loyola secondary school</h2>
                  <p class="cvDetails"></p>
                  <p>2008-2013</p>
               </article>
               <article>
                  <h2>Obafemi Awolowo University</h2>
                  <p class="cvDetails">BSc. Food Science and technology (in view)</p>
                  <p>2015-2020</p>
               </article>
            </div>
            <div class="clear"></div>
         </section>
         <section>
            <div class="col-title">
               <h1>Work Experience</h1>
            </div>

            <div class="col-description">
               <article>
                  <h2>Website Maintenance</h2>
                  <p class="cvDetails">July 2019 - Present</p>
                  <p>Website Maintenance at NAFSTS, OAU</p>
               </article>
               <article>
                  <h2>Team Project at HNG pre-Internship</h2>
                  <p class="cvDetails">August 2019 - Present</p>
                  <p>Worked on a mobile app for a fictional resturant.</p>
               </article>
            </div>
            <div class="clear"></div>
         </section>
         <button class="open-button" onclick="openForm()">Contact Me</button>
      </div>
   </div>
   <div class="popup" id="contactForm">

      <form name="contact" method="POST" onsubmit="return validateForm()">
         <h1>Contact Me</h1>
         <input name="name" id="name-input" type="text" class="feedback-input" placeholder="Name" required="required" onblur="validate('name-input', 'check', 4, 'Name', 'Four')">
         <span id='check' class='check'></span>
         <input name="email" id="email" type="email" class="feedback-input" placeholder="Email" required="required" onblur="return validMail()" />
         <span id="mCheck" class="check"></span>
         <input name="title" type="text" class="feedback-input" placeholder="Title" required="required" />
         <textarea name="message" id="message" class="feedback-input" placeholder="Message" required="required" onblur="validate('message', 'check2', 20, 'Message', 'Twenty')"></textarea>
         <span id='check2' class='check'></span>
         <button type="submit" class="btn-submit">Submit</button>
         <div>
            <button type="button" class="btn-cancel" onclick="closeForm()">Close</button>
         </div>

      </form>
      <?php
      if (isset($_POST['name'])) {
         $name = $_POST['name'];
         $email = $_POST['email'];
         $message = $_POST['message'];
         $title = $_POST['title'];

         $data = "<b>Name:</b> $name <br> <b>Email:</b> $email <br> <b>Title:</b> $title <br><b>Message:</b>$message <br> <hr>";
         $fp = fopen('data.html', 'a');
         fwrite($fp, $data);
         fclose($fp);
         echo "<script type='text/javascript'>alert('Your message has been received, I will get back to you soon')</script>";
      }

      ?>
   </div>

</body>

</html>
