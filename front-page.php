<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css"/>


<!-- Compiled and minified JavaScript -->
	
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">
            <div style="margin: 40px 0;" class="row center-align">
            <div class="col s12">
                <h3>What we do</h3>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nemo saepe totam accusantium veritatis fuga, voluptatibus esse sint et fugiat at maiores eaque minima ratione itaque beatae a atque suscipit.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="video-container z-depth-2">
                <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>    

            <div class="divider"></div>
    <div class="row" style="margin-bottom: 0;">
    <h3 class="center-align">How we do it</h3>        
    <div class="col s12 m4">
      <div class="card">
        <div class="card-content" style="margin: 100px 0;">
          <span class="card-title center-align">
          <i class="fa fa-envelope"></i>
          </span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action" style="margin: 100px 0;">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-content" style="margin: 100px 0;">
          <span class="card-title center-align">
          <i class="fa fa-pencil"></i>
          </span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-content" style="margin: 100px 0;">
          <span class="card-title center-align">
          <i class="fa fa-paper-plane"></i>
          </span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>

   <div class="row center-align" style="margin-bottom: 50px;">
    <a href="#" class="read-more-button btn green">Get Started</a>  
   </div>

  <div class="divider"></div>
  
    <div class="row" style="margin: 100px 0;">
        <div class="col s12 m6 ">
            <div class="video-container z-depth-2">
                <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col s12 m6 center-align">
                <h3>Why we do it</h3>
                <h6 style="margin: 50px 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, asperiores ratione et id incidunt excepturi eveniet nemo tempora nostrum veniam quam nam fugit magni, quibusdam a ex! Consequatur, libero. Quas!</h6>
                <a href="#" class="btn green read-more-button">Click Here</a>
        </div>
            
    </div>
    <div class="divider"></div>

    <div style="margin-top: 50px; margin-bottom: 50px;" class="row center-align">
            <div class="col s12 m6">
                <h3 style="margin-bottom: 50px;">Contact Us</h3>
                <h5 style="margin: 50px 0;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nemo saepe totam accusantium veritatis fuga, voluptatibus esse sint et fugiat at maiores eaque minima ratione itaque beatae a atque suscipit.</h5>
                
            </div>    

        <div class="col s12 m6">
            <div class="row">
                <form class="col m8 offset-m2 s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="form-input">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="phone" class="materialize-textarea"></textarea>
                          <label for="message">Phone Number</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="message" class="materialize-textarea"></textarea>
                          <label for="message">Message</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col m12">
                         <a class="btn green read-more-button" name="action">Send Message</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
  </div>
        </div>
</div>
</div>
<script>
$(document).ready(function(){
    $('.modal').modal();
})
</script>

		</main><!-- .site-main -->
	</section><!-- .content-area -->
    <footer style="background-color: rgba(0, 0, 0, 0.808); height: 100px;">
    <div class="container" style="color: white !important;">
    <div class="row" style="margin-bottom: 0;">
        <div class="left">
        <h4>Content Cucumber</h4>
        </div>

        <div class="right" style="margin-top: 20px;">
        <a style="margin: 0 2.5px; color: white;" href="https://www.linkedin.com/company/content-cucumber" class="fa fa-linkedin"></a>
		<a style="margin: 0 2.5px;color: white;" href="https://www.facebook.com/CucumberContent/" class="fa fa-facebook"></a>
        <a style="margin: 0 2.5px;color: white;" href="https://twitter.com/contentcucumber?lang=en" class="fa fa-twitter"></a>
        <a style="margin: 0 10px 0 2.5px; color: white;" href="https://www.instagram.com/contentcucumber/?hl=en" class="fa fa-instagram"></a>
        </div> 
    
        

        <div class="modal" id="contact">
        <div class="row">
        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right"></span>
          </div>
        </div>
      </div>
    </form>
    </div>
</footer>

<style>

body {
   font-family: 'GlacialIndifferenceRegular';
   font-weight: normal;
   font-style: normal;
}
 /* Inactive/Active Default input field color */
 .input-field input[type]:not([readonly]),
    .input-field input[type]:focus:not([readonly]),
    .input-field textarea:not([readonly]),
    .input-field textarea:focus:not([readonly]) {
        border-bottom: 1px solid #58c558;
        box-shadow: 0 1px 0 0 #58c558;
    }

    /* Inactive/Active Default input label color */
    .input-field input[type]:focus:not([readonly])+label,
    .input-field textarea:focus:not([readonly])+label {
        color: #58c558;
    }

    /* Active/Inactive Invalid input field colors */
    .input-field input[type].invalid,
    .input-field input[type].invalid:focus,
    .input-field textarea.invalid,
    .input-field textarea.invalid:focus {
        border-bottom: 1px solid #58c558;
        box-shadow: 0 1px 0 0 #58c558;
    }

    /* Active/Inactive Invalid input label color */
    .input-field input[type].invalid:focus+label,
    .input-field input[type].invalid~.helper-text::after,
    .input-field input[type].invalid:focus~.helper-text::after, 
    .input-field textarea.invalid:focus+label,
    .input-field textarea.invalid~.helper-text::after,
    .input-field textarea.invalid:focus~.helper-text::after {
        color: #58c558;
    }

    /* Active/Inactive Valid input field color */
    .input-field input[type].valid,
    .input-field input[type].valid:focus,
    .input-field textarea.valid,
    .input-field textarea.valid:focus {
        border-bottom: 1px solid #58c558;
        box-shadow: 0 1px 0 0 #58c558;
    }

    /* Active/Inactive Valid input label color */
    .input-field input[type].valid:focus+label,
    .input-field input[type].valid~.helper-text::after,
    .input-field input[type].valid:focus~.helper-text::after,
    .input-field textarea.valid:focus+label,
    .input-field textarea.valid~.helper-text::after,
    .input-field textarea.valid:focus~.helper-text::after {
        color: #58c558;
    }

</style>