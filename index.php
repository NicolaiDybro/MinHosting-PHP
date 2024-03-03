<!DOCTYPE html>
<html lang="en">

<?php include 'uniHead.php';?>


<body>

    <?php include 'loading.php';?>

    <?php include 'header.php';?>
    <div class="container">
        <div class="frontside">
            <div class="row">


                <div class="col-md-6">
                
                    <div class="fronttextstor">Dansk server hosting</div>
                    <div class="fronttextlille"><i class="bi bi-check2-circle"></i> &nbsp;&nbsp;Stabile servere</div>
                    <div class="fronttextlille"><i class="bi bi-check2-circle"></i> &nbsp;&nbsp;Minimal nedetid</div>
                    <div class="fronttextlille"><i class="bi bi-check2-circle"></i> &nbsp;&nbsp;Høj sikkerhed</div>
                    <div class="fronttextlille"><i class="bi bi-check2-circle"></i> &nbsp;&nbsp;Brugerdefinerede systemer</div>
                    <div class="fronttextlille"><i class="bi bi-check2-circle"></i> &nbsp;&nbsp;24/7 support</div>
                    <button role="button" class="btn btn-outline-light btn-lg btn-iconed btn-rounded">
                        <span class="spn" onclick="window.location.href='#servers'">START EN SERVER</span> <i class="fa fa-chevron-right"></i> 
                    </button>
                </div>
                <div class="col-md-6">

                    <img class="img" src="images/computer.webp" alt="logo" width="600">

                </div>
            </div>
        </div>
    </div>

    
    <div class="baggrund"></div>
    <div>
        <svg  id= "servers" class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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


    <div class="box" style="height:800px;">
        <div class="container">
        <div class="text-center" style="padding-bottom: 50px;">
            <div class="fronttextstor" style="font-size: 35px; color: #102A43;">Vælg din egen server</div>
            <div class="fronttextlille" style="font-size: 20px; margin-top: -5px; color: #102A43;">Super enkelt</div>
        </div>
            
            <div class="row justify-content-around">
                <div class="col-md-auto">
                    <div class="feature-card" style="background-image: url(images/minecraftbackground.webp);">
                        <div class="imgBox">
                            <img src="images/minecraft.webp" class="feature-card-hover">
                        </div>

                        <div class="contentBox">
                            <h3>MINECRAFt</h3>
                            <h2 class="price">Fra 17,-<small>/md</small></h2>
                            <a href="produkter/minecraft.php" class="bestil">BESTIL</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="feature-card" style="background-image: url(images/csgobackground.webp);">
                        <div class="imgBox">
                            <img src="images/csgo.webp" class="feature-card-hover">
                        </div>

                        <div class="contentBox">
                            <h3>CS:GO</h3>
                            <h2 class="price">Fra 23,-<small>/md</small></h2>
                            <a href="produkter/csgo.php" class="bestil">BESTIL</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="feature-card" style="background-image: url(images/rustbackground.webp);">
                        <div class="imgBox">
                            <img src="images/rust.webp" class="feature-card-hover">
                        </div>

                        <div class="contentBox">
                            <h3>RUST</h3>
                            <h2 class="price">Fra 17,-<small>/md</small></h2>
                            <a href="produkter/rust.php" class="bestil">BESTIL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="tilbud">
        <div class="text-center" style="padding-top:50px">
            <div class="fronttextstor" style="font-size: 35px">Se alle vores features</div>
            <div class="fronttextlille" style="font-size: 20px; margin-top: -5px; ">Stabilt, billigt og nemt</div>
        </div>
        <div class="container">
            <div class="row justify-content-around" style="margin-top: 55px;">
                <div class="card" style="width: 20rem;">
                    <div class="card-body ">
                        <div class="features">
                            <img src="images/icons/zap.webp" alt="minecraft server hosting" draggable="false" class="feature-image">
                            <div class="text">
                                <h5 class="card-title">Øjeblikkelig Opsætning</h5>
                                <p class="card-text">Alle serverene opsættes øjeblikkeligt og automatisk, og vil kunne tilsluttes hurtigt efter køb</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <div class="card-body ">
                        <div class="features">
                            <img src="images/icons/support.webp" alt="minecraft server hosting" draggable="false" class="feature-image">
                            <div class="text">
                                <h5 class="card-title">Kvalificeret support</h5>
                                <p class="card-text">Vi har hurtigt, nemt og enkelt support, med folk der brænder for at hjælpe dig</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <div class="card-body ">
                        <div class="features">
                            <img src="images/icons/pris.webp" alt="minecraft server hosting" draggable="false" class="feature-image">
                            <div class="text">
                                <h5 class="card-title">Overkommelige priser</h5>
                                <p class="card-text">Vi tilbyder overkommelige priser, så alle kan være med!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around" style="margin-top: 75px;">
                <div class="card" style="width: 20rem;">
                    <div class="card-body ">
                        <div class="features">
                            <img src="images/icons/ddos.webp" alt="minecraft server hosting" draggable="false" class="feature-image">
                            <div class="text">
                                <h5 class="card-title">Høj sikkerhed </h5>
                                <p class="card-text">Med DDoS beskyttelse vil vores netværk stoppe alle former for angreb</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <div class="card-body ">
                        <div class="features">
                            <img src="images/icons/server.webp" alt="minecraft server hosting" draggable="false" class="feature-image">
                            <div class="text">
                                <h5 class="card-title">Stabile servere</h5>
                                <p class="card-text">Med stabile servere kan du altid forvente oppetid og sikre dine spiller en god oplevelse</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <div class="card-body ">
                        <div class="features">
                            <img src="images/icons/kontrol.webp" alt="minecraft server hosting" draggable="false" class="feature-image">
                            <div class="text">
                                <h5 class="card-title">Enkelt kontrolpanel</h5>
                                <p class="card-text">Vores kontrolpanel er baseret på det populære open source pterodactyl</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="box" style="height:500px;">
        <div class="text-center" style="padding-top:50px">
            <div class="fronttextstor" style="font-size: 35px; color: #102A43;">14-dages garanteret returret</div>
            <div class="fronttextlille" style="color: #102A43;">Er du ikke tilfreds med din server, så refunderes din betaling kvit og frit.</div>
            <button role="button" class="btn btn-outline-danger btn-lg btn-iconed btn-rounded" style="width: 200px;">
                <span class="spn" onclick="window.location.href='#servers'">Kom i gang</span>
            </button>
        </div>
    </div>

    <?php include 'footer.php';?>
</body>
</html>

