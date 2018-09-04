


  
<div class="header">
  <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed custom-can-transform" id="menu">
    <a class="pure-menu-heading" href="/">ABCruise</a>
    <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
    
    <ul class="pure-menu-list">
      <li class="pure-menu-item"><a href="programme.php" class="pure-menu-link">Programme</a></li>
      <li class="pure-menu-item"><a href="/" class="pure-menu-link">Home</a></li>
      
      <!--li class="pure-menu-item"><a href="#aregistration" class="pure-menu-link">Register</a></li-->
    </ul>
  </div>
</div>

<script>
  (function (window, document) {
  var menu = document.getElementById('menu'),
  WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

  function toggleHorizontal() {
     document.getElementById('menu').classList.toggle('pure-menu-horizontal');
  };

  function toggleMenu() {
     // set timeout so that the panel has a chance to roll up
     // before the menu switches states
     if (menu.classList.contains('open')) {
        setTimeout(toggleHorizontal, 500);
     }
     else {
        toggleHorizontal();
     }
     menu.classList.toggle('open');
     document.getElementById('toggle').classList.toggle('x');
  };

  function closeMenu() {
     if (menu.classList.contains('open')) {
        toggleMenu();
     }
  }

  document.getElementById('toggle').addEventListener('click', function (e) {
     e.preventDefault();
     toggleMenu();
  });

  window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
  })(this, this.document);

</script>
