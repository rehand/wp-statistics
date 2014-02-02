<div class="wrap">
	<h2 class="nav-tab-wrapper">
		<a href="?page=wp-statistics/optimization" class="nav-tab<?php if($_GET['tab'] == '') { echo " nav-tab-active";} ?>"><?php _e('Resources/Information', 'wp_statistics'); ?></a>
		<a href="?page=wp-statistics/optimization&tab=export" class="nav-tab<?php if($_GET['tab'] == 'export') { echo " nav-tab-active"; } ?>"><?php _e('Export', 'wp_statistics'); ?></a>
		<a href="?page=wp-statistics/optimization&tab=purging" class="nav-tab<?php if($_GET['tab'] == 'purging') { echo " nav-tab-active"; } ?>"><?php _e('Purging', 'wp_statistics'); ?></a>
		<?php if( version_compare(phpversion(), WP_STATISTICS_REQUIRED_GEOIP_PHP_VERSION, '>') ) { ?>
		<a href="?page=wp-statistics/optimization&tab=updates" class="nav-tab<?php if($_GET['tab'] == 'updates') { echo " nav-tab-active"; } ?>"><?php _e('Updates', 'wp_statistics'); ?></a>
		<?php } ?>
	</h2>
	
	<table class="form-table">
		<tbody>
			<?php settings_fields('wps_settings'); ?>
			<tr valign="top">
				<th scope="row" colspan="2"><h3><?php _e('Resources', 'wp_statistics'); ?></h3></th>
			</tr>
			
			<tr valign="top">
				<th scope="row">
					<?php _e('Memory usage in PHP', 'wp_statistics'); ?>:
				</th>
				
				<td>
					<strong><?php echo number_format(memory_get_usage()); ?></strong> <?php _e('Byte', 'wp_statistics'); ?>
					<p class="description"><?php _e('Memory usage in PHP', 'wp_statistics'); ?></p>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row">
					<?php echo sprintf(__('Number of rows in the <code>%sstatistics_useronline</code> table', 'wp_statistics'), $table_prefix); ?>:
				</th>
				
				<td>
					<strong><?php echo $result['useronline']; ?></strong> <?php _e('Row', 'wp_statistics'); ?>
					<p class="description"><?php _e('Number of rows', 'wp_statistics'); ?></p>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row">
					<?php echo sprintf(__('Number of rows in the <code>%sstatistics_visit</code> table', 'wp_statistics'), $table_prefix); ?>:
				</th>
				
				<td>
					<strong><?php echo $result['visit']; ?></strong> <?php _e('Row', 'wp_statistics'); ?>
					<p class="description"><?php _e('Number of rows', 'wp_statistics'); ?></p>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row">
					<?php echo sprintf(__('Number of rows in the <code>%sstatistics_visitor</code> table', 'wp_statistics'), $table_prefix); ?>:
				</th>
				
				<td>
					<strong><?php echo $result['visitor']; ?></strong> <?php _e('Row', 'wp_statistics'); ?>
					<p class="description"><?php _e('Number of rows', 'wp_statistics'); ?></p>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row" colspan="2"><h3><?php _e('Version Info', 'wp_statistics'); ?></h3></th>
			</tr>
			
			<tr valign="top">
				<th scope="row">
					<?php _e('WP Statistics Version', 'wp_statistics'); ?>:
				</th>
				
				<td>
					<strong><?php echo WP_STATISTICS_VERSION; ?></strong>
					<p class="description"><?php _e('The WP Statistics version you are running.', 'wp_statistics'); ?></p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<?php _e('PHP Version', 'wp_statistics'); ?>:
				</th>
				
				<td>
					<strong><?php echo phpversion(); ?></strong>
					<p class="description"><?php _e('The PHP version you are running.', 'wp_statistics'); ?></p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<?php _e('jQuery Version', 'wp_statistics'); ?>:
				</th>
				
				<td>
					<strong><script type="text/javascript">document.write(jQuery().jquery);</script></strong>
					<p class="description"><?php _e('The jQuery version you are running.', 'wp_statistics'); ?></p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row" colspan="2"><h3><?php _e('Client Info', 'wp_statistics'); ?></h3></th>
			</tr>
			
			<tr valign="top">
				<th scope="row">
					<?php _e('Client IP', 'wp_statistics'); ?>:
				</th>
				
				<td>
					<strong><?php $wpstats = new WP_Statistics(); echo $wpstats->get_IP(); ?></strong>
					<p class="description"><?php _e('The client IP address.', 'wp_statistics'); ?></p>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<?php _e('User Agent', 'wp_statistics'); ?>:
				</th>
				
				<td>
					<strong><?php echo $_SERVER['HTTP_USER_AGENT']; ?></strong>
					<p class="description"><?php _e('The client user agent string.', 'wp_statistics'); ?></p>
				</td>
			</tr>
		</tbody>
	</table>
</div>