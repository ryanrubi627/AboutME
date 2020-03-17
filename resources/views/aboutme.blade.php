<!DOCTYPE html>
<html>
    <head>
        <title>About me</title>

        <script>
            function aboutme() {
                var p1 = document.getElementById("p1");
                var p2 = document.getElementById("p2");
                var p3 = document.getElementById("p3");

                if (p1.style.display === "block") {
                    p1.style.display = "none";
                    p2.style.display = "block";
                    p3.style.display = "block";
                } else {
                    p1.style.display = "block";
                    p2.style.display = "none";
                    p3.style.display = "none";
                }
            }  

            function contact() {
                var p1 = document.getElementById("p1");
                var p2 = document.getElementById("p2");
                var p3 = document.getElementById("p3");

                if (p2.style.display === "block") {
                    p2.style.display = "none";
                    p1.style.display = "block";
                    p3.style.display = "block";
                } else {
                    p2.style.display = "block";
                    p1.style.display = "none";
                    p3.style.display = "none";
                }
            }  

            function address() {
                var p1 = document.getElementById("p1");
                var p2 = document.getElementById("p2");
                var p3 = document.getElementById("p3");

                if (p3.style.display === "block") {
                    p3.style.display = "none";
                    p1.style.display = "block";
                    p2.style.display = "block";
                } else {
                    p3.style.display = "block";
                    p1.style.display = "none";
                    p2.style.display = "none";
                }
            } 
        </script>
    </head>
    <body>
        <button onclick="aboutme()">About me</button>
        <button onclick="contact()">Contact</button>
        <button onclick="address()">Address</button>

        <p id="p1" hidden>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris<br> nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <br> esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt <br> in culpa qui officia deserunt mollit anim id est laborum.</p>

        <p id="p2" hidden>+639381243713</p>

        <p id="p3" hidden>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat <br>nullapariatur. Excepteur sint occaecat cupidatat non proident</p>
    </body>
</html>
