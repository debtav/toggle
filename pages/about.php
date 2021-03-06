<?php include("../main.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="color-scheme" content="dark light" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, viewport-fit=cover"
    />
    <meta
      name="description"
      content="This is an example of a
meta description. This will often show up in search results."
    />
    <title>About - Dark Mode Toggle</title>
    <link rel="stylesheet" href="../css/all.css" />

    <script async fetchpriority="high" src="../js/main.js"></script>
  </head>
  <body id="about" class="light-theme <?php echo $themeClass; ?>">
    <header>
      <nav>
        <button
          title="Theme Mode Toggling - Dark and Light Theme"
          class="toggler"
        ></button>
        <div class="m-auto navigation-large d-none d-lg-block">
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li class="active"><a href="#">About</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="d-block d-lg-none">
          <button
            title="Open Menu"
            class=""
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight"
            aria-controls="offcanvasRight"
          >
            <i class="fa-solid fa-bars"></i>
          </button>

          <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel"
          >
            <div class="offcanvas-header">
              <button
                title="Close Menu"
                type="button"
                class="btn-close text-reset"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              >
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
              </button>
            </div>
            <div class="offcanvas-body">
              <!-- MENU -->
              <ul>
            <li><a href="../index.php">Home</a></li>
            <li class="active"><a href="#">About</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- CONTENT -->
    <main></main>
    <footer>
      <div class="container-lg footer-content">
        <div><p>&copy; Copyright 2022</p></div>
      </div>
    </footer>

    <script
      defer
      src="../assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"
    ></script>
  </body>
</html>
