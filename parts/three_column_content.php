<?php if ( get_row_layout() == 'three_column_content' ) : ?>
    <div class="3-col-row" style="align-items: <?php the_sub_field( 'vertical_align' ); ?>">
        <div><?php the_sub_field( 'column_one' ); ?></div>
        <div><?php the_sub_field( 'column_two' ); ?></div>
        <div><?php the_sub_field( 'column_three' ); ?></div>
    </div>
<?php endif; ?>
