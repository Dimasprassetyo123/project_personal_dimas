<?php
$qProject = "SELECT * FROM projects";
$result = mysqli_query($connect, $qProject) or die(mysqli_error($connect));
?>
<section id="portfolio" class="portfolio section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Projek</h2>
        <p>Setiap project adalah cerita unik yang kami rangkai dengan dedikasi dan keahlian. Dari konsep hingga eksekusi, kami berkomitmen untuk memberikan hasil yang bermakna.</p>
    </div>

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua</li>
                <?php
                $qCategory = mysqli_query($connect, "SELECT DISTINCT category FROM projects");
                while ($row = mysqli_fetch_object($qCategory)):
                    $categorySlug = strtolower($row->category);
                ?>
                    <li data-filter=".filter-<?= $categorySlug ?>">
                        <?= ucfirst($row->category) ?>
                    </li>
                <?php endwhile; ?>
            </ul>

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                <?php while ($project = $result->fetch_object()):
                    $categoryClass = 'filter-' . strtolower($project->category);
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $categoryClass ?>">
                        <div class="portfolio-wrap">
                            <img src="../storages/project/<?= $project->image ?>"
                                class="img-fluid"
                                alt="<?= ($project->title) ?>"
                                loading="lazy">
                            <div class="portfolio-info">
                                <div class="content">
                                    <span class="category"><?php echo ucfirst($project->category); ?></span>
                                    <h4><?php echo $project->title; ?></h4>
                                    <p><?php echo $project->description; ?></p>
                                    <div class="portfolio-links">
                                        <a href="../storages/project/<?php echo $project->image; ?>"
                                            data-title="<?php echo $project->title; ?>"
                                            data-description="<?php echo $project->description; ?>"
                                            data-gallery="portfolio-gallery"
                                            class="glightbox preview-link">
                                            <i class="bi bi-zoom-in"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>