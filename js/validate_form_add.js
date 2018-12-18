function validate_input_add(e){
  var input_add=document.getElementById(e).value;
  var div_parent=document.getElementById(e).parentNode.className;
  // children[1].id
  var div_child=document.querySelector('#'+e+'+ label').id;
  if(input_add.length>0){
    document.getElementById(div_child).className='label-input-text-focus';
    document.getElementById(e).className='input-focus-text';
  }else{
    document.getElementById(div_child).className='label-input-text';
    document.getElementById(e).className='input-not-focus';
  }
}

// function getNewdata(){
//   alert('Successful');
// }

function send_add_data(){
 
  var name=document.getElementById("name").value;
  var email=document.getElementById("email").value;
  var phone=document.getElementById("phone").value;
  var address=document.getElementById("address").value;
  var birthday=document.getElementById("birthday").value;
  var note=document.getElementById("note").value;
  var code=document.getElementById("code").value;
  //var send_data=document.getElementById("send_data").value;
  //var no_select_photo=document.getElementById("no_select_photo").value;
  var photo=document.getElementById("photo").value;

  console.log('noely tytppppppppppppppppppppppppppy')
  var data='send_data=insert'+'&code='+code+'&name='+name+'&email='+email+'&phone='+phone+'&address='+address+'&note='+note+'&formData='+formData+'&no_select_photo='+photo;
  console.log(data)
  // var form = document.querySelector('#form_output_view');
  // // var photo = document.getElementById('photo').value;
  // var formData=new FormData(form);
  // formData.append("send",'insert');
  // formData.append('code',code);
  // formData.append('no_select_photo',no_select_photo);
  // alert(photo);
  // var data_a=formData;

    var form = document.querySelectorAll('#form_output_view');
    // console.log(form);
    var formData=new FormData(form);
    formData.append("send_data",'insert');
    formData.append("code",code);
    formData.append("name",name);
    formData.append("email",email);
    formData.append("phone",phone);
    formData.append("address",address);
    formData.append("note",note);
    formData.append("photo",photo);
    xmlhttp.open("POST","operations/post.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.onreadystatechange=function(){
      if(xmlhttp.readyState==4 && xmlhttp.status==200){
        document.getElementById("output_views_home").innerHTML='';
        //searchData();
        alert('Send');
        var view_list=xmlhttp.responseText;
        console.log(view_list)
        document.getElementById("box_add_item").style.display='flex';
        document.getElementById("out_list_contact_item").innerHTML=xmlhttp.responseText;
      }
    }
    console.log(data)
    xmlhttp.send(data);

  return false;
}
function hide_add_views(){
  document.getElementById('output_views_home').innerHTML='';
}


function uploadPhoto(){
  // let peticion=new XMLHttpRequest();
  // console.log(form.children[1]);
  // console.log('a');
}


// function clear_form_add(form){
//   var a=document.querySelectorAll('#'+form+'label');
//   // var label=new Array(a);
//   for (var i = 0; i < a.length; i++) {
//     // label[i].className='a';
//     console.log(a[i]);
//   }
// }


function loadData(){
  // var search_query=document.getElementById("search_query").value;
  // document.getElementById("out_list_contact_item").innerHTML=;
  // var code_button=document.getElementById(code).value;
  // alert('call me search new ');
  var xmlhttp;
  if(window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
  }else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTPP");
  }
  var search_query='';
  const name_search = search_query?search_query: undefined;
  var data='search_query='+name_search;
  xmlhttp.open("POST","files/table.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.onreadystatechange=function(){
    if(xmlhttp.readyState==4 && xmlhttp.status==200){
      var view_list=xmlhttp.responseText;
      // document.getElementById("box_add_item").style.display='flex';
      document.getElementById("out_list_contact_item").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.send(data);
  return false;
}
