
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form enctype="multipart/form-data" action=""id="box_photo" class="form-add-item" method="post" name="form" >
    
 <div class="header-box-add-item">
   <p>Create new contact</p>
 </div>
 <div class="group-enter-field">
   <div class="box-group-photo-add">
     <input type="file" name="photo" id="photo"value="">
     <label for="photo"><span class="icon-add_a_photo"></span></label>
   </div>
   <div class="box-group-item-input">

   <div class="list-div-input">
       <div class="icon-list-div-input">
         <span class="icon-markunread"></span>
       </div>
       <div class="body-list-div-input">
         <div class="item-form-add-item">
           <input type="text" id="code"name="code" value="" required="">
           <label class="label-input-text"for="email">code</label>
         </div>
       </div>
     </div>
     <div class="list-div-input">
       <div class="icon-list-div-input">
         <span class="icon-person"></span>
       </div>
       <div class="body-list-div-input">
         <div class="item-form-add-item">
           <input type="text" id="name"name="name" value=""required="">
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
           <input type="text" id="email"name="email" value=""required="">
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
           <input type="text" id="phone"name="phone" value=""required="">
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
           <input type="text" id="address"name="address" value=""required="">
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
           <input type="text" id="birthday"name="birthday" value=""required="">
           <label class="label-input-text"for="birthday">Birthday</label>
         </div>
       </div>
     </div>

     <div class="list-div-input">
       <div class="icon-list-div-input">
         <span class="icon-event_note"></span>
       </div>
       <div class="body-list-div-input">
         <div class="item-form-add-item">
           <input type="text" id="note"name="note" value=""required="">
           <label class="label-input-text"for="note">Note</label>
         </div>
       </div>
     </div>

   </div>
 </div>
 <div class="control-form-add-new">
   <button type="button" name="button"id="cancel_add" onclick="hide_view()">Cancel</button>
   <button type="button" name="send_data" id="insert" value="insert" onclick="send_add_data()">Save</button>

 </div>

  </form>
<div id="output"></div>
<script src="upload_image.js" charset="utf-8"></script>
</body>
</html>
