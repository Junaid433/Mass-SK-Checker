<?php

$userLogged = false;
$isAdmin = false;
if (isset($_SESSION['username'])) {
  $userLogged = true;
  if ($_SESSION['username'] === "hyper") {
    $isAdmin = true;
  }
}
?>

<header class="uk-background-primary uk-background-norepeat uk-background-cover uk-background-center-center uk-light" 
	>
	<nav class="uk-navbar-container">
	  <div class="uk-container">
	    <div data-uk-navbar>
	      <div class="uk-navbar-left">
	        <a class="uk-navbar-item uk-logo uk-visible@m" href="https://t.me/fakehecker"><img src="../anonymousheader.svg" style='filter: invert(1); height: 30px; width: 30px; '>
        </a>
	        <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas-docs" data-uk-toggle><span
	          data-uk-navbar-toggle-icon></span>
               <!-- <span class="uk-margin-small-left">Articles</span> -->
            </a>
	      </div>
	      <div class="uk-navbar-center uk-hidden@m">
	        <a class="uk-navbar-item uk-logo" href="https://t.me/fakehecker"><img src="../anonymousheader.svg" style='filter: invert(1); height: 30px; width: 30px; '></a>
	      </div>
	      <div class="uk-navbar-right">
	        <ul class="uk-navbar-nav uk-visible@m">
	          <li ><a href="#">Home</a></li>
			  <?php if($userLogged === true) { ?>
				<li ><a href="#">Dashboard</a></li>

				<?php }?>
	          <li ><a href="#">Usage</a></li>
	       
	          <li>
	            <div class="uk-navbar-item">
                <?php if($userLogged === true) { ?>
	              <a class="uk-button uk-button-small uk-button-primary-outline logoutbtn" href="#">Logout</a>
	            <?php } else { ?>
                    <a class="uk-button uk-button-small uk-button-primary-outline" href="#">SIGN UP</a>
                    <?php } ?>
                </div>
	          </li>
	        </ul>
	        <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
	          data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></a>
	      </div>
	    </div>
	  </div>
	</nav>
	
	
</header>
<div id="hyper_progress"></div>