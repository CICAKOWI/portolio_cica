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

</head>

<body>
  <!-- ===== Home Section End ===== -->
  <!-- ===== About Section Start ===== -->

  <style>
    /* About */
    .about .about-content {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .about .about-content .about-text {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .about .about-content .about-text h3 {
      font-size: 24px;
      margin-bottom: 15px;
      font-weight: 700;
      color: var(--text-black-900);
    }

    .about .about-content .about-text h3 span {
      color: var(--skin-color);
    }

    .about .about-content .about-text p {
      font-size: 16px;
      line-height: 25px;
      color: var(--text-black-700);
    }

    .about .about-content .personal-info {
      flex: 0 0 60%;
      max-width: 60%;
      margin-top: 40px;
    }

    .about .about-content .personal-info .info-item {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .about .about-content .personal-info .info-item p {
      font-weight: 600;
      padding: 10px 0;
      font-size: 16px;
      color: var(--text-black-900);
      border-bottom: 1px solid var(--bg-black-50);
    }

    .about .about-content .personal-info .info-item p span {
      font-weight: 400;
      color: var(--text-black-700);
      margin-left: 4px;
      display: inline-block;
    }

    .about .about-content .personal-info .buttons {
      margin-top: 30px;
    }

    .about .about-content .personal-info .buttons .btn {
      margin-top: 10px;
    }

    .about .about-content .skills {
      flex: 0 0 40%;
      max-width: 40%;
      margin-top: 40px;
    }

    .about .about-content .skills .skill-item {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .about .about-content .skills .skill-item h5 {
      line-height: 40px;
      font-weight: 600;
      font-size: 16px;
      color: var(--text-black-900);
      text-transform: capitalize;
    }

    .about .about-content .skills .skill-item .progress {
      background-color: var(--bg-black-50);
      height: 7px;
      border-radius: 4px;
      width: 100%;
      position: relative;
    }

    .about .about-content .skills .skill-item {
      margin-bottom: 25px;
    }

    .about .about-content .skills .skill-item .progress .progress-in {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      border-radius: 4px;
      background-color: var(--skin-color);
    }

    .about .about-content .skills .skill-item .skill-percent {
      position: absolute;
      right: 0;
      color: var(--text-black-900);
      top: -40px;
      font-weight: 400;
      line-height: 40px;
    }

    .about .about-content .education,
    .about .about-content .experience {
      flex: 0 0 50%;
      max-width: 50%;
      margin-top: 30px;
    }

    .about .about-content h3.title {
      font-size: 24px;
      margin-bottom: 30px;
      font-weight: 700;
      color: var(--text-black-900);
    }

    .about .about-content .timeline-box {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .about .about-content .timeline {
      background-color: var(--bg-black-100);
      padding: 30px 15px;
      border: 1px solid var(--bg-black-50);
      border-radius: 10px;
      width: 100%;
      position: relative;
    }

    .about .about-content .timeline .timeline-item {
      position: relative;
      padding-left: 37px;
      padding-bottom: 50px;
    }

    .about .about-content .timeline .timeline-item:last-child {
      padding-bottom: 0;
    }

    .about .about-content .timeline .timeline-item::before {
      content: "";
      width: 1px;
      position: absolute;
      height: 100%;
      left: 7px;
      top: 0;
      background-color: var(--skin-color);
    }

    .about .about-content .timeline .circle-dot {
      position: absolute;
      left: 0;
      top: 0;
      height: 15px;
      width: 15px;
      border-radius: 50%;
      background-color: var(--skin-color);
    }

    .about .about-content .timeline .timeline-date {
      font-weight: 400;
      font-size: 14px;
      margin-bottom: 12px;
      color: var(--text-black-700);
    }

    .about .about-content .timeline .timeline-date .fa {
      margin-right: 5px;
    }

    .about .about-content .timeline .timeline-title {
      font-weight: 700;
      font-size: 18px;
      margin-bottom: 15px;
      text-transform: capitalize;
      color: var(--text-black-900);
    }

    .about .about-content .timeline .timeline-text {
      line-height: 25px;
      font-size: 16px;
      text-align: justify;
      color: var(--text-black-700);
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
          <a href="about.php" class="active"><i class="fa fa-user"></i> About</a>
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
      <section class="about section" id="about">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="row">
            <div class="about-content padd-15">
              <div class="row">
                <div class="about-text padd-15">
                  <h3>I'm Siti Nurcica and <span>Web Developer</span></h3>
                  <p>
                    I'm Siti Nurcica, a third-semester Informatics student
                    with a passion for UI/UX design, web development, and
                    problem-solving. I've won several competitions in UI/UX
                    and poster design, which highlight my creativity and
                    attention to detail. I'm experienced with design tools
                    like Figma and love creating user-centered solutions. I'm
                    also active in campus organizations, blending my
                    creativity with logical thinking. I'm constantly
                    developing my skills in technology and aiming to pursue a
                    career in UI/UX design and front-end development.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="personal-info padd-15">
                  <?php

                  $query = "SELECT * FROM personal_info";
                  $result = $conn->query($query);
                  ?>

                  <div class="row">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                      <div class="info-item padd-15">
                        <p><?php echo $row['attribute_name']; ?> : <span><?php echo $row['attribute_value']; ?></span></p>
                      </div>
                    <?php } ?>
                  </div>

                  <div class="row">
                    <div class="buttons padd-15">
                      <a
                        href="#contact"
                        data-section-index="1"
                        class="btn hire-me">Hire Me</a>
                    </div>
                  </div>
                </div>
                <div class="skills padd-15">
                  <?php
                  $query = "SELECT * FROM levels";
                  $result = $conn->query($query);
                  ?>

                  <div class="row">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                      <div class="skill-item padd-15">
                        <h5><?php echo $row['skill_name']; ?></h5>
                        <div class="progress">
                          <div class="progress-in" style="width: <?php echo $row['skill_percentage']; ?>%"></div>
                          <div class="skill-percent"><?php echo $row['skill_percentage']; ?>%</div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>

                </div>
              </div>
              <?php
              $query = "SELECT * FROM education";
              $result = $conn->query($query);
              ?>
              <div class="row">
                <div class="education padd-15">
                  <h3 class="title">Education</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                          <!-- ===== timeline item ===== -->
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i>
                              <?php echo $row['start_year']; ?> -
                              <?php echo $row['end_year'] ? $row['end_year'] : 'Now'; ?>
                            </h3>
                            <h4 class="timeline-title">
                              <?php echo $row['institution']; ?>
                            </h4>
                            <p class="timeline-text">
                              <?php echo $row['description']; ?>
                            </p>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $query = "SELECT * FROM experience";
                $result = $conn->query($query);
                ?>

                <div class="experience padd-15">
                  <h3 class="title">Experience</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                          <!-- ===== timeline item ===== -->
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i>
                              <?php echo $row['start_year']; ?> -
                              <?php echo $row['end_year'] ? $row['end_year'] : 'Now'; ?>
                            </h3>
                            <h4 class="timeline-title">
                              <?php echo $row['position']; ?>,
                              <?php echo $row['company']; ?>
                            </h4>
                            <p class="timeline-text">
                              <?php echo $row['description']; ?>
                            </p>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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