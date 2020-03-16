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



<script src="https://js.chargebee.com/v2/chargebee.js" data-cb-site="contentcucumber"></script>
<!-- Compiled and minified JavaScript -->


<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="container">
      <div style="margin: 10vh 0;" class="intro">
        <div style="max-width: 500px;" class="">
          <h3 class="test" style="font-family: 'GlacialIndifferenceRegular';">We write blogs that grow businesses</h3>
          <h5>Don't worry about training, hiring, or freelancers. Get teamed up with a writer that brings your blogs to life.</h5>
          <a style="margin: 10px 0;" href="<?php $id = 712;
                                            echo get_page_link($id); ?>" class="btn green darken-2">How it Works</a>
          <a style="margin: 10px 0;" href="<?php $id = 11;
                                            echo get_page_link($id); ?>" class="btn green darken-2 ">Pricing</a>

        </div>
        <div class="intro-image-container">
          <img class="intro-image" src="<?php echo get_template_directory_uri(); ?>/images/homepage.png" width="400" height="400" alt="" />
        </div>
      </div>


      <div class="row">
        <div class="col s12">



        </div>
      </div>

      <div class="row">
        <div class="col s12">
          <div class="video-container">
            <iframe width="400" height="480" src="https://www.youtube.com/embed/COK8Rcsxfj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="divider"></div>
      <div class="row" style="margin-bottom: 50px; margin-top: 50px;">
        <h3 class="center-align" style="margin-bottom: 50px;">How we do it</h3>
        <div class="col s12 m4">
          <div class="">
            <div class="card-content center-align" style="">
              <span class="card-title center-align">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/you_request.png" width="125" height="125" alt="" />
              </span>
              <h5>You Request</h5>
              <div class="divider"></div>
              <p>
              Describe what you'd like us to write. <br>
              Make unlimited requests and revisions. <br>
              Get blogs, emails, product descriptions, and more. </p><br>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="">
            <div class="card-content center-align" style="">
              <span class="card-title center-align">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/we_create.png" width="125" height="125" alt="" />
              </span>
              <h5>We Create</h5>
              <div class="divider"></div>
              <p>Work with the same writer on every project.<br>
                Enjoy fast turnaround times.<br>
                Get content written by a real person.</p><br>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="">
            <div class="card-content center-align" style="">
              <span class="card-title">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/you_receive.png" width="125" height="125" alt="" />
              </span>
              <h5>You Receive</h5>
              <div class="divider"></div>
              <p>Build a loyal audience of readers. <br>
                Grow your business. <br>
                Create content that makes the internet a better place.</p> <br>
            </div>
          </div>
        </div>
      </div>

      <div class="row center-align" style="">
        <a style="margin-bottom: 50px;" href="<?php $id = 11;
                                              echo get_page_link($id); ?>" class="btn green darken-2">Get Started</a>
      </div>


      <div class="divider"></div>



      <div style="margin-top: 50px; margin-bottom: 50px;" class="row">
        <h3 class="center-align" class="margin-bottom: 50px; margin-top: 50px;">Testimonials</h3>
        <div class="col  m4 s12 right-align">
          <div class="card-image valign-wrapper center-align" style="margin: auto; margin-top: 25px;">
          <?php echo wp_get_attachment_image(719, array('125', '125'), "", array("class" => "img-responsive"));  ?>
          </div>
          <div class="">
            <p class="left-align">"I love it! it's me.....but better! Me on writing steroids! Exactly what I wanted. I'm so appreciative of your collective talents. Thank you sincerely! "</p>
            <p class="right-align"><i>-Jul, Mandala Dream Co</i></p>
          </div>
        </div>

        <div class="col m4  s12 right-align">

          <div class="card-image valign-wrapper" style="margin: auto; margin-top: 25px;">
          <?php echo wp_get_attachment_image(720, array('125', '125'), "", array("class" => "img-responsive"));  ?>
          </div>
          <div class="">
            <p class="left-align">"Content Cucumber is an invaluable asset to Payflic’s content creation efforts. They are extremely professional and competent writers who take the time to understand your business and its audience... These guys are always prepared to discuss our ever changing objectives and aims. They just ‘get’ what we are trying to say to our audience."</p>
            <p class="right-align"><i>-Ben, Payflic</i></p>
          </div>
        </div>
        <div class="col  m4 s12">
          <div class="card-image valign-wrapper" style="margin: auto; margin-top: 25px;">
          <?php echo wp_get_attachment_image(721, array('125', '125'), "", array("class" => "img-responsive"));  ?>
          </div>
          <div class="">
            <p class="left-align">"Content Cucumber has helped us to implement a seamless content strategy for our website. Their writers have gone the extra mile to research topics and deliver exceptional content. They have dived into topics that are technical, cultural and marketing related! They are quick, professional, and most of all, fantastic writers!"</p>
            <p class="right-align"><i>-Brent, Wagento</i></p>
          </div>
        </div>
      </div>

      <div class="divider"></div>
      <div style="margin-top: 50px; margin-bottom: 50px;" class="row center-align">
        <div class="col s12">
          <h3 style="margin-bottom: 50px;">Schedule a Demo</h3>



          <h5 class="center-align" style="margin: 50px 0;">Learn how our clients use Content Cucumber to grow their businesses. Schedule a call with us today!</h5>
          <a href="https://calendly.com/chriscucumber/30min" class="btn green darken-2">Click Here</a>


        </div>
  </form>
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
    </div>
    

  </main><!-- .site-main -->
</section><!-- .content-area -->


<style>
  @media screen and (max-width: 650px) {

    .intro {
      display: block !important;
      margin: 0 !important;
    }

    .intro-image-container {
      width: 100%;
    }

    .intro-image {
      margin: auto;
    }
  }

  .intro {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  body {
    font-family: 'GlacialIndifferenceRegular' !important;
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



  .card {
    min-height: 400px !important;
  }

  .card-image {
    width: 150px;
    height: 125px;
  }
  /* label focus color */
  input[type=text]:focus + label {
     color: #4caf50 !important;
}
/* label underline focus color */
   input[type=text]:focus {
     border-bottom: 1px solid #4caf50 !important;
     box-shadow: 0 1px 0 0 #4caf50 !important;
   }
</style>

<div class="modal-test" id="modal">
  <div class="modal-header">
    <div class="title">Weekly Newletter Sign Up</div>
    <a class="btn green darken-2 close-button" onclick="window.closeModal(modal)" value="">
        <i class="large material-icons">clear</i>
  </a>
    
  </div>
  
  <div class="modal-body" id="modal-body">
  <form class="ajax" id="form"action="" method="post">

<input type="text" name="first_name" id="first_name" placeholder="Your first name"> <br>
<input type="text" name="last_name" id="last_name" placeholder="Your last name"> <br>
<input class="validate" type="text" name="email" id="email" placeholder="Your email"> <br>
<input type="text" name="phone" id="phone" placeholder="Your phone"> <br>
<a class="btn green darken-2" id="sign-up" type="submit" value="submit">Sign Up</a>
<p class="serverResponse"></p>
</form>
  </div>
</div>
<div class="overlay" id="overlay"></div>

  

<style>
/* modal stylings */
.modal-test {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0);
  transition: 200ms ease-in-out;
  border: 1px solid green;
  z-index: 10;
  background-color: white;
  width: 500px;
  max-width: 80%;
}

.modal-test.active {
  transform: translate(-50%, -50%) scale(1);
}
.modal-header {
  padding: 10px 15px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid green;
}

.modal-header.title {
  font-size: 1.25rem;
  font-weight: bold;
}

.modal-header .close-button {
  cursor: pointer;
  border: none;
  outline: none;
  /*background: none;*/
  font-size: 1.25rem;
  font-weight: bold;
}


.modal-body {
  padding: 10px 15px;
}

#overlay {
  transition: 200ms ease-in-out;
  position: fixed;
  opacity: 0;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, .5);
  pointer-events: none;
}

#overlay.active {
  pointer-events: all;
  opacity: 1;

}
</style>

<?php
get_footer();
?>