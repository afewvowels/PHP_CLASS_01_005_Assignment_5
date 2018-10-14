

<link rel='stylesheet' href='./css/style_form.css' type='text/css' />
<div id='background_fill'>
  <div id='main_wrapper'>
    <!--Form is wrapped in a section tag-->
    <section>

      <!--Input objects are all contained within this single form tag-->
      <form action='' method='POST' id='main_form' class='text_align_object' onsubmit='accepted()'>
        <fieldset>
          <legend class='form_title_legend'>User Information</legend>
          <!--This is a text field input-->
          <?php
            create_form_field('Full name:', 'text', 'full_name', 'full_name', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your name here', 'placeholder'=>'Please enter your name here', 'pattern'=>'.{2,20}']);
            create_form_field('Password field:', 'password', 'password_field', 'password_field', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your password here', 'placeholder'=>'Please enter your password here', 'pattern'=>'[A-Za-z]{2,20}']);
            create_form_field('Email field:', 'email', 'email_field', 'email_field', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please enter your email here', 'placeholder'=>'email@domain.com']);
            create_form_field('Comments:', 'textarea', 'comments', 'comments', ['title'=>'Please enter your comments here', 'placeholder'=>'Enter comments here...']);
          ?>
        </fieldset>

        <fieldset>
          <legend class='form_title_legend'>CSS Options</legend>
          <!--This is a collection of radio button inputs and their labels-->
          <div id='color_select_region'>
            <label for="color_select_field" id='color_select_label'>Background color:</label>
            <ul>
              <li>
                <input type='radio' name='color_select_field' id='color_green' value='green'
                <?php if(isset($_POST['color_select_field']) && ($_POST['color_select_field'] == 'green')) echo 'checked="checked"'; ?>
                />
                <label for="color_green" class='color_value'>Green</label>
              </li>
              <li>
                <input type='radio' name='color_select_field' id='color_red' value='red'
                <?php if(isset($_POST['color_select_field']) && ($_POST['color_select_field'] == 'red')) echo 'checked="checked"'; ?>
                />
                <label for="color_red" class='color_value'>Red</label>
              </li>
              <li>
                <input type='radio' name='color_select_field' id='color_blue' value='blue'
                <?php if(isset($_POST['color_select_field']) && ($_POST['color_select_field'] == 'blue')) echo 'checked="checked"'; ?>
                />
                <label for="color_blue" class='color_value'>Blue</label>
              </li>

            </ul>
          </div>

          <!--This is a drop-down menu with two groups of three options each-->
          <p>
            <label for='font_field'>Select a font:</label>
            <select name='font_field' id='font_field' size='1'>
              <optgroup label='Fonts'>
                <option value="source_code_pro"
      					<?php if(isset($_POST['font_field']) && ($_POST['font_field'] == 'source_code_pro')) echo "selected='selected'"; ?>
                >Source Code Pro</option>
                <option value="montserrat"
      					<?php if(isset($_POST['font_field']) && ($_POST['font_field'] == 'montserrat')) echo "selected='selected'"; ?>
                >Montserrat</option>
                <option value="lora"
      					<?php if(isset($_POST['font_field']) && ($_POST['font_field'] == 'lora')) echo "selected='selected'"; ?>
                >Lora</option>
              </optgroup>
            </select>
          </p>

          <!--This is a collection of three checkbox button inputs and their labels-->
          <div class='ul_region'>
            <label for="checkbox_buttons_field" class='ul_label'>Checkbox buttons field:</label>
            <ul>
              <!--First checkbox option-->
              <li>
                <input type='checkbox' name='checkbox_buttons_field[]' id='first_checkbox' value='First checkbox button'
          			<?php if(isset($_POST['checkbox_buttons_field']) && in_array('First checkbox button',$_POST['checkbox_buttons_field'])) echo "checked='checked'"; ?>
                />
                <label for="first_checkbox">First checkbox button</label>
              </li>
              <!--Second checkbox option-->
              <li>
                <input type='checkbox' name='checkbox_buttons_field[]' id='second_checkbox' value='Second checkbox button'
          			<?php if(isset($_POST['checkbox_buttons_field']) && in_array('Second checkbox button',$_POST['checkbox_buttons_field'])) echo "checked='checked'"; ?>
                />
                <label for="second_checkbox">Second checkbox button</label>
              </li>
              <!--Third checkbox option-->
              <li>
                <input type='checkbox' name='checkbox_buttons_field[]' id='third_checkbox' value='Third checkbox button'
          			<?php if(isset($_POST['checkbox_buttons_field']) && in_array('Third checkbox button',$_POST['checkbox_buttons_field'])) echo "checked='checked'"; ?>
                />
                <label for="third_checkbox">Third checkbox button</label>
              </li>
            </ul>
          </div>

        </fieldset>

        <fieldset>
          <legend class='form_title_legend'>Optional Fields</legend>
          <!--This is a text field input-->
          <?php
            create_form_field('Text Entry Field:', 'text', 'text_field', 'text_field', ['maxlength'=>'40', 'size'=>'20', 'title'=>'Please leave this field blank', 'placeholder'=>'Leave this blank to see an error messagae', 'pattern'=>'.{2,20}']);
          ?>

          <!--This is a collection of radio button inputs and their labels-->
          <div id='optional_radio_buttons' class='ul_region'>
            <label for="radio_buttons_field" class='ul_label'>Radio buttons:</label>
            <ul>
              <li>
                <input type='radio' name='radio_buttons_field' id='radio_1' value='one'
                <?php if(isset($_POST['radio_buttons_field']) && ($_POST['radio_buttons_field'] == 'one')) echo 'checked="checked"'; ?>
                />
                <label for="radio_1" class='color_value'>Option #1</label>
              </li>
              <li>
                <input type='radio' name='radio_buttons_field' id='radio_2' value='two'
                <?php if(isset($_POST['radio_buttons_field']) && ($_POST['radio_buttons_field'] == 'two')) echo 'checked="checked"'; ?>
                />
                <label for="radio_2" class='color_value'>Option #2</label>
              </li>
              <li>
                <input type='radio' name='radio_buttons_field' id='radio_3' value='three'
                <?php if(isset($_POST['radio_buttons_field']) && ($_POST['radio_buttons_field'] == 'three')) echo 'checked="checked"'; ?>
                />
                <label for="radio_3" class='color_value'>Option #3</label>
              </li>
            </ul>
          </div>
          <!--This is a collection of three checkbox button inputs and their labels-->
          <div class='ul_region'>
            <label for="checkbox_buttons_field_2" class='ul_label'>Checkbox buttons:</label>
            <ul>
              <!--First checkbox option-->
              <li>
                <input type='checkbox' name='checkbox_buttons_field_2[]' id='first_checkbox_2' value='First checkbox button'
          			<?php if(isset($_POST['checkbox_buttons_field_2']) && in_array('First checkbox button',$_POST['checkbox_buttons_field_2'])) echo "checked='checked'"; ?>
                />
                <label for="first_checkbox_2">First checkbox button</label>
              </li>
              <!--Second checkbox option-->
              <li>
                <input type='checkbox' name='checkbox_buttons_field_2[]' id='second_checkbox_2' value='Second checkbox button'
          			<?php if(isset($_POST['checkbox_buttons_field_2']) && in_array('Second checkbox button',$_POST['checkbox_buttons_field_2'])) echo "checked='checked'"; ?>
                />
                <label for="second_checkbox_2">Second checkbox button</label>
              </li>
              <!--Third checkbox option-->
              <li>
                <input type='checkbox' name='checkbox_buttons_field_2[]' id='third_checkbox_2' value='Third checkbox button'
          			<?php if(isset($_POST['checkbox_buttons_field_2']) && in_array('Third checkbox button',$_POST['checkbox_buttons_field_2'])) echo "checked='checked'"; ?>
                />
                <label for="third_checkbox_2">Third checkbox button</label>
              </li>
            </ul>
          </div>
        </fieldset>

        <!--These are the submit and reset button inputs-->
        <p>
          <input type='submit' name='submit_button' id='submit_button' value='Click to submit!' />
          <input type='reset' name='reset_button' id='reset_button' value='Click to reset!' />
        </p>

        <input type='hidden' name='submitted' id='submitted' value='submitted' />
      </form>
    </section>
  </div>
</div>
