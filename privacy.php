<!DOCTYPE html>
<html lang="en">

<?php include 'uniHead.php';?>


<body>

    <?php include 'loading.php';?>

    <?php include 'header.php'; ?>


    <div class="container">
        <div class="main-div">
            <center>
                <div class="fronttextstor">MØD HOLDET BAG</div>
                <div class="fronttextlille">Vi brænder for at gøre din oplevelse bedre!</div>
            </center>
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

    <div class="meetteam">

        <div class="container">
            <div class="row justify-content-center" style="padding-top: 35px;">
                <div class="col-md-3 card team">
                    <div class="bg-white p-3 text-center rounded box">
                        <img class="img-responsive rounded-circle" src="images/team/nicolai.webp" width="90">
                        <h5 class="mt-3 name">Nicolai Dybro Jensen</h5><span class="work">Adminsterende direktør</span>
                        <div class="mt-4 about mb-4"><span>Står for frontend design af hjemmeside, marketing og teknisk support</span></div>
                        <row>







                            <center>
                                <a class="btn social-media btn-copy js-tooltip js-copy" style="background-color: #5865F2;" href="#!" role="button" data-toggle="tooltip" data-placement="bottom" data-copy="Zoom#3248" title="Klik for at kopiere">
                                    <i class="fab fa-discord"></i>
                                </a>
                                <a class="btn social-media btn-copy js-tooltip js-copy" style="background-color: #dd4b39;" href="#!" role="button" data-toggle="tooltip" data-placement="bottom" data-copy="nicolai160g@gmail.com" title="Klik for at kopiere">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a class="btn social-media" style="background-color: #333333;" href="https://github.com/ZoomDK" target="_blank" role="button">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a class="btn social-media" style="background-color: #ed302f;" href="https://www.youtube.com/channel/UCUn_jSBmQYaZbTUdNCw9E1g" target="_blank" role="button">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </center>
                        </row>
                    </div>

                </div>
                <div class="col-md-3 card team">
                    <div class="bg-white p-3 text-center rounded box">
                        <img class="img-responsive rounded-circle" src="images/team/alexander.webp" width="90">
                        <h5 class="mt-3 name">Alexander Andersen</h5><span class="work">Adminsterende direktør</span>
                        <div class="mt-4 about mb-4"><span>Står for backend arbejde af hjemmeside, systemet bag minhosting og teknisk support</span></div>
                        <row>
                            <center>
                                <a class="btn social-media btn-copy js-tooltip js-copy" style="background-color: #5865F2;" href="#!" role="button" data-toggle="tooltip" data-placement="bottom" data-copy="ცųɩʑıı#3650" title="Klik for at kopiere">
                                    <i class="fab fa-discord"></i>
                                </a>
                                <a class="btn social-media btn-copy js-tooltip js-copy" style="background-color: #dd4b39;" href="#!" role="button" data-toggle="tooltip" data-placement="bottom" data-copy="nicolai160g@gmail.com" title="Klik for at kopiere">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a class="btn social-media" style="background-color: #333333;" href="#!" role="button">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a class="btn social-media" style="background-color: #ed302f;" href="#!" role="button">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </center>
                        </row>
                    </div>


                </div>


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

