<?php if ( get_row_layout() == 'two_column_content' ) : ?>
    <div class="2-col-row" style="align-items: <?php the_sub_field( 'vertical_align' ); ?>">
        <div><?php the_sub_field( 'column_one' ); ?></div>
        <div><?php the_sub_field( 'column_two' ); ?></div>
    </div>
<?php endif; ?>
