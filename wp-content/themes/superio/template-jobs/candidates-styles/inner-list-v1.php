<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $post;

$rating_avg = WP_Job_Board_Pro_Review::get_ratings_average($post->ID);

?>

<?php do_action( 'wp_job_board_pro_before_candidate_content', $post->ID ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('map-item'); ?> <?php superio_candidate_item_map_meta($post); ?>>
    <div class="candidate-list v1 candidate-archive-layout">
        <?php WP_Job_Board_Pro_Candidate::display_shortlist_btn($post->ID); ?>
        <div class="candidate-info">
            <div class="flex-middle">
                <?php superio_candidate_display_logo($post); ?>
                <div class="candidate-info-content">
                    <div class="title-wrapper">
                        <?php the_title( sprintf( '<h2 class="candidate-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        <?php superio_candidate_display_featured_icon($post,'text'); ?>
                    </div>
                    <div class="job-metas">
                        <?php superio_candidate_display_categories($post); ?>
                        <?php superio_candidate_display_short_location($post, 'icon'); ?>
                        <?php superio_candidate_display_salary($post, 'icon'); ?>
                    </div>
                    <?php superio_candidate_display_tags($post); ?>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post# -->
<?php do_action( 'wp_job_board_pro_after_candidate_content', $post->ID ); ?>