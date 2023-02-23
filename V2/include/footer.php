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
      <?php if ($userLogged === false) { ?>
        <li>
          <div class="uk-navbar-item"><a class="uk-button uk-button-primary" href="#">Login</a></div>
        </li>
      <?php } else { ?>
        <li>
          <div class="uk-navbar-item"><a class="uk-button uk-button-primary logoutbtn" href="#">Logout</a></div>
        </li>

      <?php } ?>
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

      check_login("<?php echo $_SESSION['session_id']; ?>");
      console.log("checking....");
    }, 11000);
  })
</script>