
<?php

  include '../class/agenda.php';

  $action=isset($_POST['action_load_contact']) ? $_POST['action_load_contact']:'default';
  $code_value=$_POST['code_value'];
  switch ($action) {
    case 'new_contact':
      $title_action='Create new contact';
      $type_name_action='New user';
      $style_label='label-input-text';
      $style_input='input-not-focus';
      $type_name_button='submit';
      $ok_view_text='send_data';
      $value_send_data='insert';
      $text_button_action='<span class="icon-done"></span> Save';
      break;
    case 'edit_contact':
      $title_action='Edit contact';
      $type_name_action='username';
      $style_label='label-input-text-focus';
      $style_input='input-focus-text';
      $type_name_button='submit';
      $ok_view_text='send_data';
      $value_send_data='update';
      $text_button_action='<span class="icon-done"></span> Update';
      break;
    case 'delete_contact':
      $title_action='Delete contact';
      $type_name_action='username';
      $focus_view=' readonly="" ';
      $style_label='label-input-text-focus';
      $visible_label='display:none;';
      $style_input='input-focus-text';
      $type_name_button='submit';
      $ok_view_text='send_data';
      $value_send_data='delete';
      $style_delete='display:none;';
      $text_button_action='<span class="icon-done"></span> Ok';
      $ask_delete='<div class="box-ask-delete">
        <div class="wrap-box-ask-delete">
          <p><span class="icon-delete"></span></p>
          <h4>Do you want to</h4>
          <h4>delete this contact?</h4>
        </div>
      </div>';
      break;
    case 'view_contact':
      $title_action='View contact';
      $type_name_action='username';
      $focus_view=' readonly="" ';
      $style_label='label-input-text-focus';
      $style_input='input-focus-text';

      $type_name_button='button';
      $ok_view_text='button_ok_view';
      $onclick_ok=' onclick="hide_add_views()" ';
      $text_button_action='<span class="icon-done"></span> OK';
      break;
  }
  if($action<>'new_contact'){
    $agenda=Agenda::getOnlycode($code_value);
    $array=$agenda->selectDatacode();
    $data=$array->fetch_array();
    $photo=$data[photo];
    $text_name_user=$data[name];
  }else{
    $photo='image_background.png';
    $text_name_user='New user';
  }


?>
<div class="box-add-item"id="box_add_item"style="display:flex;">
  <div class="wrap-box-add-item"id="wrap_box_add_item">
    <span class="icon-keyboard_arrow_left"id="back_hide_box"onclick="hide_add_views()"></span>

    <form class="form-add-item" action="" method="post"id="form_output_view" enctype="multipart/form-data" onsubmit="return send_add_data()">

      <div class="header-box-add-item">
        <p class="text-view-contact"><?php echo$title_action; ?></p>
        <p><?php echo$text_name_user; ?></p>
      </div>
      <div class="group-enter-field">
        <div class="box-group-photo-add">
          <input type="hidden" name="no_select_photo"id="no_select_photo" value="<?php echo$photo; ?>">
          <input type="file" name="photo" id="photo"value="">
          <div class="view-photo-home">
            <img src="images/<?php echo$photo; ?>" alt="">
            <label for="photo"style="<?php echo$visible_label; ?>"><span class="icon-add_a_photo"></span></label>
          </div>
        </div>
        <?php echo$ask_delete; ?>
        <div class="box-group-item-input" style="<?php echo$style_delete; ?>">
          <div class="list-div-input">
            <div class="icon-list-div-input">
              <span class="icon-person"></span>
            </div>
            <div class="body-list-div-input">
              <div class="item-form-add-item">
                <input <?php echo$focus_view; ?> type="text" class="<?php echo$style_input; ?>"id="name"name="name" value="<?php echo$data[name]; ?>"onkeyup="validate_input_add(this.id)">
                <label class="<?php echo$style_label; ?>"for="name"id="label_name">Name</label>
              </div>
            </div>
          </div>
          <div class="list-div-input">
            <div class="icon-list-div-input">
              <span class="icon-markunread"></span>
            </div>
            <div class="body-list-div-input">
              <div class="item-form-add-item">
                <input <?php echo$focus_view; ?> type="text" class="<?php echo$style_input; ?>"id="email"name="email" value="<?php echo$data[email]; ?>"onkeyup="validate_input_add(this.id)">
                <label id="label_email" class="<?php echo$style_label; ?>"for="email">Email</label>
              </div>
            </div>
          </div>


          <div class="list-div-input">
            <div class="icon-list-div-input">
              <span class="icon-phone"></span>
            </div>
            <div class="body-list-div-input">
              <div class="item-form-add-item">
                <input <?php echo$focus_view; ?> type="text" class="<?php echo$style_input; ?>"id="phone"name="phone" value="<?php echo$data[phone]; ?>"onkeyup="validate_input_add(this.id)">
                <label id="label_phone"class="<?php echo$style_label; ?>"for="phone">Phone</label>
              </div>
            </div>
          </div>

          <div class="list-div-input">
            <div class="icon-list-div-input">
              <span class="icon-room"></span>
            </div>
            <div class="body-list-div-input">
              <div class="item-form-add-item">
                <input <?php echo$focus_view; ?> type="text" class="<?php echo$style_input; ?>"id="address"name="address" value="<?php echo$data[address]; ?>"onkeyup="validate_input_add(this.id)">
                <label id="label_address"class="<?php echo$style_label; ?>"for="address">Address</label>
              </div>
            </div>
          </div>

          <div class="list-div-input">
            <div class="icon-list-div-input">
              <span class="icon-cake"></span>
            </div>
            <div class="body-list-div-input">
              <div class="item-form-add-item">
                <input <?php echo$focus_view; ?> type="text" class="<?php echo$style_input; ?>"id="birthday"name="birthday" value="<?php echo$data[birthday]; ?>"onkeyup="validate_input_add(this.id)">
                <label id="label_birthday"class="<?php echo$style_label; ?>"for="birthday">Birthday</label>
              </div>
            </div>
          </div>

          <div class="list-div-input">
            <div class="icon-list-div-input">
              <span class="icon-event_note"></span>
            </div>
            <div class="body-list-div-input">
              <div class="item-form-add-item"id="label_read_edit">
                <textarea id="note"name="note" value=""placeholder="Write here..."><?php echo$data[note]; ?></textarea>
                <label class="label-input-text"for="note">Note</label>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="control-form-add-new">
        <input type="hidden" name="code"id="code" value="<?php echo$data[code]; ?>">
        <button type="button" name="button"id="cancel_add"onclick="hide_add_views()">Cancel</button>
        <button id="<?php echo$ok_view_text; ?>"type="<?php echo$type_name_button; ?>" name="send_data"value="<?php echo$value_send_data; ?>"<?php echo$onclick_ok; ?>><?php echo$text_button_action; ?></button>

      </div>

    </form>

  </div>
</div>
