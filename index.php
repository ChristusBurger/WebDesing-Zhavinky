<!--TODO 
    Pridat search do navbaru
    v pravo, mobile view hamburger menu v pravo v navbaru
    -->
<!DOCTYPE html>

<html lang="cs">
  <head>
    <title>Žhavinky</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="styl.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="icon"
      href="https://cdn-icons-png.flaticon.com/512/2964/2964063.png"
    />
    <meta />
  </head>

  <body>
    <header id="mainHeader">
      <div class="flexContainer">
        <div id="textHeader">
          <a id="refHead" href="index.html">
            <h1>Žhavinky</h1>
          </a>
          <p>...veškeré ožehavé novinky na jednom míště</p>
        </div>

        <div id="search">
          <form action="search.html">
            <input
              class="search__button"
              type="submit"
              name="Odeslat"
              value="Hledat"
            />
            <input type="text" name="jmeno" placeholder="Hledat" />
          </form>
        </div>
      </div>
      <nav class="navbar" id="navbar">
        <a href="index.html" class="active">Nejžhavější</a>
        <div id="myLinks">
          <a class="navbar__buttons" href="zDomova.html">Z domova</a>
          <a class="navbar__buttons" href="politika.html">Politika</a>
          <a class="navbar__buttons" href="kontakty.html">Kontakty</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="hamburger()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>
    </header>
    <section class="flex">
      <article class="block">
        <img src="/images/london.jpg" alt="london" />

        <h2>Za výbuch ve Vrběticích může Kalousek</h2>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
          repellendus reiciendis illo, unde dolores sunt tempore debitis
          perspiciatis nam minus eius consectetur fugit, asperiores sit? Ipsum
          aspernatur voluptatum aperiam obcaecati!
        </p>
        <a class="block__button" href="detailClanku.html">číst dále...</a>
      </article>
      <article class="block">
        <img src="/images/prague1.jpg" alt="prague" />

        <h2>Informatici protestují proti Lorem ipsum</h2>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
          repellendus reiciendis illo, unde dolores sunt tempore debitis
          perspiciatis nam minus eius consectetur fugit, asperiores sit? Ipsum
          aspernatur voluptatum aperiam obcaecati!
        </p>
        <a class="block__button" href="#">číst dále...</a>
      </article>
      <article class="block">
        <img src="images/paris.jpg" alt="paris" />
        <h2>Nová víra zaručující úspěšné zkouškové</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
          repellendus reiciendis illo, unde dolores sunt tempore debitis
          perspiciatis nam minus eius consectetur fugit, asperiores sit? Ipsum
          aspernatur voluptatum aperiam obcaecati!
        </p>
        <a class="block__button" href="#">číst dále...</a>
      </article>
    </section>

    <section class="flex">
      <article class="block">
        <img src="images/london.jpg" alt="london" />
        <h2>Tohle je moje první HTML stránka</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
          repellendus reiciendis illo, unde dolores sunt tempore debitis
          perspiciatis nam minus eius consectetur fugit, asperiores sit? Ipsum
          aspernatur voluptatum aperiam obcaecati!
        </p>
        <a class="block__button" href="#">číst dále...</a>
      </article>
      <article class="block">
        <img src="images/prague1.jpg" alt="prague" />
        <h2>Všichni by už moc rádi na zahrádky</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
          repellendus reiciendis illo, unde dolores sunt tempore debitis
          perspiciatis nam minus eius consectetur fugit, asperiores sit? Ipsum
          aspernatur voluptatum aperiam obcaecati!
        </p>
        <a class="block__button" href="#">číst dále...</a>
      </article>
    </section>

    <aside id="social">
      <ul>
        <li><a class="social__button" id="facebook" href="#">Facebook</a></li>
        <li><a class="social__button" id="instagram" href="#">Instagram</a></li>
        <li><a class="social__button" id="twitter" href="#">Twitter</a></li>
      </ul>
    </aside>

    <footer id="footer">
      &copy; 2021 by Matěj Tvrzník, Martin Ševčík, Jan Vavrek
    </footer>

    <script>
      window.onscroll = function () {
        stickyNavBar();
      };

      let navbar = document.getElementById("navbar");
      let sticky = navbar.offsetTop;

      function stickyNavBar() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky");
        } else {
          navbar.classList.remove("sticky");
        }
      }

      function hamburger() {
        let x = document.getElementById("myLinks");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
    </script>
  </body>
</html>