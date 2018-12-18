//
// function upload_image(){
//   var form = document.querySelector('.form');
//   var image = document.getElementById('image').value;
//   if(image==''){
//     alert('Select a image');
//     return false;
//   }else{
//     var request=new XMLHttpRequest();
//     var formData=new FormData(form);
//     request.open('post','uploader.php',true);
//     request.send(formData);
//   }
//   return false;
// }

function upload_photo(){
  var xmlhttp;
  // if(window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
  // }else{
  //   xmlhttp=new ActiveXObject("Microsoft.XMLHTPP");
  // }
  var form = document.querySelector('#box_photo');
  // console.log(form);
  var formData=new FormData(form);
  xmlhttp.open("POST","configure/aa.php",true);
  // xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){
      alert('upload');
      // document.getElementById("output_views_home").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.send(formData);
  return false;
}
