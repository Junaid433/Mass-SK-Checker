<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SK Checker - HECKER</title>
  <link rel="shortcut icon" type="image/png" href="https://via.placeholder.com/16x16">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/hyper.css?v=6.2" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="../js/uikit.js"></script>
</head>

<body>

  
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
			  	          <li ><a href="#">Usage</a></li>
	       
	          <li>
	            <div class="uk-navbar-item">
                                    <a class="uk-button uk-button-small uk-button-primary-outline" href="#">SIGN UP</a>
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
  <div class="uk-section uk-section-muted">
    <div class="uk-container">
      <div class="uk-background-default uk-border-rounded uk-box-shadow-small">
        <div class="uk-container uk-container-xsmall uk-padding-large">
          <article class="uk-article">
            <center>
            <div style='filter: invert(1); height: 70px; width: 70px; margin-top: -4px;margin-bottom: 40px;'><img src="../anonymousheader.svg"></div>
            </center>
            <div class="uk-article-content">
              <!-- <p class="uk-text-lead uk-text-muted">Warning: don't use generated ccs don't be noob!</p> -->
              <div class="uk-form-stacked uk-margin-medium-top">

                <div class="uk-margin-bottom">
                  <!-- <span id="totalCount">430</span> -->
                  <label class="uk-form-label" for="message"><span>Drop SK
                      <span class="tag_required" id="lista_leb">Required</span></span>
                    <span class="tag_total">Total <span id="totalCount">0</span></span>

                    <span class="tag_info">Checked <span id="totalChecked">0</span></span>
                  </label>
                  <div class="uk-form-controls" id="lista_con">
                    <textarea id="message" class="hyper_ccs uk-textarea uk-border-rounded" placeholder="XXXXXXXXXXXXX|XX|XXXX|XXX" name="lista" rows="5" minlength="10" required=""></textarea>
                  </div>
                </div>


               
                  

                <div class="row-col">
                <div class="uk-margin-bottom" id="amount_container">
                  <label class="uk-form-label" for="name">Telegram ID <span class="tag_optional">optional</span></label>
                  <div class="uk-form-controls hyper_login">
                    <input id="tg_id" class="hyper_input uk-input uk-border-rounded" name="name" type="text" placeholder="Telegram ID" required>
                  </div>
                </div>

                <div class="uk-margin-bottom" id="amount_container">
                  <label class="uk-form-label" for="name">Amount <span class="tag_optional">optional</span></label>
                  <div class="uk-form-controls hyper_login">
                    <input id="amount" class="hyper_input uk-input uk-border-rounded" name="number" type="text" placeholder="Enter Amount" required>
                  </div>
                </div>
            </div>

                <div class="row-col">
                <div class="uk-margin-bottom" id="amount_container">
                  <label class="uk-form-label" for="name">Forwarder<span class="tag_required">Types</span></label>
                  <div class="uk-form-controls hyper_login">
                    <select name="fwtype" id="fwtype">
                      <option value="hits">LIVE + RATE LIMIT</option>
                    </select>
                  </div>
                </div>

                <div class="uk-margin-bottom" id="amount_container">
                  <label class="uk-form-label" for="name">Currency<span class="tag_required">Choose</span></label>
                  <div class="uk-form-controls hyper_login">
                    <select name="curr" id="curr">
                      <option value="usd">USD</option>
                      <!-- <option value="gbp">GBP</option> -->
                      <option value="inr">INR</option>
                      <!-- <option value="cad">CAD</option> -->
                      <option value="eur">EUR</option>
                    </select>
                  </div>
                </div>
                </div>

                

                <!-- <div class="uk-margin-bottom">
                <label class="uk-form-label" for="_subject">SK KEY</label>
                <div class="uk-form-controls hyper_login">
                  <input id="_subject" class="hyper_input uk-input uk-border-rounded" placeholder="sk_live_xxxxxxxx" name="_subject" type="text">
                </div>
              </div> -->

                <div class="uk-text-center">
                  <button class="uk-button uk-button-primary uk-border-rounded" id="startbtn" type="submit">start check</button>
                  <button class="uk-button uk-button-primary uk-border-rounded" id="stopbtn" type="submit"> Reload It</button>

                </div>
              </div>




              <div class="uk-card card_cvv uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">
                <!-- <a class="uk-position-cover" href="article.html"></a> -->
                <h3 class="uk-card-title uk-margin-remove uk-text-primary green_title">LIVE - <span id="cvvCount">0</span>

                  <span id="showCvv">Show</span>
                  <span id="saveCvv">Save</span>
                </h3>
                <span id="cvvList">
                  <!-- <p class="uk-margin-small-top">4562463863427327|12|22|223 - Insufficient Funds</p>
                <p class="uk-margin-small-top">5362463863427326|12|27|674 - Insufficient Funds</p> -->
                </span>

              </div>

              <!-- ccn  -->
              <div class="uk-card ccn_card uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">

                <h3 class="uk-card-title uk-margin-remove uk-text-primary warn_title">RATE-LIMIT - <span id="ccnCount">0</span>
                  <span id="showCcn">Show</span>
                  <span id="saveCcn">Save</span>
                </h3>
                <span id="ccnList">
                  <!-- <p class="uk-margin-small-top">4562463863427327|12|22|223</p> -->
                </span>


              </div>

              <!-- dead  -->
              <div class="uk-card dead_card uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">

                <h3 class="uk-card-title uk-margin-remove uk-text-primary dead_title">Dead - <span id="deadCount">0</span>
                  <span id="showDead">Show</span>
                </h3>
                <div id="deadList">
                </div>

              </div>

            </div>
          </article>
        </div>
      </div>
    </div>
  </div>

  <div id="offcanvas-docs" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <h5 class="uk-margin-top">Contact us</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li class="uk-active"><a href="https://t.me/heckerdropschat">Join Group</a></li>
      <li><a href="https://t.me/heckerdrops">Join Channel</a></li>
    </ul>

  </div>
</div>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index.html"><span class="dr_logo"></span></a>
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-top uk-text-center">
      <li><a href="#">Home</a></li>
      <li><a href="#">Create Token</a></li>
              <li>
          <div class="uk-navbar-item"><a class="uk-button uk-button-primary" href="#">Login</a></div>
        </li>
          </ul>
    <div class="uk-margin-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">

        <div>
          <a href="./social?join=telegram&username=dr_bins&utm_source=drchcker" data-uk-icon="icon: telegram" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="uk-section uk-text-center uk-text-muted">
  <div class="uk-container uk-container-small">
    <div>
      <ul class="uk-subnav uk-flex-center">
        <li><a href="https://t.me/heckerdrops">CHANNEL</a></li>
        <li><a href="https://t.me/heckerdropschat">GROUP</a></li>
        <li><a href="https://t.me/heckeraccess_bot:">HIT SENDER</a></li>
      </ul>
    </div>

    <div class="uk-margin-medium uk-text-small uk-link-muted">
     Crafted by <a href="https://t.me/fakehecker">HECKER</a></div>
  </div>
</footer>
<script>
  window.addEventListener('load', () => {
    console.log("Initialized");
    function check_login(session_id) {

       fetch('./log?hyper_check=true').then(function(r) {

        return r.json();

      }).then(function(res) {

        if (res.new_user_logged == true) {
          window.location.href = './logout?new_user_logged=true';
        }

      });
    }

    setInterval(function() {

      check_login("");
      console.log("checking....");
    }, 11000);
  })
</script>
  <script src="../js/awesomplete.js"></script>
  <script src="../js/jquery.js"></script>
  <script src="../js/hyper.js?v=1.2"></script>
  <script src="../js/hyper.notify.js?v=1.2"></script>
  <script src="../js/hyper.sk.js"></script>
  <!-- <script src="js/session.js"></script> -->



</body>

</html>