		<a href="#main-content" alt='Haut de page' class="back-top"></a>
		</main><!-- /#main-content -->
		<footer role="contentinfo">
			<div class="contentfooter">
				<figure class="logo">
					<?php $logo = get_field('logo', 'option'); ?>
					<?php echo wp_get_attachment_image($logo, 'full'); ?>
				</figure>
				<div class="contact">
					<?php 
					$struct = get_field('structure', 'option'); extract($struct);
					 ?>
					<span>Contact</span>
					<p><?php echo $denomination; ?></p>
					<p><?php echo $adresse; ?> - <?php echo $code_postal; ?> <?php echo $commune; ?></p>
					<p><strong>Téléphone : </strong><?php echo $numero_de_telephone; ?></p>
					<p><strong>E-mail : </strong><a aria-label="Email de contact" alt="Email de contact" href="mailto:<?php echo $e_mail; ?>"><?php echo $e_mail; ?></a></p>

				</div>
				<div class="support">
					<?php $support = get_field('support', 'option'); ?>
					<figure class="support">
						<?php echo wp_get_attachment_image($support, 'full'); ?>
					</figure>
					<div class="texte">
						<p>Avec le support de l’UCIH</p>
						<p>Club affilié FFC</p>
					</div>
				</div>
				<figure class="partenaires">
					<?php $fn = get_field('ffcn', 'option'); ?>
					<?php echo wp_get_attachment_image($fn, 'full'); ?>
				</figure>
			</div>
			<div class="bottom-bar">
				<p>&copy; Studio Pixelea - <?php echo date("Y"); ?></p>
			</div>
		</footer>
		<?php wp_footer(); ?>
		</body>

		</html>