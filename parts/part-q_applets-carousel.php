<section class="bg-white section-pad">
    <div class="container-boxed">
        <div class="row">
            <div class="col-12 col-lg-8">
                <figure class="heading mb-5">
                    <figcaption>
                        <h2>
                            <small>Q Applets</small>
                            <br><span class="animated-cursor cursor-dark">To Maximize Productivity</span>
                        </h2>
                    </figcaption>
                    <p>Everything from your GitHub repository status, to project management notifications from Asana or Trello to priority emails from your boss or your Mom. It will tell you if your website goes down or if an answer to your question is posted on Stack Overflow.</p>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="owl-carousel applet-carousel owl-theme">

                    <!-- CPU Usage -->
                    <?php include '../applets/applet-details/details-cpu-usage.php';?>
                    <?php include '../parts/part-q_applets-carousel-card.php';?>

                    <!-- RAM Usage -->
                    <?php include '../applets/applet-details/details-ram-usage.php';?>
                    <?php include '../parts/part-q_applets-carousel-card.php';?>

                    <!-- GPU Usage -->
                    <?php include '../applets/applet-details/details-gpu-usage.php';?>
                    <?php include '../parts/part-q_applets-carousel-card.php';?>

                    <!-- Mini Meters -->
                    <?php include '../applets/applet-details/details-mini-meters.php';?>
                    <?php include '../parts/part-q_applets-carousel-card.php';?>

                </div>

            </div>
        </div>
    </div>
</section>
