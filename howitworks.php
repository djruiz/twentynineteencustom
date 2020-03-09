<?php
/* Template Name: How it Works */
/**
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
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

//get_header();
?>


<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/glacial-indifference" type="text/css"/>

<script>
     $(document).ready(function(){
    $('.collapsible').collapsible();
  });
</script>
<script src="https://js.chargebee.com/v2/chargebee.js" data-cb-site="contentcucumber" ></script>
<!-- Compiled and minified JavaScript -->  
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container" style="margin-bottom: 100px;">
            <div style="margin-top: 80px" class="row center-align">
                <h3>Hire a writer for $490/Month </h3>
                <p>Get a dedicated writer. Request written content. Make unlimited requests and revisions. </p>
                <iframe width="100%" height="543" src="https://www.youtube.com/embed/ba2MUHESdw8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <ul class="collapsible">
    <li>
    <div class="collapsible-header">
      <?php echo wp_get_attachment_image( 716, array('50', '50'), "", array( "class" => "img-responsive" ) );  ?>  
      <p style="margin: 10px;">How Much Content Do I Get? </p>
    </div>
      <div class="collapsible-body left-align"><span>
        <p>Content Cucumber is not about buying blogs at a “per article” rate, it’s more like having a writer on staff. You can request blogs, emails, and product descriptions from your writer on-demand, with most articles being delivered in 1-2 business days. 
</p>
      </span></div>
    </li>
    <li>
    <div class="collapsible-header">
      <?php echo wp_get_attachment_image( 30, array('50', '50'), "", array( "class" => "img-responsive" ) );  ?>
      <p style="margin: 10px;">Who Chooses the Topics?</p>
    </div>
      <div class="collapsible-body left-align"><span>
        <p>You do! Your writer can definitely pitch in with ideas, but we encourage clients to provide some collaborative input, as this results in the best, most authentically interesting content. </p>
      </span></div>
    </li>
    <li>
    <div class="collapsible-header">
      <?php echo wp_get_attachment_image( 715, array('50', '50'), "", array( "class" => "img-responsive" ) );  ?> 
      <p style="margin: 10px;">What Can Content Cucumber Write About? </p>
    </div>
      <div class="collapsible-body left-align"><span>
        <p>The most common requests we receive are for blogs and email newsletters. Because of this, those are the content formats our writers have the most experience with. However, our team is full of smart and creative people who are always eager to take on a new challenge.

A good rule to follow: if you need something a bit unconventional, just ask your writer what they think is feasible. They’re the real on-the-ground experts, and they’ll give you an honest answer! 

If you are not a client and would like to discuss what a special project might look like, we recommend scheduling a <a class="green-text" href="https://calendly.com/chriscucumber/30min">call</a> with Chris, our Co-Founder and Onboarding Specialist. 
 </p>
      </span></div>
    </li>
    <li>
    <div class="collapsible-header">
      <?php echo wp_get_attachment_image( 33, array('50', '50'), "", array( "class" => "img-responsive" ) );  ?>
      <p style="margin: 10px;">How Do the Copyrights Work? </p>
    </div>
      <div class="collapsible-body left-align"><span>
        <p>You are the owner of all creative work produced by Content Cucumber. You can publish it, sell it, distribute it, etc. however you wish. Work is typically delivered as a dynamic Google Docs file, which makes further revisions and collaboration easy! </p>
      </span></div>
    </li>
    <li>
    <div class="collapsible-header">
      <?php echo wp_get_attachment_image( 31, array('50', '50'), "", array( "class" => "img-responsive" ) );  ?>  
      <p style="margin: 10px;">How do I Request a Revision?</p>
    </div>
      <div class="collapsible-body left-align"><span>
        <p>
          Good custom content is a collaborative process, and sometimes writers and clients don’t see eye to eye on the first draft. That’s OK - in fact, it’s an important part of the process. That’s why we offer free, unlimited revisions.You can request a revision in one of 3 ways. 

1. Ask your writer in the comment thread of the original request.
2. Submit a new request explaining that you want a revision and providing feedback. 
3. Send an email to your writers’ @contentucumber email. 
      </p>    
      </span></div>
    </li>
    <li>
    <div class="collapsible-header">
      <?php echo wp_get_attachment_image( 1144, array('50', '50'), "", array( "class" => "img-responsive" ) );  ?> 
      <p style="margin: 10px;">What If I Don’t Like It?</p>
    </div>
      <div class="collapsible-body left-align"><span>
        <p>
        We are confident that adding a Content Cucumber writer to your team will supercharge your blog. But if for any reason you don’t love it, we offer a 14-day money back satisfaction guarantee.

        </p>
      </span></div>
    </li>
  </ul>
            </div>



                  <div class="row center-align" style="">
                      <a style="margin-bottom: 50px;" href="<?php $id = 11; echo get_page_link($id); ?>" class="read-more-button btn green darken-2">Pricing</a>
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

    
  
</style>


<?php
get_footer();
?>