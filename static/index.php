<?php

$PageTitle=null; // Custom page title

include_once('header.php');

function customPageHeader(){?>
    <!-- Page specific header HTML here -->
<?php } ?>

<main>
    <div id="mapDiv">
        <iframe
                width="100%"
                height="100%"
                scrolling="no"
                frameborder="0"
                style="border:0;"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDopu9r8iJNDT0Sm0VlqRhqSv2mXGNC40E&q=QUT,Brisbane+QLD" allowfullscreen>
        </iframe>
    </div>
</main>

<?php include_once('footer.php'); ?>