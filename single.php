<!-- Single Post Page -->
<?php get_header(); ?>
<?php if(in_category('riders')) {
  get_template_part('template-parts/content', 'rider-profile');
} else {
  get_template_part('template-parts/content', 'article');
}?>

<?php get_footer(); ?>
