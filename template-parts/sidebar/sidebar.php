<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentynineteen' ); ?>">
    <?php
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        ?>
                <div class="widget-column footer-widget-1">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>
            <?php
    }
    ?>
</aside><!-- .widget-area -->

<?php endif; ?>
<div style="padding: 10px;" class="card">

    <div class="card-content">
    <div class="card-title">Newletter Sign Up</div>
<form  class="ajax" id="form"action="" method="post">
    
        <input type="text" name="first_name" id="first_name" placeholder="Your first name"> <br>
        <input type="text" name="last_name" id="last_name" placeholder="Your last name"> <br>
        <input type="text" name="email" id="email" placeholder="Your email"> <br>
        <input type="text" name="phone" id="phone" placeholder="Your phone"> <br>
        <input class="green darken-2 btn" type="submit" onclick="contact(event)" value="Send"> <br>
        <p class="serverResponse"></p>
      </form>
</div>
</div>
<style>

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