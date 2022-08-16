<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Frantic Noise</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="styles.css" />
    <script type="module" src="script.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
  </head>
  <body>
    <main>
      <!--  <h1>Frantic Noise<br /></h1> -->
      <div class="headerparent">
        <div class="headerchild">
          <img
            class="franticlogo"
            src="https://raw.githubusercontent.com/franticnoise/web-platform-2xxv7a/main/img/fraNTIC.png"
            width="300"
          /><br />
          Frantic Noise <br />
          Acoustic Levitation Engineer
        </div>
      </div>

      <?php include "menu.php"; ?>

      <script src="https://gumroad.com/js/gumroad.js"></script>

      <div class="mainlandingparent">
        <div id="container">
          <div id="row">
            <div id="cell">
              <img
                class="gumroadimg"
                src="https://raw.githubusercontent.com/franticnoise/web-platform-2xxv7a/main/img/WAVETABLE-ESSENTIALS-FINALTHUMB.png"
              />
            </div>

            <div id="cell">
              <img
                class="gumroadimg"
                src="https://raw.githubusercontent.com/franticnoise/web-platform-2xxv7a/main/img/WAVETABLE-ESSENTIALS-VIRUSTI--FINALTHUMB.png"
              />
            </div>
          </div>
          <div id="row">
            <div id="cell">
              <a
                class="gumroad-button"
                href="https://franticnoise.gumroad.com/l/dtavn"
                >Buy on</a
              >
            </div>
            <div id="cell">
              <a
                class="gumroad-button"
                href="https://franticnoise.gumroad.com/l/zeqvn"
                >Buy on</a
              >
            </div>
          </div>

          <div id="row">
            <div id="cell">
              <img
                class="gumroadimg"
                src="https://raw.githubusercontent.com/franticnoise/web-platform-2xxv7a/main/finall2ibraryy.png"
              /><br />
              <a
                class="gumroad-button"
                href="https://franticnoise.gumroad.com/l/onoxbb"
                >Buy on</a
              >
            </div>
            <div id="cell">
              <img
                class="gumroadimg"
                src="https://raw.githubusercontent.com/franticnoise/web-platform-2xxv7a/main/finallibraryy.png"
              /><br />
              <a
                class="gumroad-button"
                href="https://franticnoise.gumroad.com/l/paWaK"
                >Buy on</a
              >
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>

<script src="vanta/three.min.js"></script>
<script src="vanta/vanta.net.min.js"></script>
<script>
  VANTA.NET({
    el: 'html',
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
  });
</script>
