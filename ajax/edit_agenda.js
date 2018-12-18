function edit_my_agenda(){
  // var edit_contact=document.getElementById('size_contact').value;
  // var delete_contact=document.getElementById('delete_contact1').value;

  // document.onclick=function(e){
  //   var target=e.target||e.srcElement;
  //   alert(target.value);
  // }

  // alert(edit_contact);
  return false;
}

function search_home_agenda(){
  var search_query=document.getElementById("search_query").value;
  // document.getElementById("out_list_contact_item").innerHTML=;
  // var code_button=document.getElementById(code).value;
  console.log(search_query)
  var xmlhttp;
  if(window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
  }else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTPP");
  }
  // alert(code);
  // var size_view=document.getElementById("size_edit_view").value;
  const name_search = search_query?search_query: undefined;
  var data='search_query='+name_search;
  xmlhttp.open("POST","files/table.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){
      var view_list=xmlhttp.responseText;
      //document.getElementById("box_add_item").style.display='flex';
      document.getElementById("out_list_contact_item").innerHTML=view_list;
    }
  }
  console.log(data)
  xmlhttp.send(data);
  return false;
}

function delete_home_contact(code){
  var code_delete=document.getElementById(code).value;
  var html_delete='<div class="box-ask-delete">';
    html_delete+='<div class="wrap-box-ask-delete">';
      html_delete+='<p><span class="icon-delete"></span></p>';
      html_delete+='<h4>Do you want to delete this contact?</h4>';
      html_delete+='<div class="button-ask-delete">';
        html_delete+='<input type="hidden" name="code" value="20">';
        html_delete+='<button type="button" name="button" id="cancel_add" onclick="hide_view()">Cancel</button>';
        html_delete+='<button type="submit" name="send_data" value="delete">Delete</button>';
        html_delete+='<input type="hidden"name="delete_contact"value="'+code_delete+'">';
      html_delete+='</div>';
    html_delete+='</div>';
  html_delete+='</div>';
  document.getElementById("box_add_item").style.display='flex';
  // document.getElementById("wrap_box_add_item").style='height:50%;';
  document.getElementById("form_output_view").innerHTML=html_delete;
  return false;
}

function update_home_contact(code){
  var code_button=document.getElementById(code).value;
  var xmlhttp;
  if(window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
  }else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTPP");
  }
  // alert(code);
  var size_view=document.getElementById("size_edit_view").value;
  var data='action_button='+code+'&action_code='+code_button+'&size_view='+size_view;
  xmlhttp.open("POST","operations/getEditagenda.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){
      var view_list=xmlhttp.responseText;
      document.getElementById("box_add_item").style.display='flex';
      document.getElementById("form_output_view").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.send(data);
  return false;
}

function view_home_contact(code){

  var xmlhttp;
  if(window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
  }else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  var data='code='+code;
  // alert(code);
  xmlhttp.open("POST","operations/getViewagenda.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){
      var view_list=xmlhttp.responseText;
      document.getElementById("box_add_item").style.display='flex';
      document.getElementById("form_output_view").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.send(data);
  return false;
}
