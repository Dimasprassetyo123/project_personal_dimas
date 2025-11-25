<?php
include 'partials/header.php';
?>

<body class="index-page">

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

    <?php
        include 'partials/sidebar.php';
    ?>

  </header>

  <main class="main">

    <!-- home Section -->
    <?php
        include 'sections/home.php';
    ?>

    <!-- About Section -->
    <?php
        include 'sections/aboute.php';
    ?>
    

    <!-- Skills Section -->
    <?php
        include 'sections/skill.php';
    ?>

    <!-- Resume Section -->
    <?php
        include 'sections/resume.php';
    ?>

    <!-- Portfolio Section -->
    <?php
        include 'sections/project.php';
    ?>

    <!-- Services Section -->
    <?php
        include 'sections/service.php';
    ?>

    <!-- Testimonials Section -->
    <?php
        include 'sections/blog.php';
    ?>

    <!-- Contact Section -->
    <?php
        include 'sections/contact.php';
    ?>

  </main>

    <?php
        include 'partials/footer.php';
    ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

    <?php
        include 'partials/script.php';
    ?>

</body>

</html>