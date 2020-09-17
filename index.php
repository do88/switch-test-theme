<?php get_header(); ?>

<div class="homepage-banner mb-l">
	<div class="homepage-banner__content">
		<h1><?php the_field('banner_title'); ?></h1>
		<h3><?php the_field('banner_subtitle'); ?></h3>
		<a href="<?php the_field('banner_button_url'); ?>" class="button button--large">
			<?php the_field('banner_button_text'); ?>
		</a>
	</div>
	<div class="homepage-banner__media">
			<?php $image = get_field('banner_image'); ?>
			<picture class="homepage-slider__media">
				<source media="(min-width:960px)" srcset="<?php echo esc_url($image['sizes'][ 'home-banner-desktop' ]); ?>">
				<source media="(max-width:959px)" srcset="<?php echo esc_url($image['sizes'][ 'home-banner-mobile' ]); ?>">
				<img src="<?php echo esc_url($image['url']); ?>">
			</picture>
	</div>
</div>

<main class="content">
	<div class="content__wrapper">
		<?php if ( have_rows( 'layout' ) ): ?>
			<?php while ( have_rows( 'layout' ) ) : the_row(); ?>
				<?php get_template_part( 'parts/two_column_content' ); ?>
				<?php get_template_part( 'parts/three_column_content' ); ?>
				<?php get_template_part( 'parts/title_row' ); ?>
				<?php get_template_part( 'parts/spacer_block' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
