<footer>
			<nav class="nav-footer">
			<?php $args = array(
				'menu' => 'principal',
				'container' => false);
			wp_nav_menu( $args );?>
			</nav>

			<p>Rest © <?php echo date("Y"); ?>. Alguns direitos reservados.</p>
		</footer>

        <!-- Footer WordPress -->
        <?php wp_footer(); ?>
        <!-- Fecha Footer WordPress -->
	</body>
</html>