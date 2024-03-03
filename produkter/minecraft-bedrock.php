<!DOCTYPE html>
<base href="../" />

<html lang="en">
<?php include '../uniHead.php';?>
   <body id ="minecraft-bedrock">
      <?php include '../loading.php';?>
      <?php include '../header.php'; ?>
      <div class="container">
         <div class="main-div">
            <center>
               <div class="fronttextstor">DANSK MINECRAFT BEDROCK HOSTING</div>
               <div class="fronttextlille">Hurtigt og let - Øjeblikkelig opsætning - Skarpe priser</div>
            </center>
         </div>
      </div>
      <?php include '../waves.php'; ?>
      <div class="maindiv">
         <div class="container pt-5">
            <div class="bg-white ram-selector">
               <center>
                  <div class="fronttextstor" style="font-size: 35px; color: #102A43; margin-bottom:15px">
                     VÆLG ANTAL RAM DU ØNSKER 
                  </div>
                  <div class="fronttextlille" style="font-size: 13px; margin-top: -5px; color: #102A43;">
                     Antallet af GB RAM du ønsker på din server <br> 
                     Desto mere RAM du har på din server, desto mere vil det kunne være i stand til.<br><br><br>
                  </div>
                  <p class="product-tekst"><span class="red-farve" id="ramCounter">1</span> GB Ram</p>
                  <div class="range">
                     <input type="range" class="form-range" id="customRange1"  min="1" max="10"  />
                     <div class="fronttextlille" style="font-size: 9px; margin-top: -5px; color: #102A43;">
                        Er du i tvivl om hvor meget ram du skal bruge? - Så kan du altid skrive til vores support.
                     </div>
                  </div>
               </center>
            </div>
         </div>
         <div class="container pt-5 pb-5">
            <div class="bg-white ram-selector">
               <section class="pricing py-5">
                  <div class="fronttextstor" style="font-size: 35px; color: #102A43; margin-bottom:50px">
                     PAKKE LØSNINGER
                  </div>
                  <div class="container">
                     <div class="row pricing">
                        <div class="col-lg-4">
                           <div class="card mb-5 mb-lg-0 card-fade-basic">
                              <div class="card-body">
                                 <h5 class="card-title text-muted text-uppercase text-center">Basic <span id="ramCounter1">1</span>GB RAM</h5>
                                 <h6 class="card-price text-center"><span id="prisStandard">1</span>,-<span class="period">/md</span></h6>
                                 <hr>
                                 <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Ubegrænset antal spillere</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Fuld FTP Adgang</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Gratis support</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Gratis MySQL Database</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Ubegrænset lagerplads</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>DDoS beskyttelse</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>NVMe SSD</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>AMD Ryzen™ 9 5950X CPU</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Support prioritet</li>
                                 </ul>
                                 <a href="#" class="btn btn-block basic text-uppercase">Bestil</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <div class="card mb-5 mb-lg-0 card-fade-premium">
                              <div class="card-body">
                                 <h5 class="card-title text-muted text-uppercase text-center">Premium <span id="ramCounter2">1</span>GB RAM</h5>
                                 <h6 class="card-price text-center"><span id="prisPremium">1</span>,-<span class="period">/md</span></h6>
                                 <hr>
                                 <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Ubegrænset antal spillere</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Fuld FTP Adgang</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Gratis support</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Gratis MySQL Database</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Ubegrænset lagerplads</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>DDoS beskyttelse</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>NVMe SSD</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>AMD Ryzen™ 9 5950X CPU</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Support prioritet</li>
                                 </ul>
                                 <a href="#" class="btn btn-block premium text-uppercase">Bestil</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            </section>
         </div>
      </div>


      <div class="tilbud">

      </div>

      <?php include '../footer.php'; ?>
      <script>
         var slider = document.getElementById("customRange1");
         var output = document.getElementById("ramCounter");
         var output1 = document.getElementById("ramCounter1");
         var output2 = document.getElementById("ramCounter2");
         var prisPremium = document.getElementById("prisPremium");
         var prisStandard = document.getElementById("prisStandard");
         output.innerHTML = slider.value; 
         output1.innerHTML = slider.value; 
         output2.innerHTML = slider.value; 
         prisPremium.innerHTML = slider.value * 29; 
         prisStandard.innerHTML = slider.value * 17; 
         
         
         slider.oninput = function() {
           output.innerHTML = this.value;
           output1.innerHTML = this.value;
           output2.innerHTML = this.value;
           prisPremium.innerHTML = this.value * 29; 
           prisStandard.innerHTML = this.value * 17; 
         } 
      </script>
   </body>
</html>
