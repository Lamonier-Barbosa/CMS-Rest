<?php
//Template Name: Contato
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="container contato">
		<h2 class="subtitulo"><?php the_title(); ?></h2>

		<div class="grid-16">
			<a href="<?php the_field('link_mapa'); ?>" target="_blank">
				<img src="<?php the_field('imagem_mapa'); ?>"
				alt="Localização do Rest no Mapa"></a>
		</div>

		<?php if ( have_rows('conteudo_contato') ) : while ( have_rows('conteudo_contato') ) : the_row(); ?>
		<div class="grid-1-3 contato-item">
			<h2><?php the_sub_field('titulo_dados'); ?></h2>
			<?php the_sub_field('informacao_dados'); ?>
		</div>
		<?php endwhile; else: endif; ?>
		<div class="grid-1-3 contato-item">
				<h2>Dados</h2>
				<p>21 2422-9999</p>
				<p>contato@rest.com</p>
				<p>facebook.com/rest/</p>
			</div>
			<div class="grid-1-3 contato-item">
				<h2>Endereço</h2>
				<p>Rua Marechal, 29</p>
				<p>Copacabana - Rio de Janeiro</p>
				<p>Brasil - Terra - Via Láctea</p>
			</div> 
			<div class="grid-1-3 contato-item">
				<h2>Endereço</h2>
				<p>Rua Marechal, 29</p>
				<p>Copacabana - Rio de Janeiro</p>
				<p>Brasil - Terra - Via Láctea</p>
			</div> 
	</section>
	<?php endwhile; else: endif; ?>
	
	<?php get_footer(); ?>
		
		