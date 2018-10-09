<div class="uix-field-wrapper">

	<ul class="ui-tab-nav">
		<li><a href="#ui-general" class="active"><?php esc_html_e( 'General', 'tour-operator' ); ?></a></li>
		<?php if ( class_exists( 'LSX_TO_Search' ) ) { ?>
			<li><a href="#ui-search"><?php esc_html_e( 'Search', 'tour-operator' ); ?></a></li>
		<?php } ?>
		<li><a href="#ui-placeholders"><?php esc_html_e( 'Placeholders', 'tour-operator' ); ?></a></li>
		<li><a href="#ui-archives"><?php esc_html_e( 'Archives', 'tour-operator' ); ?></a></li>
		<li><a href="#ui-single"><?php esc_html_e( 'Single', 'tour-operator' ); ?></a></li>
	</ul>

	<div id="ui-general" class="ui-tab active">
		<table class="form-table">
			<tbody>
			<?php do_action( 'lsx_to_framework_vehicle_tab_content', 'vehicle', 'general' ); ?>
			</tbody>
		</table>
	</div>

	<?php if ( class_exists( 'LSX_TO_Search' ) ) { ?>
		<div id="ui-search" class="ui-tab">
			<table class="form-table">
				<tbody>
				<?php do_action( 'lsx_to_framework_vehicle_tab_content', 'vehicle', 'search' ); ?>
				</tbody>
			</table>
		</div>
	<?php } ?>

	<div id="ui-placeholders" class="ui-tab">
		<table class="form-table">
			<tbody>
			<?php do_action( 'lsx_to_framework_vehicle_tab_content', 'vehicle', 'placeholders' ); ?>
			</tbody>
		</table>
	</div>

	<div id="ui-archives" class="ui-tab">
		<table class="form-table">
			<tbody>
			<?php do_action( 'lsx_to_framework_vehicle_tab_content', 'vehicle', 'archives' ); ?>
			</tbody>
		</table>
	</div>

	<div id="ui-single" class="ui-tab">
		<table class="form-table">
			<tbody>
			<?php do_action( 'lsx_to_framework_vehicle_tab_content', 'vehicle', 'single' ); ?>
			</tbody>
		</table>
	</div>
	<?php do_action( 'lsx_to_framework_vehicle_tab_bottom', 'vehicle' ); ?>
</div>
