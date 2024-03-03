<div id="loading">
  <div class="spinner-border text-danger loading-image" role="status">
  <span class="sr-only">Loading...</span>
</div>
</div>

<script>
  var load = document.getElementById('loading');

  $(window).on('load', function () {
    load.classList.toggle('hide');
    setTimeout(() => {
      load.classList.toggle('fuldhide');
    }, "600")

  }) 
</script>

