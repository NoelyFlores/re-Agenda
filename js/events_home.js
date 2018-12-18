
window.onload = function() {
  loadData()
}
function hide_view(){
  // document.getElementById('cancel_view').addEventListener('click',function(){
    document.getElementById('box_add_item').style.display='none';
    document.getElementById("output_views_home").style.display='none';
  // },false);
}
function toggle_main(){
  // document.getElementById("main").addEventListener('click',function(){
  document.getElementById("out_list_contact_item").style.display='block';
  document.getElementById("output_social_list_item").style.display='none';
    // document.getElementById("box_tag_social").style.display='none';
    // document.getElementById("box_tag_main").style.display='block';
    document.getElementById("main").className='tag-square-active';
    document.getElementById("social").className='tag-square';
  // },false);
  // document.getElementById("social").addEventListener('click',function(){
    // document.getElementById("box_tag_main").style.display='none';
    // document.getElementById("box_tag_social").style.display='block';
  // },false);
}
function toggle_social(){
  // document.getElementById("main").addEventListener('click',function(){
  //   document.getElementById("box_tag_social").style.display='none';
  //   document.getElementById("box_tag_main").style.display='block';
  // },false);
  // document.getElementById("social").addEventListener('click',function(){
    document.getElementById("out_list_contact_item").style.display='none';
    document.getElementById("output_social_list_item").style.display='block';
    // document.getElementById("box_tag_main").style.display='none';
    // document.getElementById("box_tag_social").style.display='block';
    document.getElementById("main").className='tag-square';
    document.getElementById("social").className='tag-square-active';
  // },false);
}
// window.addEventListener('load',toggle_tab,false);

function go_control(){


  document.getElementById("go_menu_profile_user").addEventListener('click',function(){
    document.getElementById("hint_menu_account").style.display='block';
  },false);
  document.getElementById("slide_menu_nav").addEventListener('click',function(){
    document.getElementById("nav_main").className='nav-main-media';
  },false);
  document.getElementById("hide_nav_main").addEventListener('click',function(){
    document.getElementById("nav_main").className='nav-main';
  },false);
  document.getElementById("view_box_search").addEventListener('click',function(){
    document.getElementById("form_search_header").className='form-search-header-media';
  },false);
  document.getElementById("hide_form_search").addEventListener('click',function(){
    document.getElementById("form_search_header").className='form-search-header';
  },false);

  document.onclick=function(e){
    if(document.getElementById("hint_menu_account").style.display=='block'){
      e=e||event;
      var target=e.target|| e.srcElement;
      var elemento=document.getElementById("hint_menu_account");
      // var elemento1=document.getElementById("nav_main");
      var ver=document.getElementById("go_menu_profile_user");
      // var ver1=document.getElementById("slide_menu_nav");
      // alert(elemento);
      // alert(elemento1);
      do {

        if(elemento==target){
          return;
        }
        if(ver==target){
          elemento.style.display='block';
          return;
        }
        target=target.parentNode;
      } while (target){
          elemento.style.display='none';
      }
    }
  }

}window.addEventListener('load',go_control,false);


