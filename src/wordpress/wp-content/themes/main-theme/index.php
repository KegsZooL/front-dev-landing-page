<?php

get_header(); ?>
<?php get_template_part('navbar')?>
<div class="course-sections">
    <?php get_template_part('course-sections/preview-of-course-structure')?>
    <?php get_template_part('course-sections/description-of-program-structure')?>
    <?php get_template_part('course-sections/target-audience')?>
    <?php get_template_part('course-sections/teachers-mentors')?>
    <?php get_template_part('course-sections/program')?>
    <?php get_template_part('course-sections/tariffs')?>
</div>

<?php get_footer(); ?>