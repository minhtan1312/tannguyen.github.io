<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( !empty($filters) ) {
	?>
	<div class="results-filter-wrapper">
		<h3 class="title"><?php esc_html_e('Your Selected', 'wp-job-board-pro'); ?></h3>
		<div class="inner">
			<ul class="results-filter">
				<?php foreach ($filters as $key => $value) { ?>
					<?php WP_Job_Board_Pro_Candidate_Filter::display_filter_value($key, $value, $filters); ?>
				<?php } ?>
			</ul>
			<a href="<?php echo esc_url(WP_Job_Board_Pro_Mixes::get_candidates_page_url()); ?>"><?php esc_html_e('Clear all', 'wp-job-board-pro'); ?></a>
		</div>
	</div>
<?php }