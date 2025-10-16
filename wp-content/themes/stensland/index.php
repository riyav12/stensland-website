<?php
get_header();
?>

<main id="main-content">
    <?php
    // Example sections — we’ll add them one by one
    get_template_part('template-parts/sections/hero');
    get_template_part('template-parts/sections/about-me');
    get_template_part('template-parts/sections/work');

    get_template_part('template-parts/sections/skills');
    get_template_part('template-parts/sections/qualifications');

    ?>
</main>

<?php
get_footer();
?>
