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


<script src="https://js.chargebee.com/v2/chargebee.js" data-cb-site="contentcucumber" ></script>
<!-- Compiled and minified JavaScript -->
  
 
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">
            <div style="margin: 150px 0;" class="row">
            <div class="col s12 m6">
                <h3>We write blogs that grow businesses</h3>
                <h5>Don't worry about training, hiring, or freelancers.  Get teamed up with a writer that brings your blogs to life.</h5>
                <a style="margin: 10px 0;" href="<?php $id = 1234; echo get_page_link($id);?>" class="btn green darken-2">How it Works</a>
                <a style="margin: 10px;" href="<?php $id = 1197; echo get_page_link($id);?>" class="btn green darken-2 ">Pricing</a>

            </div>
            <div class="col s12 m6 right-align">
                <!--<img style="width: 350px; border-radius: 50%;" src="http://localhost/wordpress/wp-content/uploads/2019/12/600866_Blog-image-design_Op02_121219.png" alt="testing"> -->
                <?php echo wp_get_attachment_image( 26, array('350', '1000'), "", array( "class" => "" ) );  ?>
            </div>
        </div>

        <div class="row">
          <div class="col s12">

            

          </div>
        </div>
        
        <div class="row">
            <div class="col s12">
            <div class="video-container">
        <iframe width="400" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
            </div>
        </div>    

            <div class="divider"></div>
    <div class="row" style="margin-bottom: 0;">
    <h3 class="center-align">How we do it</h3>        
    <div class="col s12 m4">
      <div class="card">
        <div class="card-content center-align" style="margin: 100px 0;">
          <span class="card-title center-align">
          <?php echo wp_get_attachment_image( 25, array('125', '125'), "", array( "class" => "img-responsive" ) );  ?>
          </span>
          <h5>You Request</h5>
          <p>Describe what you'd like us to write.
Make unlimited requests and revisions.
Get blogs, emails, product descriptions, and more.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-content center-align" style="margin: 100px 0;">
          <span class="card-title center-align">
          <?php echo wp_get_attachment_image( 23, array('125', '125'), "", array( "class" => "img-responsive" ) );  ?>
          </span>
          <h5>We Create</h5>
          <p>Work with the same writer on every project.
Enjoy fast turnaround times.
Get content written by a real person.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-content center-align" style="margin: 100px 0;">
          <span class="card-title">
          <?php echo wp_get_attachment_image( 24, array('125', '125'), "", array( "class" => "img-responsive" ) );  ?>
          </span>
          <h5>You Receive</h5>
          <p>Build a loyal audience of readers.
Grow your business.
Create content that makes the internet a better place</p>
        </div>
      </div>
    </div>
  </div>

   <div class="row center-align" style="margin-bottom: 50px;">
    <a href="<?php $id = 1197; echo get_page_link($id);?>" class="read-more-button btn green darken-2">Get Started</a>  
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
                <a href="#" class="btn green darken-2">Click Here</a>
        </div>
            
    </div>
    <div class="divider"></div>

    <div style="margin-top: 50px; margin-bottom: 50px;" class="row center-align">
            <div class="col s12">
                <h3 style="margin-bottom: 50px;">Schedule a Demo</h3>
                
                
       
            <h5 class="center-align" style="margin: 50px 0;">Learn how our clients use Content Cucumber to grow their businesses. Schedule a call with us today!</h5>
                <a href="https://calendly.com/chriscucumber/30min" class="btn green darken-2 read-more-button">Click Here</a>
                
       
                    </div>
                </form>
            </div>

            <div class="row center-align">
            <div class="col s12 m4">
      <div class="card">
        <div class="card-content" style="margin: 100px 0;">
          <span class="card-title center-align">
          <img style="border-radius: 50%; height: 75px; width: 75px;" src="http://localhost/wordpress/wp-content/uploads/2019/12/0.png" alt="">
          </span>
          <p>"I love it! it's me.....but better! Me on writing steroids! Exactly what I wanted. I'm so appreciative of your collective talents. Thank you sincerely! "</p>
          <p><i>-Jul, Mandala Dream Co</i></p>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-content" style="margin: 100px 0;">
          <span class="card-title center-align">
          <img style="border-radius: 50%; height: 75px; width: 75px;" src="http://localhost/wordpress/wp-content/uploads/2019/12/twitter.png" alt="">
          </span>
          <p>"Content Cucumber has helped us to implement a seamless content strategy for our website. Their writers have gone the extra mile to research topics and deliver exceptional content. They have dived into topics that are technical, cultural and marketing related! They are quick, professional, and most of all, fantastic writers!"</p>
          <p><i>-Brent, Wagento</i></p>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-content" style="margin: 100px 0;">
          <span class="card-title center-align">
          <img style="border-radius: 50%; height: 75px; width: 75px;" src="http://localhost/wordpress/wp-content/uploads/2019/12/twitter.png" alt="">
          </span>
          <p>"Content Cucumber is an invaluable asset to Payflic’s content creation efforts. They are extremely professional and competent writers who take the time to understand your business and its audience... These guys are always prepared to discuss our ever changing objectives and aims. They just ‘get’ what we are trying to say to our audience."</p>
          <p><i>-Ben, Payflic</i></p>
        </div>
      </div>
    </div>
  </div>
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

    #menu-header {
      padding: 25px;
    }

 
    #menu-header-1 {
      margin-top: 50px;
    }
   

    #colophon {
      display: none;
    }
    .card .card-content {
      height: 400px;
    }
</style>

<?php
get_footer();
?>
<footer class="green darken-2" style=" height: 100px;">
    <div class="container" style="color: white !important;">
    <div class="row" style="padding: 10px; 30px; margin-bottom: 0;">
        <div class="col s8">
        <h4>Content Cucumber</h4>
        </div>

        <div class="col s4 right-align" style="margin-top: 30px;">
        <a style="margin: 0 2.5px; color: white;" href="https://www.linkedin.com/company/content-cucumber" class="fa fa-linkedin"></a>
		<a style="margin: 0 2.5px;color: white;" href="https://www.facebook.com/CucumberContent/" class="fa fa-facebook"></a>
        <a style="margin: 0 2.5px;color: white;" href="https://twitter.com/contentcucumber?lang=en" class="fa fa-twitter"></a>
        <a style="margin: 0 10px 0 2.5px; color: white;" href="https://www.instagram.com/contentcucumber/?hl=en" class="fa fa-instagram"></a>
        </div> 
    
  
</footer>