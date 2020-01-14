<?php /* Template Name: Account */ ?>
<?php

    get_header();

?>




<div class="container">
    <h3>Manage Account</h3>
    <div class="row">
        <div class="col m6 s12">
        <h4>
            Make a Request
        </h4>
            <div class="divider"></div>
            <p>
                Go to Jarhq where you can make content requests.
                
            </p>
            <a href = "https://app.jarhq.com"  class="btn green darken-2"  > Make a Request </a>
        </div>
    <div class="col m6 s12">
        <h4>
            Edit Subscription
        </h4>
        <div class="divider"></div>
        <p>
            Edit payment details or cancel account.
        </p>
        <a href = "javascript:void(0)"  class="btn green darken-2" data-cb-type = "portal" > Edit Subscription </a>
    </div>
    </div>
</div>
<?php
get_footer();
?>
