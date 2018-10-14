<!doctype html>
<html>
<head>
  <title>Assignment #5</title>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='./css/style.css' type='text/css' />
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
  <?php include('./includes/inc_functions.php') ?>
</head>

<body class=
  <?php
    if(isset($_POST['submitted'])) {
      echo '"'; echo $_POST['font_field']; echo ' '; echo $_POST['color_select_field']; echo '"';
    } else { echo "";
    }
  ?>
  >
  <header class=
    <?php
      if(isset($_POST['submitted'])) {
        echo '"'; echo $_POST['font_field']; echo ' '; echo $_POST['color_select_field']; echo '"';
      } else { echo "";
      }
    ?>>
    <?php include('./includes/inc_header.php') ?>
  </header>

  <section id='form_section'>
    <?php
    if(isset($_POST['submitted'])&&!empty($_POST['full_name'])&&!empty($_POST['password_field'])&&!empty($_POST['email_field'])&&!empty($_POST['comments'])) {
      include('./includes/register_form_handle.php');
    } else {
      include('./includes/register_form.php');
    }
    ?>
  </section>

  <footer class=
    <?php
      if(isset($_POST['submitted'])) {
        echo '"'; echo $_POST['font_field']; echo ' '; echo $_POST['color_select_field']; echo '"';
      } else { echo "";
      }
    ?>>
    <?php include('./includes/inc_footer.php') ?>
  </footer>
</body>
</html>
