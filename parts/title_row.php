<?php if ( get_row_layout() == 'title_row' ) : ?>
	<div class="title-row" style="text-align: <?php the_sub_field( 'title_alignment' ); ?>">
		<?php the_sub_field( 'title_text' ); ?>
	</div>
<?php endif; ?>