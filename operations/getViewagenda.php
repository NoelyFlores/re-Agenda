<?php

  // include '../connection/index.php';
  include '../class/agenda.php';
  $id_view_contact=$_POST[code];
  // $id_view_contact='7';
  // $agenda=new Agenda();
  $agenda=Agenda::getOnlycode($id_view_contact);
  $array=$agenda->selectDatacode();
  $data_view=$array->fetch_array();
  // $agenda=Agenda::getOnlycode($id_view_contact);
  // $array=$agenda->selectDatacode();
  // $data_view=$array->fetch_array();
  // $data_view=array('name'=>'','email'=>'','phone'=>'','address'=>'','birthday'=>'','note'=>'');
  // print_r($data_view);
  // include 'get.php';

?>
<!-- <script type="text/javascript">
  function hide_view(){
    document.getElementById('cancel_view').addEventListener('click',function(){
      document.getElementById('box_add_item').style.display='none';
    },false);
  }window.addEventListener('load',hide_view,false);
</script> -->
<!-- <script src="../js/events_home.js" charset="utf-8"></script> -->
 <form class="form-add-item" action="operations/post.php" method="post"id="form_output_view"> 
  <div class="header-box-add-item">
    <p class="text-view-contact">Contact details</p>
    <p><?php echo$data_view[name]; ?></p>
  </div>
  <div class="group-enter-field">
    <div class="box-group-photo-add">
      <div id="view-img-contact">
        <img src="images/<?php echo$data_view[photo]; ?>" alt="">
      </div>
    </div>
    <div class="box-group-item-input">

      <div class="list-div-input">
        <div class="icon-list-div-input">
          <span class="icon-person"></span>
        </div>
        <div class="body-list-div-input"id="label_onlyread">
          <div class="item-form-add-item">
            <input readonly="" type="text" id="name"name="name" value="<?php echo $data_view[name]; ?>"required="">
            <label class="label-input-text"for="name">Name</label>
          </div>
        </div>
      </div>


      <div class="list-div-input">
        <div class="icon-list-div-input">
          <span class="icon-markunread"></span>
        </div>
        <div class="body-list-div-input"id="label_onlyread">
          <div class="item-form-add-item">
            <input readonly="" type="text" id="email"name="email" value="<?php echo $data_view[email]; ?>"required="">
            <label class="label-input-text"for="email">Email</label>
          </div>
        </div>
      </div>


      <div class="list-div-input">
        <div class="icon-list-div-input">
          <span class="icon-phone"></span>
        </div>
        <div class="body-list-div-input"id="label_onlyread">
          <div class="item-form-add-item">
            <input readonly="" type="text" id="phone"name="phone" value="<?php echo $data_view[phone]; ?>"required="">
            <label class="label-input-text"for="phone">Phone</label>
          </div>
        </div>
      </div>

      <div class="list-div-input">
        <div class="icon-list-div-input">
          <span class="icon-room"></span>
        </div>
        <div class="body-list-div-input"id="label_onlyread">
          <div class="item-form-add-item">
            <input readonly="" type="text" id="address"name="address" value="<?php echo $data_view[address]; ?>"required="">
            <label class="label-input-text"for="address">Address</label>
          </div>
        </div>
      </div>

      <div class="list-div-input">
        <div class="icon-list-div-input">
          <span class="icon-cake"></span>
        </div>
        <div class="body-list-div-input"id="label_onlyread">
          <div class="item-form-add-item">
            <input readonly="" type="text" id="birthday"name="birthday" value="<?php echo $data_view[birthday]; ?>"required="">
            <label class="label-input-text"for="birthday">Birthday</label>
          </div>
        </div>
      </div>

      <div class="list-div-input">
        <div class="icon-list-div-input">
          <span class="icon-event_note"></span>
        </div>
        <div class="body-list-div-input"id="label_onlyread">
          <div class="item-form-add-item">
            <textarea readonly=""  id="note"name="note" value=""><?php echo $data_view[note]; ?></textarea>
            <label class="label-input-text"for="note">Note</label>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="control-form-add-new">
    <button type="button" name="button"id="cancel_view_contact"onclick="hide_view()">Close</button>

  </div>
</form>
