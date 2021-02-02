<?php //require_once resource_path() . '/views/components/header.php' ?>

<?php


require_once resource_path() . '/views/components/page.php';

$page = new layoutPage();


//<!--HEADER-->
echo $page->header();

//<!--headerSession()-->
echo $page->headerSession();

//<!--homeSlider()-->
echo $page->homeSlider();

//<!--lastAlbumSession()-->
echo $page->lastAlbumSession();

//<!--biographySession()-->
echo $page->biographySession();

//<!--discographySession()-->
echo $page->videographySession();

//<!--discographySession()-->
echo $page->discographySession();

//<!--members()-->
echo $page->members();

//<!--upcomingTour()-->
echo $page->upcomingTour();

//<!--gallery()-->
echo $page->gallery();

//<!--latestBlog()-->
echo $page->latestBlog();

//<!--contact()-->
echo $page->contact();

//<!--contactAddress()-->
echo $page->contactAddress();

//<!--FOOTER-->
echo $page->footer();

//Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
?>

<?php //require_once resource_path() . '/views/components/footer.php' ?>
