<section>
	<section class="container">
		<?php $this->view('template/breadcrumb'); ?>

		<div class="row">
			<div class="span3 theportfolio all-group cat1-group">
				<section class="media-wrapper">
					<div class="mediaholder">
						<a href="#"><img alt="" src="<?php echo site_url('assets/images/content/29.jpg');?>" style="width:100%" ></a>
						<div class="hovercover">
							<a href="#"><div class="linkicon notalone"><i class="icon-link-1 white"></i></div></a>
							<a href="#"><div class="lupeicon notalone"><i class="icon-search-1 white"></i></div></a>
						</div>
					</div>
				</section>

				<div class="detailholder gray-boxed">
					<h4 class="showbiz-title txt-left nobottommargin"><a href="#" class="black">Aturan & Prosedur Image</a></h4>
					<div class="divide5"></div>
					<p class="txt-left">Umum</p>
				</div>
				<div class="clear"></div>
			</div>

			<div class="divide30 visible-phone"></div>
			<div class="span9">
				<article>
					<h2 class="bigintro">Ketentuan Umum</h2>
					<ul class="decimal">
						<?php $i=1; foreach ($umum as $value) {
							echo '<li>'. ucwords($value->aturan) .'</li>';
							$i++;
						}?>
					</ul>
				</article>
				
				<hr class="nobottommargin">
				<div class="divide2"></div>

				<article>
					<h2 class="bigintro">Persyaratan Peserta</h2>
					<ul class="decimal">
						<?php $i=1; foreach ($syarat as $value) {
							echo '<li>'. ucwords($value->aturan) .'</li>';
							$i++;
						}?>
					</ul>
				</article>

				<hr class="nobottommargin">
				<div class="divide2"></div>

				<article>
					<h2 class="bigintro">Persyaratan Peserta</h2>
					<ul class="decimal">
						<?php $i=1; foreach ($syarat as $value) {
							echo '<li>'. ucwords($value->aturan) .'</li>';
							$i++;
						}?>
					</ul>
				</article>

				<hr class="nobottommargin">
				<div class="divide40"></div>
			</div>
		</div>
	</section>
</section>