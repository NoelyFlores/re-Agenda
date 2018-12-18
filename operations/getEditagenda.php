<?php

  // include '../connection/index.php';
  include '../class/agenda.php';
  $id_edit_contact=$_POST[action_code];
  $button_action=$_POST[action_button];
  $size_edit_view=$_POST[size_view];
  // $id_view_contact='7';
  // $agenda=new Agenda();

  // $agenda=Agenda::getOnlycode($id_view_contact);
  // $array=$agenda->selectDatacode();
  // $data_view=$array->fetch_array();

  // if($button_action=='edit_contact')

  // for ($i=0; $i < $size_edit_view; $i++) {
  //   if($button_action.$i==){
  //
  //   }
  // }

  $agenda=Agenda::getOnlycode($id_edit_contact);
  $array=$agenda->selectDatacode();
  $data=$array->fetch_array();
  // $data_view=array('name'=>'','email'=>'','phone'=>'','address'=>'','birthday'=>'','note'=>'');
  // print_r($data_view);
  // include 'get.php';

?>


<div class="header-box-add-item">
  <p class="text-view-contact">Edit contact</p>
  <p><?php echo $data[name]; ?></p>
</div>
<div class="group-enter-field">
  <div class="box-group-photo-add">
    <input type="hidden" name="no_select_photo" value="<?php echo $data[photo]; ?>">
    <input type="file" name="photo" id="photo"value="">
    <div class="view-photo-home">
      <img src="images/<?php echo $data[photo]; ?>" alt="">
      <label for="photo"><span class="icon-add_a_photo"></span></label>
    </div>

  </div>
  <div class="box-group-item-input">

    <div class="list-div-input">
      <div class="icon-list-div-input">
        <span class="icon-person"></span>
      </div>
      <div class="body-list-div-input">
        <div class="item-form-add-item">
          <input type="text" id="name"name="name" value="<?php echo $data[name]; ?>"required="">
          <label class="label-input-text"for="name">Name</label>
        </div>
      </div>
    </div>


    <div class="list-div-input">
      <div class="icon-list-div-input">
        <span class="icon-markunread"></span>
      </div>
      <div class="body-list-div-input">
        <div class="item-form-add-item">
          <input type="text" id="email"name="email" value="<?php echo $data[email]; ?>"required="">
          <label class="label-input-text"for="email">Email</label>
        </div>
      </div>
    </div>


    <div class="list-div-input">
      <div class="icon-list-div-input">
        <span class="icon-phone"></span>
      </div>
      <div class="body-list-div-input">
        <div class="item-form-add-item">
          <input type="text" id="phone"name="phone" value="<?php echo $data[phone]; ?>"required="">
          <label class="label-input-text"for="phone">Phone</label>
        </div>
      </div>
    </div>

    <div class="list-div-input">
      <div class="icon-list-div-input">
        <span class="icon-room"></span>
      </div>
      <div class="body-list-div-input">
        <div class="item-form-add-item">
          <input type="text" id="address"name="address" value="<?php echo $data[address]; ?>"required="">
          <label class="label-input-text"for="address">Address</label>
        </div>
      </div>
    </div>

    <div class="list-div-input">
      <div class="icon-list-div-input">
        <span class="icon-cake"></span>
      </div>
      <div class="body-list-div-input">
        <div class="item-form-add-item">
          <input type="text" id="birthday"name="birthday" value="<?php echo $data[birthday]; ?>"required="">
          <label class="label-input-text"for="birthday">Birthday</label>
        </div>
      </div>
    </div>

    <div class="list-div-input">
      <div class="icon-list-div-input">
        <span class="icon-event_note"></span>
      </div>
      <div class="body-list-div-input">
        <div class="item-form-add-item"id="label_read_edit">
          <textarea id="note"name="note" value=""><?php echo $data[note]; ?></textarea>
          <label class="label-input-text"for="note">Note</label>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="control-form-add-new">
  <input type="hidden" name="code" value="<?php echo $data[code]; ?>">
  <button type="button" name="button"id="cancel_add"onclick="hide_view()">Cancel</button>
  <button type="submit" name="send_data" value="update">Update</button>

</div>
