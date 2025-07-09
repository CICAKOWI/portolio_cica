<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    /* contact */
    .contact-title {
      color: var(--skin-color);
      text-align: center;
      font-size: 25px;
      margin-bottom: 20px;
    }

    .contact-sub-title {
      color: var(--text-black-900);
      text-align: center;
      font-size: 15px;
      margin-bottom: 60px;
    }

    .contact .contact-info-item {
      flex: 0 0 25%;
      max-width: 25%;
      text-align: center;
      margin-bottom: 60px;
    }

    .contact .contact-info-item .icon {
      display: inline-block;
    }

    .contact .contact-info-item .icon .fa {
      font-size: 25px;
      color: var(--skin-color);
    }

    .contact .contact-info-item h4 {
      font-size: 18px;
      font-weight: 700;
      color: var(--text-black-900);
      text-transform: capitalize;
      margin: 15px 0 5px;
    }

    .contact .contact-info-item p {
      font-size: 16px;
      line-height: 25px;
      color: var(--text-black-700);
      font-weight: 400;
    }

    .contact .contact-form {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .contact .contact-form .col-6 {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .contact .contact-form .col-12 {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .contact .contact-form .form-item {
      margin-bottom: 30px;
    }

    .contact .contact-form .form-item .form-control {
      width: 100%;
      height: 50px;
      border-radius: 25px;
      background: var(--bg-black-100);
      border: 1px solid var(--bg-black-50);
      padding: 10px 25px;
      font-size: 16px;
      color: var(--text-black-700);
      transition: all 0.3s ease;
    }

    .contact .contact-form .form-item .form-control:focus {
      box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
    }

    .contact .contact-form .form-item textarea.form-control {
      height: 140px;
    }

    .contact .contact-form .btn {
      height: 50px;
      padding: 0 50px;
    }

    @media (max-width: 1199px) {
      .section .container {
        padding-top: 70px;
      }

      .aside {
        left: -270px;
      }

      .aside.open {
        left: 0;
      }

      .aside .nav-toggler {
        display: flex;
        left: 30px;
      }

      .aside .nav-toggler.open {
        left: 300px;
      }

      .section {
        left: 0;
      }

      .section.open {
        left: 270px;
      }

      .about .about-content .personal-info .info-item p span {
        display: block;
        margin-left: 0;
      }
    }

    @media (max-width: 991px) {

      .contact .contact-info-item,
      .portfolio .portfolio-item,
      .service .service-item {
        flex: 0 0 50%;
        max-width: 50%;
      }

      .home .home-info {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .home .home-img {
        display: none;
      }
    }

    @media (max-width: 767px) {

      .contact .contact-form .col-6,
      .contact .contact-info-item,
      .portfolio .portfolio-item,
      .service .service-item,
      .about .about-content .experience,
      .about .about-content .education,
      .about .about-content .skills,
      .about .about-content .personal-info {
        flex: 0 0 100%;
        max-width: 100%;
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
          <a href="portopolio.php"><i class="fa fa-briefcase"></i>Portfolio</a>
        </li>
        <li>
          <a href="contact.php" class="active"><i class="fa fa-comments"></i>Contact</a>
        </li>
      </ul>
    </div>
    <!-- ===== Aside End ===== -->
    <!-- ===== Main Content Start ===== -->
    <div class="main-content">
      <!-- ===== Contact Section Start ===== -->
      <section class="contact section" id="contact">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Contact Me</h2>
            </div>
          </div>
          <h3 class="contact-title padd-15">Have You Any Questions ?</h3>
          <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES</h4>

          <?php
          $query = "SELECT * FROM contact_info";
          $result = $conn->query($query);
          ?>

          <div class="row">
            <?php while ($row = $result->fetch_assoc()) { ?>
              <!-- ===== Contact info item start ====== -->
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="<?php echo $row['icon']; ?>"></i></div>
                <h4><?php echo $row['title']; ?></h4>
                <p><?php echo $row['value']; ?></p>
              </div>
              <!-- ===== Contact info item end ====== -->
            <?php } ?>
          </div>
          <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
          <h4 class="contact-sub-title padd-15">
            I'M VERY RESPOSIVE TO MESSAGES
          </h4>
          <!-- ====== Contact Form ====== -->

          <?php

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get data from form
            $fullname = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            // Prepare SQL query
            $stmt = $conn->prepare("INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $fullname, $email, $subject, $message);

            if ($stmt->execute()) {
              echo "<script>
              Swal.fire({
                title: 'Success!',
                text: 'Your message has been sent successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
              });
          </script>";
            } else {
              echo "<script>
              Swal.fire({
                title: 'Error!',
                text: 'There was an error sending your message.',
                icon: 'error',
                confirmButtonText: 'OK'
              });
          </script>";
            }

            // Close the prepared statement
            $stmt->close();
          }
          ?>
          <div class="row">
            <div class="contact-form padd-15">
              <form action="contact.php" method="POST">
                <div class="row">
                  <div class="form-item col-6 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Name"
                        required />
                    </div>
                  </div>
                  <div class="form-item col-6 padd-15">
                    <div class="form-group">
                      <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Email"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-item col-12 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        name="subject"
                        class="form-control"
                        placeholder="Subject"
                        required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-item col-12 padd-15">
                    <div class="form-group">
                      <textarea
                        name="message"
                        class="form-control"
                        placeholder="Message"
                        required></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-item col-12 padd-15">
                    <button type="submit" class="btn">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Contact Section End ===== -->
    </div>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('form').on('submit', function(e) {
      e.preventDefault(); // Mencegah reload halaman

      // Ambil data dari form
      var formData = $(this).serialize();

      $.ajax({
        type: 'POST',
        url: 'contact.php', // URL PHP yang memproses form
        data: formData,
        success: function(response) {
          Swal.fire({
            title: 'Success!',
            text: 'Your message has been sent successfully.',
            icon: 'success',
            confirmButtonText: 'OK'
          });
          $('form')[0].reset(); // Bersihkan form setelah submit
        },
        error: function() {
          Swal.fire({
            title: 'Error!',
            text: 'There was an error sending your message.',
            icon: 'error',
            confirmButtonText: 'OK'
          });
        }
      });
    });
  });
</script>


</html>