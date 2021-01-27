<?php
/**
 * Homepage template
 * Template Name: Task 1
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *
 */
?>
<?php
get_header();
?>
<div class="container">
  <section class="section_1 narrow-view">
    <h1> <span>Inspire others </span> with your packaging design </h1>
    <p> Create a case study about your brand and packaging with Packhelp</p>
    <a class="btn-primary"> Share your story</a>
  </section>

  <section class="section_2">
    <div class="narrow-view">
      <h3> Let's grow together </h3>
      <p> Start as a newcomer partner and go through our commission tiers up to the brand partner!</p>
    </div>
    <div class="options">
      <div class="option">
        <h4>€35</h4>
        <h5 class="__option1"> Newcomer partner </h5>
        <p> Receive €35 each time your referral orders from us. </p>
      </div>
      <div class="option">
        <h4>€45</h4>
        <h5 class="__option2">Advanced partner </h5>
        <p> Bring 50 new customers and we'll raise your commission to €45 for each new customer </p>
      </div>
      <div class="option">
        <h4>€65</h4>
        <h5 class="__option3"> Brand partner </h5>
        <p> Hit the magic 100 referred customers and raise toyr commisson to €65 for each new customer from your referral link. </p>
      </div>
    </div>
    <a id="modalBtn" class="btn-primary"> Apply now </a>
  </section>

  <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/../../../images/modalcropped.png" alt="theme logo" />
    </div>
    <h2>A few details first</h2>
  <hr>

  <form action="">
  <label for="fname">First name</label><br>
  <input type="text" id="fname" name="fname"><br>

  <label for="lname">Last name</label><br>
  <input type="text" id="lname" name="lname"><br><br>

  <label for="email">Email</label><br>
  <input type="text" id="email" name="email"><br><br>
  <a class="close btn-secondary"> Cancel </a>
  <Button class="btn-primary"> Sign in </Button>
</form>

  </div>

</div>

  <!--<div id="modalsection">
  </div>-->
  
</div>
<?php
get_footer();
?>
