<?php get_header();?>
<div id="main-page">
    <div class="main-content">
        <!--Main slider template in (templates/index/main)-->
        <?php get_template_part('templates/index/main');?>
    </div>
    <video autoplay muted loop id="bgvideo">
      <source src="<?php echo ot_get_option('video_index');?>" type="video/mp4">
    </video>
</div>
<?php get_footer();?>