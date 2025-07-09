<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
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
    /* service */
    .service .container {
      padding-bottom: 40px;
    }

    .service .service-item {
      margin-bottom: 30px;
      flex: 0 0 33.33%;
      max-width: 33.33%;
    }

    .service .service-item .service-item-inner {
      background-color: var(--bg-black-100);
      border: 1px solid var(--bg-black-50);
      border-radius: 10px;
      padding: 30px 15px;
      text-align: center;
      transition: all 0.3s ease;
    }

    .service .service-item .service-item-inner:hover {
      box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
    }

    .service .service-item .service-item-inner .icon {
      height: 60px;
      width: 60px;
      border-radius: 50%;
      display: block;
      margin: 0 auto 30px;
      text-align: center;
      transition: all 0.3s ease;
    }

    .service .service-item .service-item-inner .icon .fa {
      font-size: 40px;
      line-height: 60px;
      color: var(--skin-color);
      transition: all 0.3s ease;
    }

    .service .service-item .service-item-inner:hover .icon {
      background: var(--skin-color);
    }

    .service .service-item .service-item-inner:hover .icon .fa {
      font-size: 25px;
      color: #ffffff;
    }

    .service .service-item .service-item-inner h4 {
      font-size: 18px;
      margin-bottom: 15px;
      color: var(--text-black-900);
      font-weight: 700;
      text-transform: capitalize;
    }

    .service .service-item .service-item-inner p {
      font-size: 16px;
      color: var(--text-black-700);
      line-height: 25px;
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
          <a href="service.php" class="active"><i class="fa fa-list"></i>Services</a>
        </li>
        <li>
          <a href="portopolio.php"><i class="fa fa-briefcase"></i>Portfolio</a>
        </li>
        <li>
          <a href="contact.php"><i class="fa fa-comments"></i>Contact</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- ===== Aside End ===== -->
  <!-- ===== Main Content Start ===== -->
  <div class="main-content">
    <!-- ===== About Section End ===== -->
    <!-- ===== Services Section Start ===== -->
    <section class="service section" id="services">
      <div class="container">
        <div class="row">
          <div class="section-title padd-15">
            <h2>Services</h2>
          </div>
        </div>
        <?php
        $query = "SELECT * FROM services";
        $result = $conn->query($query);
        ?>

        <div class="row">
          <?php while ($row = $result->fetch_assoc()) { ?>
            <!-- ===== Service item Start ====== -->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <i class="<?php echo $row['icon_class']; ?>"></i>
                </div>
                <h4><?php echo $row['title']; ?></h4>
                <p><?php echo $row['description']; ?></p>
              </div>
            </div>
            <!-- ===== Service item End ====== -->
          <?php } ?>
        </div>
      </div>
    </section>

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