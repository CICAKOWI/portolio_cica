<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cakowi Portfolio</title>
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

</head>

<body>
  <style>
    /* Awards and Skills Sections */
    .home .section-title {
      flex: 0 0 100%;
      max-width: 100%;
      margin-top: 40px;
    }

    .home .section-title h2 {
      font-size: 40px;
      margin-bottom: 30px;
      color: var(--text-black-900);
      text-align: center;
    }

    .home .awards-item,
    .home .skills-item {
      flex: 0 0 33.33%;
      max-width: 33.33%;
      margin-bottom: 30px;
    }

    .home .awards-item-inner,
    .home .skills-item-inner {
      background-color: var(--bg-black-100);
      border: 1px solid var(--bg-black-50);
      border-radius: 10px;
      padding: 30px 15px;
      text-align: center;
      transition: all 0.3s ease;
    }

    .home .awards-item-inner:hover,
    .home .skills-item-inner:hover {
      box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
    }

    .home .awards-item-inner img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    .home .awards-item-inner h3,
    .home .skills-item-inner h3 {
      font-size: 18px;
      margin-bottom: 10px;
      color: var(--text-black-900);
    }

    .home .awards-item-inner p {
      font-size: 14px;
      color: var(--text-black-700);
      line-height: 25px;
    }

    /* Responsive Design for Awards and Skills */
    @media (max-width: 991px) {

      .home .awards-item,
      .home .skills-item {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    @media (max-width: 767px) {

      .home .awards-item,
      .home .skills-item {
        flex: 0 0 100%;
        max-width: 100%;
      }
    }
  </style>
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
          <a href="homebaru.php" class="active"><i class="fa fa-home"></i> Home</a>
        </li>
        <li>
          <a href="about.php"><i class="fa fa-user"></i> About</a>
        </li>
        <li>
          <a href="service.php"><i class="fa fa-list"></i>Services</a>
        </li>
        <li>
          <a href="portopolio.php"><i class="fa fa-briefcase"></i>Portfolio</a>
        </li>
        <li>
          <a href="contact.php"><i class="fa fa-comments"></i>Contact</a>
        </li>
      </ul>
    </div>
    <!-- ===== Aside End ===== -->
    <!-- ===== Main Content Start ===== -->
    <div class="main-content">
      <!-- ===== Home Section Start ===== -->
      <section class="home active section" id="home">
        <div class="container">
          <div class="row">
            <div class="home-info padd-15">
              <h3 class="hello">
                Hello, my name is <span class="name">Siti Nurcica</span>
              </h3>
              <h3 class="my-profession">
                I' m a <span class="typing">web designer</span>
              </h3>
              <p>
                I'm a web Designer with extensive experience for over 2 years.
                My expertise is to create and website design, graphic design,
                and many more...
              </p>
              <a
                href="https://drive.google.com/drive/folders/1OFWwNcgkR_SQQc0FkqpbD7vqq9AyAX7M"
                class="btn">Download CV</a>
            </div>
            <div class="home-img padd-15">
              <img src="images/1111.jpg" alt="" />
            </div>
          </div>
          <!-- ===== Awards Section Start ===== -->
          <div class="row">
            <div class="section-title padd-15">
              <h2>Awards</h2>
            </div>
          </div>

          <?php


          // Fetch data from the awards table
          $query = "SELECT * FROM awards";
          $result = $conn->query($query); ?>

          <div class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
              <div class="awards-item padd-15">
                <div class="awards-item-inner">
                  <img
                    src="<?php echo $row['image_path']; ?>"
                    alt="<?php echo $row['title']; ?>" />
                  <h3>
                    <i class="<?php echo $row['icon_class']; ?>"></i>
                    <?php echo $row['title']; ?>
                  </h3>
                  <p><?php echo $row['description']; ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
          <!-- ===== Awards Section End ===== -->
          <!-- ===== Skills Section Start ===== -->
          <div class="row">
            <div class="section-title padd-15">
              <h2>Skills</h2>
            </div>
          </div>
          <?php
          // Fetch data from the skills table
          $query = "SELECT * FROM skills";
          $result = $conn->query($query);
          ?>

          <div class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
              <div class="skills-item padd-15">
                <div class="skills-item-inner">
                  <h3><i class="<?php echo $row['icon_class']; ?>"></i> <?php echo $row['skill_name']; ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>
          <!-- ===== Skills Section End ===== -->
        </div>
      </section>
      <!-- ===== Home Section End ===== -->

      <!-- Other sections (About, Services, Portfolio, Contact) remain unchanged -->
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
  <script></script>
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