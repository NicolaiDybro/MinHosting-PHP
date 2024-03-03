<!DOCTYPE html>
<html lang="en">

<?php include 'uniHead.php';?>


<body>

    <?php include 'loading.php';?>

    <?php include 'header.php'; ?>


    <div class="container">
        <div class="main-div">

        </div>
    </div>




    <div class="baggrund"></div>
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#f5f7fa" />
            </g>
        </svg>
    </div>

    <div class="maindiv" style="min-height: 60vh">

    <div class="d-flex align-items-center justify-content-center pt-5" >
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Woops!</span> Siden indes ikke.</p>
                <p class="lead">
                    Siden du kigger efter findes ikke.
                  </p>
                <a href="/" class="btn btn-danger">Gå til forsiden</a>
            </div>
        </div>

    </div>


   <?php include 'footer.php'; ?>
   

   <script>
        function copyToClipboard(text, el) {
            var copyTest = document.queryCommandSupported('copy');
            var elOriginalText = el.attr('data-original-title');

            if (copyTest === true) {
                var copyTextArea = document.createElement("textarea");
                copyTextArea.value = text;
                document.body.appendChild(copyTextArea);
                copyTextArea.select();
                try {
                    var successful = document.execCommand('copy');
                    var msg = successful ? 'Copied!' : 'Whoops, not copied!';
                    el.attr('data-original-title', msg).tooltip('show');
                } catch (err) {
                    console.log('Oops, unable to copy');
                }
                document.body.removeChild(copyTextArea);
                el.attr('data-original-title', elOriginalText);
            } else {
                window.prompt("Copy to clipboard: Ctrl+C or Command+C, Enter", text);
            }
        }

        $(document).ready(function () {
            $('.js-tooltip').tooltip();
            $('.js-copy').click(function () {
                var text = $(this).attr('data-copy');
                var el = $(this);
                copyToClipboard(text, el);
            });
        });
    </script>



</body>
</html>

