<?php get_header() ?>

<section class="home-hero">
	<div class="home-hero__container container">
		<div class="home-hero__content">
			<h2 class="home-hero__title">Delivering stylish living and working spaces in the UK</h2>
		</div>
		<div class="home-hero__arrow">
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-down.svg" />
		</div>
	</div>
	<div class="home-hero__bg"></div>
</section>

<section class="home-intro">
	<div class="home-intro__container container">
		<div class="home-intro__column home-intro__text">
			<h2 class="home-intro__title">We are a Nottingham family run property investment business</h2>
			<p class="home-intro__paragraph">Our background is within Construction and Retail store design. Delivering stylish living and working spaces is what we do best. We are driven by great design and attention to detail.  Please see our property portfolio for examples of our work.</p>
		</div>
		<div class="home-intro__column home-intro__image">
			<div class="home-intro__image-inner">
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/home-intro_img1.jpg" />
			</div>
		</div>
	</div>
</section>

<section class="home-work">
	<div class="home-work__container container">
		<div class="home-work__title-wrap">
			<h4 class="home-work__sub-title title--sub">About Us</h4>
			<h2 class="home-work__title title--standard">Work with us</h2>
			<p class="home-work__paragraph">With bank interest rates at around an average of 1% it makes sense to make your money work for you. By choosing to invest into a property project with us we can guarantee you much more of a desirable return on your investment, and most importantly a working relationship you can trust. Why not come and follow us across our social media platforms to see what projects we are working on daily. </p>
		</div>
		<div class="home-work__images">
			<div class="home-work__image home-work__image--one"><img src="<?php echo get_template_directory_uri() ?>/assets/img/home/home-work_img1.jpg" /></div>
			<div class="home-work__image home-work__image--two"><img src="<?php echo get_template_directory_uri() ?>/assets/img/home/home-work_img2.jpg" /></div>
		</div>
	</div>
</section>

<section class="home-design">
	<div class="home-design__container">
		<div class="home-design__column home-design__image">
			<img class="home-design__img" src="<?php echo get_template_directory_uri() ?>/assets/img/home/home-design_img.jpg" />
		</div>
		<div class="home-design__column home-design__text">
			<div class="home-design__text-inner">
				<h4 class="home-design__sub-title title--sub">Coming Soon</h4>
				<h2 class="home-design__title title--standard">Interior Design Services</h2>
				<p class="home-design__paragraph">Being Property Investors and Landlords ourselves, we know what it takes to make an investment property hit its true potential.
				<br><br>
				At BEE Space we are driven by creating stylish and well-considered living spaces. Whether you are considering kitting out your latest HMO, wanting to create service-accommodation with a beautiful feel or staging a flip for sale, we offer two interior design services to Property Investors and Landlords to ensure your property will:</p>
				<ul class="home-design__list">
					<li class="home-design__list-item"><img class="home-design__list-img" src="<?php echo get_template_directory_uri() ?>/assets/img/home/design_one.png" />Stand out from the crowd, be aspirational & lifestyle driven</li>
					<li class="home-design__list-item"><img class="home-design__list-img" src="<?php echo get_template_directory_uri() ?>/assets/img/home/design_two.png" />Have a design that will stand the test of time</li>
					<li class="home-design__list-item"><img class="home-design__list-img" src="<?php echo get_template_directory_uri() ?>/assets/img/home/design_three.png" />Attract the best tenant/guest/vendor profile</li>
					<li class="home-design__list-item"><img class="home-design__list-img" src="<?php echo get_template_directory_uri() ?>/assets/img/home/design_four.png" />Achieve higher rents and asking prices</li>
					<li class="home-design__list-item"><img class="home-design__list-img" src="<?php echo get_template_directory_uri() ?>/assets/img/home/design_five.png" />Support remote investors to achieve the best possible product ready for the open market.</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="home-design-sub">
	<div class="home-design-sub__container container">
		<div class="home-design-sub__wrap">
			<div class="home-design-sub__column">
				<h2 class="home-design-sub__title title--standard">Full Design <br>Service</h2>
				<p class="home-design-sub__paragraph">We offer a full concept creation service. We will create a totally unique look and feel for your property and will project manage the concept alongside your trades team, through to installation and professional photographs.  
				<br><br>
				We will source and purchase all items and install them. We will ensure that your property is completely ready for the open market and will be of the very best design and quality, guaranteed to attract the very best tenant profile. </p>
			</div>
			<div class="home-design-sub__column">
				<h2 class="home-design-sub__title title--standard">Styling and <br>Staging Service</h2>
				<p class="home-design-sub__paragraph">If you are planning to rent your property out but want it to have the best online presence, we offer a full styling and staging service. We will come to your property and install furniture, soft furnishings, art works and accessories to make sure your property looks incredible ready for professional photographs to be taken.

				<a href="btn">Drop me a message</a></p>
			</div>
		</div>
	</div>
</section>

<?php
$args = array(
  'post_type'   => 'projects',
  'post_status' => 'publish'
 );
 
$testimonials = new WP_Query( $args );
if( $testimonials->have_posts() ) :
?>
  <section class="home-portfolio">
	<div class="home-portfolio__container container">
		<div class="home-portfolio__title-wrap">
			<h4 class="home-portfolio__sub-title title--sub">Our properties</h4>
			<h2 class="home-portfolio__title title--standard">Portfolio</h2>
		</div>
		<div class="home-portfolio__list">
		    <?php
		      while( $testimonials->have_posts() ) :
		        $testimonials->the_post();
		        ?>
			        <a href="<?php the_permalink() ?>" class="home-portfolio__project">
						<div class="home-portfolio__image-wrap">
							<img class="home-portfolio__arrow" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/arrow-right.svg" />
							<img class="home-portfolio__img" src="<?php echo get_template_directory_uri() ?>/assets/img/portfolio/project_one.jpg" />
						</div>
						<div class="home-portfolio__project-title-wrap">
							<h2 class="home-portfolio__project-title"><?php the_title() ?></h2>
						</div>
					</a>
		        <?php
		      endwhile;
		      wp_reset_postdata();
		    ?>
  		</div>
	</div>
</section>
<?php endif ?>

<section class="home-information">
	<div class="home-information__container container">
		<div class="home-information__row">
			<div class="home-information__column">
				<div class="home-information__column-icon">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/icon_purchase.svg" />
				</div>
				<div class="home-information__column-text">
					<h2 class="home-information__title title--standard">Properties<br>We Purchase</h2>
					<p class="home-information__paragraph">We are always searching for new properties to purchase. We will consider buying a property regardless of the condition it is in. If you think you have a property we may be interesting in purchasing please get in touch to discuss how you may be able to use our discreet service. </p>
				</div>
			</div>
			<div class="home-information__column">
				<div class="home-information__column-icon">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/home/icon_lease.svg" />
				</div>
				<div class="home-information__column-text">
					<h2 class="home-information__title title--standard">Properties<br>We Lease</h2>
					<p class="home-information__paragraph">We are also very happy to work with existing landlords or homeowners that may want to long lease their property to us over a fixed period of 3-5 years. With this service we will guarantee you rent through out the agreement period. </p>
				</div>
			</div>
		</div> 
	</div>
</section>

<?php get_footer() ?>