
<form class="form-contact-item" action="../contact/" id="form_contact_item" onsubmit="return edit_my_agenda() " method="post">
  <?php
    include '../class/agenda.php';
    if($_POST['search_query'] == 'undefined'){
      
      $code = 1;
      $agenda=Agenda::getOnlyname($code);
      $data=$agenda->selectContact();
    } else {
      $cadena=$_POST['search_query'];
      $agenda=Agenda::getOnlyname($cadena);      
      $data=$agenda->selectAgenda();
    }
     $i=1;
    while ($row=$data->fetch_array()) {
      /* echo '<input type="checkbox" name="" id="itema" value="">'; */
      echo '
      <label for="item'.$i.'">
        <span class="icon-more_vert"id="fade_in_more_hover"></span>
        <div class="control-item-contact">
          <button type="button" class="edit_contact" id="edit_contact'.$i.'" name="edit_contact"value="'.$row[code].'"onclick="load_form_add(this.id)"><span class="icon-mode_edit"></span> <span class="hint-control-button"id="edit_hint_hover">Edit</span></button>
          <div class="icon-more_vert">
          <span class="hint-control-button"id="more_view_hint_hover">More</span>
            <div class="" id="hint_more_see_delete">
              <div id="wrap_more_delete">
                <button type="button" class="delete_contact" id="delete_contact'.$i.'" name="delete_contact"value="'.$row[code].'"  onclick="load_form_add(this.id)"><span class="icon-delete"></span> Delete</button>
              </div>
            </div>
          </div>
        </div>
        <div class="list-item-contact"onclick="load_form_add('.$row[code].')">
          <div class="photo-list-item-contact">
            <img src="images/'.$row[photo].'" alt="">
          </div>
          <div class="body-list-item-contact">
            <div class="name-list-item-contact">
              <p>'.$row[name].'</p>
            </div>
            <div class="email-list-item-contact">
              <p>'.$row[email].'</p>
            </div>
            <div class="number-list-item-contact">
              <p>+51 '.$row[phone].'</p>
            </div>
            <div class="about-list-item-contact">
              <p>'.$row[note].'</p>
            </div>
          </div>
        </div>
      </label>

      ';
      $i++;
    }
     // echo$size_contact='<input type="hidden" name="size_contact" id="size_contact" value="'.$i.'">';

  ?>

</form>
