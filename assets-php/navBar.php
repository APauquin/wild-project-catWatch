<audio id="myAudio">
    <source src="nyancat.ogg" type="audio/ogg">

</audio>
<nav>
    <div id="mobile"><a href="./index.php"><img id="logomobile" src="https://i.ibb.co/PCQPqty/Illustration-sans-titre-4.png" alt="Illustration-sans-titre-1" border="0"></a> </div>

    <a href="./index.php"><img id="logo" src="https://i.ibb.co/PCQPqty/Illustration-sans-titre-4.png" alt="Illustration-sans-titre-1" border="0"></a>

    <ul id="rainbow">
        <li id="vide"></li>
        <li class="menu-deroulant">
            <a href="#">Articles</a>
            <ul id="rainbow2" class="sous-menu">
                <li><a href="#">categories</a></li>
                <li><a href="#">categories</a></li>
                <li><a href="#">categories</a></li>
            </ul>
        </li>

        <li><a href="../advice.php">Conseils</a></li>
        <li><a href="../contact.php">Contacts</a></li>

    </ul>
    <script>
        function changeImagepc() {
            if (document.getElementById("logo").src == "https://i.ibb.co/PCQPqty/Illustration-sans-titre-4.png") {
                document.getElementById("logo").src = "https://i.ibb.co/Gs6J98c/pngwing-com-1.png"

            } else if (document.getElementById("logo").src == "https://i.ibb.co/Gs6J98c/pngwing-com-1.png") {
                document.getElementById("logo").src = "https://i.ibb.co/PCQPqty/Illustration-sans-titre-4.png"
            }
        }

        function changeImageMobile() {

            if (document.getElementById("logomobile").src == "https://i.ibb.co/PCQPqty/Illustration-sans-titre-4.png") {
                document.getElementById("logomobile").src = "https://i.ibb.co/Gs6J98c/pngwing-com-1.png"

            } else if (document.getElementById("logomobile").src == "https://i.ibb.co/Gs6J98c/pngwing-com-1.png") {
                document.getElementById("logomobile").src = "https://i.ibb.co/PCQPqty/Illustration-sans-titre-4.png"
            }

        }

        function colorRainbow() {
            if (document.getElementById("logo").src == "https://i.ibb.co/PCQPqty/Illustration-sans-titre-4.png") {
                document.getElementById("rainbow").style.backgroundImage = "linear-gradient(to bottom,Red , Orange, Yellow, Green, Blue, Indigo, Violet)";
                document.getElementById("rainbow3").style.backgroundImage = "linear-gradient(to bottom,Red , Orange, Yellow, Green, Blue, Indigo, Violet)";
                document.getElementById("myAudio").play();
                document.getElementById("rainbow2").style.backgroundImage = "linear-gradient(to bottom,Red , Orange, Yellow, Green, Blue, Indigo, Violet)";
                document.getElementById("rainbow4").style.backgroundImage = "linear-gradient(to bottom,Red , Orange, Yellow, Green, Blue, Indigo, Violet)";
                document.getElementById("rainbow6").style.backgroundImage = "linear-gradient(to bottom,Red , Orange, Yellow, Green, Blue, Indigo, Violet)";
                document.getElementById("rainbow7").style.backgroundImage = "linear-gradient(to bottom,Red , Orange, Yellow, Green, Blue, Indigo, Violet)";
                document.getElementById("rainbow8").style.backgroundImage = "linear-gradient(to bottom,Red , Orange, Yellow, Green, Blue, Indigo, Violet)";
                document.getElementById("rainbow5").style.backgroundImage = "linear-gradient(to bottom,Red , Orange, Yellow, Green, Blue, Indigo, Violet)";
                // document.getElementById("rainbow5").style.backgroundImage = "url(https://i.ibb.co/TgLYpvK/robot-unicorn-wallpaper-unicorns-wallpaper-1496408534.jpg)";


            } else if (document.getElementById("logo").src == "https://i.ibb.co/Gs6J98c/pngwing-com-1.png") {
                document.getElementById("rainbow").style.backgroundImage = 'none';
                document.getElementById("rainbow3").style.backgroundImage = 'none';
                document.getElementById("myAudio").pause();
                document.getElementById("rainbow2").style.backgroundImage = 'none';
                document.getElementById("rainbow4").style.backgroundImage = 'none';
                document.getElementById("rainbow5").style.backgroundImage = "none";
                document.getElementById("rainbow5").style.backgroundColor = '#e0f8fe';
                document.getElementById("rainbow6").style.backgroundImage = 'none';
                document.getElementById("rainbow7").style.backgroundImage = 'none';
                document.getElementById("rainbow8").style.backgroundImage = 'none';
            }
        }
    </script>
</nav>