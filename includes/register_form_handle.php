<link rel='stylesheet' href='./css/style_handle.css' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Lora|Montserrat|Source+Code+Pro" rel="stylesheet">
<?php

$errors_array = array();
$full_name = '';
$password_field = '';
$email_field = '';
$comments = '';
$color_select_field = '';
$font_field = '';
$checkbox_buttons_field = array();
$text_field = '';
$radio_buttons_field = '';
$checkbox_buttons_field_2 = '';

// These error messages will not display because their
// input elements are required and will not allow the form
// to be submitted without filling them in
if(!empty($_POST['full_name'])&&is_string($_POST['full_name'])) {
  $full_name = htmlspecialchars(add_slashes($_POST['full_name']));
}else{
  $errors_array['full_name'] = "Please enter a valid text field entry!";
}

if(!empty($_POST['password_field'])) {
  $password_field = htmlspecialchars(add_slashes($_POST['password_field']));
}else{
  $errors_array['password_field'] = "Please enter a valid password field entry!";
}

if(!empty($_POST['email_field'])&&filter_var($_POST['email_field'], FILTER_VALIDATE_EMAIL)) {
  $email_field = htmlspecialchars(add_slashes($_POST['email_field']));
}else{
  $errors_array['email_field'] = "Please enter a valid email address entry!";
}

if(!empty($_POST['comments'])&&is_string($_POST['comments'])) {
  $comments = htmlspecialchars(add_slashes($_POST['comments']));
}else{
  $errors_array['comments'] = "Please enter a valid text field entry!";
}

if(isset($_POST['color_select_field'])&&is_string($_POST['color_select_field'])) {
  $color_select_field = $_POST['color_select_field'];
}else{
  $errors_array['color_select_field'] = "Please enter a valid color selection entry!";
}

if(isset($_POST['font_field'])) {
  $font_field = $_POST['font_field'];
}else{
  $errors_array['font_field'] = "Please enter a valid pull down menu selection!";
}

if(isset($_POST['checkbox_buttons_field'])) {
  $checkbox_buttons_field = $_POST['checkbox_buttons_field'];
}else{
  $errors_array['checkbox_buttons_field'] = "Please make a valid selection from the first checkmark box category!";
}

// Error messages for optional field elements
if(!empty($_POST['text_field'])&&is_string($_POST['text_field'])) {
  $text_field = htmlspecialchars(add_slashes($_POST['text_field']));
}else{
  $errors_array['text_field'] = "Please enter a valid text field entry!";
}

if(isset($_POST['radio_buttons_field'])&&is_string($_POST['radio_buttons_field'])) {
  $radio_buttons_field = $_POST['radio_buttons_field'];
}else{
  $errors_array['radio_buttons_field'] = "Please enter a valid radio selection entry!";
}

if(isset($_POST['checkbox_buttons_field_2'])) {
  $checkbox_buttons_field_2 = $_POST['checkbox_buttons_field_2'];
}else{
  $errors_array['checkbox_buttons_field_2'] = "Please make a valid selection from the second checkmark box category!";
}

function add_slashes($data){
  if(get_magic_quotes_gpc()) $data = stripslashes($data);
  return addslashes($data);
}

function strip_slashes($data){
  return stripslashes($data);
}

?>
<section id='results'>
  <div>
    <fieldset>
      <legend class='form_title_legend'>User Information</legend>
      <!--This is a text field input-->
      <p class='results_label'>Full name:</p>
      <div id='div_name' class='div_results'><?php print_r($full_name) ?></div>

      <!--This is a password field input-->
      <p class='results_label'>Password:</p>
      <div id='div_password' class='div_results'><?php print_r($password_field) ?></div>

      <!--This is a email entry field-->
      <p class='results_label'>Email address:</p>
      <div id='div_email' class='div_results'><?php print_r($email_field) ?></div>

      <!--This is a textarea field input (text box)-->
      <p class='results_label'>Comments:</p>
      <div id='div_comments' class='div_results'><?php print_r($comments) ?></div>

      <!--This is the color that was chosen-->
      <p class='results_label'>Color:</p>
      <div id='div_radio_buttons' class='div_results'><?php print_r($color_select_field) ?></div>

      <!--This is the font that was chosen-->
      <p class='results_label'>Font:</p>
      <div id='div_font_selection' class='div_results'><?php print_r($font_field) ?></div>

      <!--These are the checkmark boxes checked-->
      <p class='results_label'>Checkmark selections:</p>
      <div id='div_checkmark_selections_uppermost' class='div_results'>
        <?php
          foreach((array) $checkbox_buttons_field as $selection) {
            print_r("$selection<br />");
          }
        ?>
      </div>
      <!--These are the checkmark boxes checked-->
      <p class='results_label'>Errors:</p>
      <div id='div_checkmark_selections_bottommost' class='div_results'>
        <?php
          foreach((array) $errors_array as $selection) {
            print_r("$selection<br />");
          }
        ?>
      </div>
    </fieldset>
  </div>
</section>
