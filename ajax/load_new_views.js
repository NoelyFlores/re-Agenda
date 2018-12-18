
var xmlhttp;
if(window.XMLHttpRequest){
  xmlhttp=new XMLHttpRequest();
}else{
  xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
}
function load_form_add(code){
  document.getElementById("output_views_home").style.display='block';
  if(code/1==code){
    // console.log('view');
    var code_value=code;
    var code_contact='view_contact';
  }else{
    // console.log('new, edit and delete ');
    var  select_className=document.querySelector('#'+code+'').className;
    code_contact=select_className;
    code_value=document.getElementById(code).value;
  }
  // alert(code_value);
  // console.log(code);
  // var  select_className=document.querySelector('#'+code+'').className;
  // if(select_className){
  //   console.log('a');
  //   var code_contact=select_className;
  // }
  // var code_value=document.getElementById(code).value;
  var data='action_load_contact='+code_contact+'&code_value='+code_value;
  xmlhttp.open("POST","upload_photo.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){
      document.getElementById('output_views_home').innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.send(data);

  return false;
}
