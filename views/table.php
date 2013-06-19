<?php if ( $collapsible_link ) { ?>
<div class="business_hours_collapsible_handler_container">
	<a class="business_hours_collapsible_handler" href="#"><?php _e( $collapsible_link_anchor, "business-hours" );?></a>
</div>
<div class="business_hours_collapsible">
<?php } ?>

		<?php
		foreach ( $days as $id => $day ) {
			$this->_table_row( $id, $day );
		}
		?>

<?php if ( $collapsible_link ) { ?>
</div>
<?php } ?>