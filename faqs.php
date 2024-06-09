<?php session_start();
if(isset($_SESSION['uname']))
{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions</title>
    <link rel="icon" href="icons/main-logo.png">
    <link rel="stylesheet" href="about.css">
</head>
<?php include 'header.php'?>
<body>
<div class="faq-header">Frequently Asked Questions</div>

<div class="faq-content">
  <div class="faq-question">
    <input id="q1" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q1" class="panel-title">What features does your photo album gallery website offer?</label>
    <div class="panel-content">Our photo album gallery website provides a range of features including photo upload, organization, and management. Users can create albums, add descriptions, and view them in a slideshow format.</div>
  </div>
  
  <div class="faq-question">
    <input id="q2" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q2" class="panel-title">How can I upload photos to the gallery?</label>
    <div class="panel-content">Uploading photos to our gallery is simple. Once you're logged in, navigate to the "Create Albums" section on the sidebar (the sidebar button is located at the top right of the navbars), where you can either select individual photos or upload entire albums. Follow the prompts to add titles, descriptions, and tags to your photos for better organization.</div>
  </div>
  
  <div class="faq-question">
    <input id="q3" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q3" class="panel-title"> Can I organize my photos into albums?</label>
    <div class="panel-content">Absolutely! Our website allows users to create albums to better organize their photos. Simply go to the "Create Album" section, give your album a title and description, and start adding photos to it.<a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank"></a></div>
  </div>

  <div class="faq-question">
    <input id="q4" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q4" class="panel-title"> Is there a way to view photos in a slideshow?</label>
    <div class="panel-content">Yes, you can easily view photos in slideshow mode. Simply select the album or photos you want to view, and then click on the "Slideshow" button. Sit back and enjoy as your photos are beautifully presented in a sequential format.<a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank"></a></div>
  </div>

  <div class="faq-question">
    <input id="q5" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q5" class="panel-title">Is there a limit to the number of photos I can upload?</label>
    <div class="panel-content">Currently, we don't impose a strict limit on the number of photos you can upload. However, to ensure smooth performance for all users, we recommend optimizing your photos for web and avoiding excessively large file sizes.<a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank"></a></div>
  </div>

  <div class="faq-question">
    <input id="q6" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q6" class="panel-title">Who can access the photo album gallery website?</label>
    <div class="panel-content">Currently, access to our photo album gallery website is limited to users who have been granted access by the developers. This approach ensures that the website is used and tested by a controlled group before being made available to a wider audience. If you're interested in accessing the website, please reach out to the developers for further information on how to obtain access. We appreciate your understanding and patience as we work to refine and improve the user experience.<a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank"></a></div>
  </div>

</div>
</body>
<?php include 'footer.php'?>
</html>


<?php
}
else
{
header("location:login.php");
}
?>