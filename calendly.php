<?php
/**
 * Template Name: Calendly
 */
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link />
  <title>Demo</title>
  <style>
    body {
      font-family: 'Glacial Indifference'
    }
    h4 {
      margin: 0px;
    }
    .img {
        align-self: center;
    }
    .body {
      width: 100%
      color: rgb(53, 53, 53);
    }
    .img-container {
        margin: 30px;
    }
    .bio-container {
      background-color:#58c55855;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .content-container {
      margin: 20px 0px;
    }
    .bio-btn-container {
      text-align: left;
    }
    .bio-img {
      max-width: 250px;
      border-radius: 10%;
      margin: 20px;
    }
    .content-card {
      box-shadow: 0px 0px 5px 5px rgba(0, 0, 0, 0.11);
      padding: 10px;
      margin: 20px 0px;
    }
    .m-4 {
      margin: 4%;
    }
    @media only screen and (max-width: 600px) {
      .bio-container {
        display: inline;
      }
      .bio-img {
        margin: 0px;
      }
    }
  </style>
  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
  <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
</head>
<body>
  <div class="body">
    <div class="page">
      <div clas="m-4">
        <div class="bio-container card m-4">
          <div>
            <img class="bio-img" src="https://i.ibb.co/zxFct6B/chris-bio-image.png" alt="chris-bio-image" border="0">
          </div>
          <div class="bio-text-container">
            <h4>Book A Demo With Chris Chasteen</h4>
            <p>Hi, I'm Chris Chasteen, Co-founder of Content Cucumber. I help companies create and roll out awesome content marketing strategies. I started Cucumber because I found out first hand how tough getting a writer can be, and I wanted to make it easy. Content Cucumber can have your company set up with a carefully vetted, outrageously helpful writer in just 10 minutes. Book a call with me if you'd like to learn more.</p>
            <div id="gtm-schedule-demo-click-top" class="bio-btn-container">
              <a class="btn orange darken-2" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/chriscucumber/30min'});return false;">Schedule a Demo</a>
            </div>
          </div>
        </div>
      <div class="content-container m-4">
        <h3 class="center green-text">Content Cucumber FAQs</h3>
        <div class="content-card center">
          <h5>What Happens When I Sign Up?</h5>
          <p>When you sign up, we pair you with a writer from our talented US-based team. Your writer is selected based on their previous experience with industries similar to your own. You’ll work with that same writer on every project.</p>
        </div>
        <div class="content-card center">
          <h5 class="text-center">How Much Content Do I Get?</h5>
          <p>Content Cucumber is not about buying blogs at a “per article” rate, it’s more like having a writer on staff. You can request blogs, emails, and product descriptions from your writer on-demand, with most articles being delivered in 1-2 business days.</p>
        </div>
        <div class="content-card center">
          <h5 class="text-center">What Does This Cost?</h5>
          <p>Content Cucumber costs $490 per month. There are no contracts, no commitments, and no additional fees. You can make requests as soon as you sign up, and you are free to cancel anytime. </p>
        </div>
        <div class="content-card center">
          <h5 class="text-center">What If I Don’t Like It?</h5>
          <p>We are confident that adding a Content Cucumber writer to your team will supercharge your blog. But if for any reason you don’t love it, we offer a money back satisfaction guarantee. </p>
        </div>
      </div>
      <div id="gtm-schedule-demo-click-bottom" class="center m-4">
        <a class="btn green darken-2" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/chriscucumber/30min'});return false;">Schedule a Demo</a>
      </div>
    </div>
  </div>
</body>
</html>

<?php get_footer() ?>