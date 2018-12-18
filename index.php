<?php 
include 'connection/index.php';
include 'class/agenda.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="">
  <meta name="author"  content="hvasquez Web Design"/>
  <meta name="keywords" content=""/>
  <meta name="Copyright" content=""/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contacts</title>
  <link rel="icon" href="images/icon_whatsent.png" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <link rel="stylesheet" href="icons/style.css" media="screen" title="no title">
  
</head>
<body class="body-home">
  <header class="header-main">
    <div class="wrap-header-main">
      <div class="menu-profile-user"id="go_menu_profile_user">
	 	<div class="view-data-user">
	   <div class="contain-photo-view-data">
	     <img src="images/henry.png" alt="">
	   </div>
	   <div class="name-view-data">
	     <p>Noely Flores Contreras</p>
	   </div>
	 </div>
	 <span class="icon-more_vert"></span>
      </div>

      <div class="apps-header">
	 <span class="icon-apps"></span>
	 <span class="icon-search"id="view_box_search"></span>
      </div>

      <div class="hint-menu-account"id="hint_menu_account"style="display:none;">
	 <div class="name-hint-account">
	   <h4>Noely Flores Contreras</h4>
	   <p>noevyh@gmail.com</p>
	 </div>
	 <div class="wrap-hint-menu-account">
	   <div class="photo-box">
	     <div class="contain-photo">
		<img src="images/noe.jpg" alt="">
		<label for="">Change</label>
	     </div>
	   </div>
	   <div class="item-hint">
	     <ul>
		<li><a href="#"><span class="icon-account_circle"></span>My account</a></li>
		<li><a href="#"><span class="icon-lock"></span>Change password</a></li>
		<li><a href="#"><span class="icon-settings"></span>Settings</a></li>
		<li><a href="#"><span class="icon-exit_to_app"></span>Logout</a></li>
	     </ul>
	   </div>
	 </div>
      </div>
      <div class="menu-nav-header">
	 <span class="icon-menu"id="slide_menu_nav"></span>
      </div>
      <form class="form-search-header" action="" onsubmit="return search_home_agenda()" method="post"id="form_search_header">
				<h4>Search here</h4>
				<div class="box-input">
					<button type="submit" name="send_search"><span class="icon-search"></span></button>
					<input type="text" name="search_query" id="search_query" value=""placeholder="Search here"onkeyup="search_home_agenda()">
				</div>
				<div class="contain-button-search">
					<button type="button" name="button"id="hide_form_search">Close</button>
				</div>
      </form>
    </div>
  </header>
  <nav class="nav-main"id="nav_main">
    <div class="wrap-nav-main">
      <span class="icon-keyboard_arrow_left"id="hide_nav_main"></span>
      <div class="wrap-data-user">
	 <div class="title-data-user">
	   <h1><a href="../contact/">Contacts</a></h1>
	 </div>
	 <div class="wrap-photo-nav">
	   <div class="contain-photo-user">
	     <img src="images/henry.png" alt="">
	   </div>
	 </div>
	 <div class="body-data-user">
	   <p class="name-data-user">Noely Flores Contreras</p>
	   <p class="email-data-user">noely.alis209@gmail.com</p>
	 </div>
      </div>
      <div class="body-items-nav">
	 <ul>
	   <li><a href="../contact/"><span class="icon-contacts"></span>Contacts</a></li>
	   <li><a href="#"><span class="icon-content_copy"></span>Duplicate</a></li>
	   <li><a href="#"><span class="icon-perm_contact_calendar"></span>Tags</a></li>
	   <li><a href="#"><span class="icon-people"></span>Other contacts</a></li>
	   <li><a href="#"><span class="icon-settings"></span>Settings</a></li>
	   <li><a href="#"><span class="icon-help"></span>Help</a></li>
	 </ul>
      </div>
    </div>
  </nav>




  <section class="section-main">
    <div class="wrap-section-main">
      <div class="box-section">

	 <div class="header-tag-view">
	   <div class="wrap-header-tag-view">

	     <div class="item-tag-list">

		<div class="tag-square-start"id="main"onclick="toggle_main()">
		  <span class="icon-inbox"></span>
		  <span class="text-tag">main</span>
		</div>

		<div class="tag-square"id="social"onclick="toggle_social()">
		  <span class="icon-people"></span>
		  <span class="text-tag">social</span>
		</div>
		<!-- <div class="tag-square"id="more">
		  <span class="icon-more"></span>
		  <span class="text-tag">more</span>
		</div> -->


	     </div>

	   </div>
	 </div>


	 <div class="box-add-item"id="box_add_item"style="display:none;">
	   <div class="wrap-box-add-item"id="wrap_box_add_item">
	     <span class="icon-keyboard_arrow_left"id="back_hide_box"onclick="hide_view()"></span>

	     <form class="form-add-item" action="operations/post.php" method="post"id="form_output_view" enctype="multipart/form-data">
			<!--modal-->
	     </form>


	   </div>
	 </div>

	 <div class="out-list-contact-item"id="out_list_contact_item"> 
	<!--  lista de contacto -->
 </div>

	 <div class="output-social-list-item"id="output_social_list_item">
	   Social
	 </div>



      </div>
    </div>
  </section>



  <footer class="footer-main">
    <div class="wrap-footer-main">
      <div class="box-up-footer">
			Noely Flores Contreras
      </div>
      <div class="box-down-footer">
	 <p><span class="icon-copyright"></span> noely 2018</p>
      </div>
    </div>
  </footer>

  <div class="new_contact"id="new_contact" onclick="load_form_add(this.id)">
    <span class="icon-person_add"></span>
  </div>
  <div class="output-views-home"id="output_views_home">
	<!-- modal -->
  </div>
<script src="js/events_home.js" charset="utf-8"></script>
<script src="ajax/edit_agenda.js" charset="utf-8"></script>
<script src="ajax/load_new_views.js" charset="utf-8"></script>
<script src="js/validate_form_add.js" charset="utf-8"></script>
</body>
</html>
