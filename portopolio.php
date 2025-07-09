<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  
  <!-- ===== CSS Files ===== -->
  <link rel="stylesheet" href="css/style2.css" />
  <link rel="stylesheet" href="css/skins/color-1.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- ====== Style Switcher ====== -->
  <link
    rel="stylesheet"
    href="css/skins/color-1.css"
    class="alternate-style"
    title="color-1"
    disabled />
  <link
    rel="stylesheet"
    href="css/skins/color-2.css"
    class="alternate-style"
    title="color-2"
    disabled />
  <link
    rel="stylesheet"
    href="css/skins/color-3.css"
    class="alternate-style"
    title="color-3"
    disabled />
  <link
    rel="stylesheet"
    href="css/skins/color-4.css"
    class="alternate-style"
    title="color-4"
    disabled />
  <link
    rel="stylesheet"
    href="css/skins/color-5.css"
    class="alternate-style"
    title="color-5"
    disabled />
  <link rel="stylesheet" href="css/style-switcher2.css" />
  <style>
    /* Portfolio Section Styles */
    .portfolio .container {
      padding-bottom: 40px;
    }

    .portfolio .portfolio-heading {
      flex: 0 0 100%;
      max-width: 100%;
      margin-bottom: 40px;
    }

    .portfolio .portfolio-heading h2 {
      color: var(--text-black-900);
      font-weight: 500;
    }

    .portfolio .portfolio-item {
      flex: 0 0 100%;
      max-width: 100%;
      margin-bottom: 30px;
    }

    .portfolio .portfolio-item-inner {
      border: 6px solid var(--bg-black-100);
      border-radius: 10px;
      overflow: hidden;
      cursor: pointer;
      display: flex;
      flex-direction: row;
    }

    .portfolio .portfolio-img {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .portfolio .portfolio-img img {
      width: 100%;
      display: block;
      height: 100%;
      object-fit: cover;
    }

    .portfolio .portfolio-info {
      flex: 0 0 50%;
      max-width: 50%;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .portfolio .portfolio-info h3 {
      font-size: 18px;
      margin-bottom: 15px;
      color: var(--text-black-900);
    }

    .portfolio .portfolio-info p {
      font-size: 16px;
      line-height: 1.6;
      color: var(--text-black-700);
    }

    /* Responsive Design */
    @media (max-width: 991px) {
      .portfolio .portfolio-item-inner {
        flex-direction: column;
      }

      .portfolio .portfolio-img,
      .portfolio .portfolio-info {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .portfolio .portfolio-img img {
        height: 300px;
      }
    }

    @media (max-width: 767px) {
      .portfolio .portfolio-item-inner {
        flex-direction: column;
      }

      .portfolio .portfolio-img,
      .portfolio .portfolio-info {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .portfolio .portfolio-img img {
        height: 250px;
      }

      .portfolio .portfolio-info h3 {
        font-size: 16px;
      }

      .portfolio .portfolio-info p {
        font-size: 14px;
      }
    }

    .style-switcher {
      position: fixed;
      right: 0;
      top: 60px;
      padding: 15px;
      width: 200px;
      border: 1px solid var(--bg-black-50);
      background: var(--bg-black-100);
      z-index: 101;
      border-radius: 5px;
      transition: all 0.3s ease;
      transform: translateX(100%);
    }

    .style-switcher.open {
      transform: translateX(-25px);
    }

    .style-switcher .s-icon {
      position: absolute;
      height: 40px;
      width: 40px;
      text-align: center;
      font-size: 20px;
      background: var(--bg-black-100);
      color: var(--text-black-900);
      right: 100%;
      border: 1px solid var(--bg-black-50);
      margin-right: 25px;
      cursor: pointer;
      transition: all 0.3s ease;
      border-radius: 50%;
    }

    .style-switcher .s-icon i {
      line-height: 40px;
    }

    .style-switcher .style-switcher-toggler {
      top: 0;
    }

    .style-switcher .day-night {
      top: 55px;
    }

    .style-switcher h4 {
      margin: 0 0 10px;
      color: var(--text-black-700);
      font-size: 16px;
      font-weight: 600;
      text-transform: capitalize;
    }

    .style-switcher .colors {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .style-switcher .colors span {
      display: inline-block;
      height: 30px;
      width: 30px;
      border-radius: 50%;
    }

    .style-switcher .color-1 {
      background: #ec1839;
    }

    .style-switcher .color-2 {
      background: #fa5b0f;
    }

    .style-switcher .color-3 {
      background: #37b182;
    }

    .style-switcher .color-4 {
      background: #1854b4;
    }

    .style-switcher .color-5 {
      background: #f021b2;
    }
  </style>
</head>

<body>
  <!-- ===== Main Container Start ===== -->
  <div class="main-container">
    <!-- ===== Aside Start ===== -->
    <div class="aside">
      <div class="logo">
        <a href="#"><span> C</span>akowi</a>
      </div>
      <div class="nav-toggler">
        <span></span>
      </div>
      <ul class="nav">
        <li>
          <a href="homebaru.php"><i class="fa fa-home"></i> Home</a>
        </li>
        <li>
          <a href="about.php"><i class="fa fa-user"></i> About</a>
        </li>
        <li>
          <a href="service.php"><i class="fa fa-list"></i>Services</a>
        </li>
        <li>
          <a href="portopolio.php" class="active"><i class="fa fa-briefcase"></i>Portfolio</a>
        </li>
        <li>
          <a href="contact.php"><i class="fa fa-comments"></i>Contact</a>
        </li>
      </ul>
    </div>
    <!-- ===== Aside End ===== -->
    <!-- ===== Main Content Start ===== -->
    <div class="main-content">
      <!-- ===== Portfolio Section Start ===== -->
      <section class="portfolio section" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Portfolio</h2>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-heading padd-15">
              <h2>My Last Projects :</h2>
            </div>
          </div>
          <?php
          $query = "SELECT * FROM portfolio";
          $result = $conn->query($query);
          ?>

          <div class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
              <!-- ====== portfolio item start ====== -->
              <div class="portfolio-item padd-15">
                <div class="portfolio-item-inner shadow-dark">
                  <div class="portfolio-img">
                    <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['title']; ?>" />
                  </div>
                  <div class="portfolio-info">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                  </div>
                </div>
              </div>
              <!-- ====== portfolio item End ====== -->
            <?php } ?>
          </div>
        </div>
      </section>
      <!-- ===== Portfolio Section End ===== -->
    </div>
    <!-- ===== Main Content End ===== -->
  </div>
  <!-- ===== Main Container End ===== -->

  <!-- ===== Style Switcher Start ===== -->
  <div class="style-switcher">
    <div class="style-switcher-toggler s-icon">
      <i class="fas fa-cog fa-spin"></i>
    </div>
    <div class="day-night s-icon">
      <i class="fas"></i>
    </div>
    <h4>Theme Colors</h4>
    <div class="colors">
      <span class="color-1" onclick="setActiveStyle('color-1')"></span>
      <span class="color-2" onclick="setActiveStyle('color-2')"></span>
      <span class="color-3" onclick="setActiveStyle('color-3')"></span>
      <span class="color-4" onclick="setActiveStyle('color-4')"></span>
      <span class="color-5" onclick="setActiveStyle('color-5')"></span>
    </div>
  </div>
  <!-- ===== Style Switcher End ===== -->

  <!-- ===== JS Files ===== -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"
    referrerpolicy="no-referrer"></script>
  <script src="js/script2.js"></script>
  <script src="js/style-switcher2.js"></script>
  <script>
  (function() {
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark') {
      document.body.classList.add('dark');
    }
  })();
</script>
</body>


</html>