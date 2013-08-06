
	<?php if ( $is_open_today ) { ?>
	<span class='business_hours_row <?php echo $class;?>'>
		<?php echo date(D, strtotime(ucwords( $day_name )));?>
		<span class='business_hours_table_open'><?php echo date('g:i', strtotime(ucwords( $open )));?><span class="business_hours_meridian"><?php echo date(A, strtotime(ucwords( $open )));?></span></span>-<span class='business_hours_table_close'><?php echo date(g, strtotime(ucwords( $close )));?><span class="business_hours_meridian"><?php echo date(A, strtotime(ucwords( $close )));?></span></span>
	</span>
	<?php } else { ?>
		<?php /* <span class='business_hours_table_closed'><?php echo $closed_text; ?></span> */ ?>
<?php } ?>
