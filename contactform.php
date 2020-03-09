<?php
/**
 * The main template file
 * Template Name: Contact Form
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


    <form class="ajax" id="form"action="" method="post">
        <input type="text" name="first_name" id="first_name" placeholder="Your first name"> <br>
        <input type="text" name="last_name" id="last_name" placeholder="Your last name"> <br>
        <input type="text" name="email" id="email" placeholder="Your email"> <br>
        <input type="text" name="phone" id="phone" placeholder="Your phone"> <br>
        <input type="submit" onclick="contact(event)" value="Send"> <br>
        <p class="serverResponse"></p>
    </form>

    

    <script>
    
        
        function contact(e){
            e.preventDefault();

            var firstName = document.getElementById("first_name").value;
            var lastName = document.getElementById("last_name").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("email").value;

            var contact =  { firstName, lastName, phone, email}
            
            fetch("http://api.contentcucumber.com/services/marketing/add-contact", {
                method: "POST", 
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({contact})
            })
            
        
        }
            

    </script>
       
<style>

    .form-messages {
        background-color: grey;
        border: 1px solid red;
        display: block;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 10px;
        padding: 10px 25px;
        max-width: 250px;
    }

</style>