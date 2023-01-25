
  <!-- The splash screen HTML -->
  <div id="splash">
    <div id="splash-header">My App</div>
    <div id="splash-content">Loading...</div>
    <div id="splash-footer">Version 1.0.0</div>
  </div>

  <!-- The JavaScript to remove the splash screen once the app has loaded -->
  <script>
    window.addEventListener('load', function() {
      var splash = document.getElementById('splash');
      splash.style.display = 'none';
    });
  </script>
