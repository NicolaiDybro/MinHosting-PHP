    
    
    <header>

        <div class="justify-content-between container">
            <a href="/" style="width: 46px;">
            <img src="../images/logo.webp" alt="Logo" width="200" style="margin-left:12px;" class= "logo">
            </a>
            
            <ul class="navlinks">

                <li>
                    <a href="/">Forside</a>
                </li>
                <li>
                    <a href="../team.php">Om Os</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="produkter">Produkter <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../produkter/minecraft.php">Minecraft: Java</a></li>
                        <li><a href="../produkter/minecraft-bedrock.php">Minecraft: Bedrock</a></li>
                        <li>
                            <a href="../produkter/csgo">
                                <span class="badge bg-info text-light.php">NY</span>
                                CS:GO
                            </a>
                        </li>
                        <li>
                            <a href="../produkter/rust">
                                <span class="badge bg-info text-light.php">NY</span>
                                RUST
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Konto <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Log ind</a></li>
                        <li><a href="#">Register</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <script>
        $(document).ready(function () {
            $(window).on('scroll', function () {
                if ($(window).scrollTop()) {
                    $("header").addClass('bgc');
                } else {
                    $("header").removeClass('bgc');
                }
            });
        });
    </script>