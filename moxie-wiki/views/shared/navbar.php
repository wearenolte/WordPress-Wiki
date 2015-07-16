<nav class="navbar">
<!-- 	<ul class="accordion" data-behavior="accordion">
		<li class="item-accordion">
			<h3 class="js-accordion-trigger">
				Architecture
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li class="item-accordion">
			<h3 class="js-accordion-trigger">
				Coding
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li class="item-accordion">
			<h3 class="js-accordion-trigger">
				Community
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li>
			<h3 class="js-accordion-trigger">
				Ux
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li>
			<h3 class="js-accordion-trigger">
				Blog and News
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li>
			<h3 class="js-accordion-trigger">
				Services
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li>
			<h3 class="js-accordion-trigger">
				Set Up
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li>
			<h3 class="js-accordion-trigger">
				Inspiration
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li>
			<h3 class="js-accordion-trigger">
				Project Tools
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li>
			<h3 class="js-accordion-trigger">
				Elements
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li>
			<h3 class="js-accordion-trigger">
				Other Resources
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<li><a href="">Cms</a></li>
				<li><a href="">eCommerce</a></li>
				<li><a href="">Frameworks</a></li>
				<li><a href="">Grids</a></li>
				<li><a href="">Preprocessors</a></li>
			</ul>
		</li>
		<li data-behavior="modal-open">
			<h3 class="js-open-modal">
				Show All
				<span class="link-icon icon-gallery"></span>
			</h3>
		</li>
	</ul> -->
	<?php
		$args = array(
			'parent' => 0,
			'hide_empty' => 0,
			'taxonomy' => 'tax-cat',
		);
		$categories = get_categories( $args );
	?>


	<ul class="accordion" data-behavior="accordion">
	<?php foreach ( $categories as $category ): ?>
		<li class="item-accordion">
			<h3 class="js-accordion-trigger">
				<?php echo $category->name; ?>
				<span class="link-icon icon-keyboard-arrow-right"></span>
			</h3>
			<ul class="sub">
				<?php
					$childs = array('child_of' => $category->term_id, 'taxonomy' => 'tax-cat', 'hide_empty' => 0,);
					$childs_categories = get_categories( $childs );
				?>
				<?php foreach( $childs_categories as $child ): ?>
					<li>	<a href="<?php echo get_category_link( $child->term_id ); ?>"><?php echo $child->name ?></a></li>
				<?php endforeach; ?>
			</ul>
		</li>
	<?php endforeach; ?>
		<li data-behavior="modal-open">
			<h3 class="js-open-modal">
				Show All
				<span class="link-icon icon-gallery"></span>
			</h3>
		</li>
	</ul>

</nav>
