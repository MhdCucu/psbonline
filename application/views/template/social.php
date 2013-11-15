<!-- THE SUB HEADER PAT -->
<section class="subheader_wrapper">
	<div class="container">
		<div class="subheader-left one_half nobottommargin">
			<p class="small lh35"><strong>PSB ONLINE SMAN 1 CISARUA</strong></p>
		</div>
		<div class="subheader-right one_half lastcolumn">
			<div class="righttoleftfloat">
				<!-- SOCIALS -->
				<ul class="socials fadegroup">
					<li>						
						<?php if(!$this->session->userdata('user_id')) : ?>
							<a title="login" class="fancybox fancybox.iframe" id="login" href="<?php echo site_url('/user/login');?>">
								<span class="btn extrasmall blue">Login</span>
							</a>
						<?php else :?>
							<a title="login" href="<?php echo site_url('/user/logout');?>">
								<span class="btn extrasmall blue">Logout</span>
							</a>
						<?php endif; ?>						
					</li>
					<li>
						<a title="register" class="fancybox fancybox.iframe" id="register" href="<?php echo site_url('/user/register');?>">
							<span class="btn extrasmall blue">Register</span>
						</a>
					</li>
					<li class="reversefadeitem">
						<a href="http://www.facebook.com/" title="Facebook">
							<div class="soc facebook">
								<div class="bg"></div>
							</div>
						</a>
					</li>
					<li class="reversefadeitem">
						<a href="http://www.twitter.com/" title="Twitter">
							<div class="soc twitter">
								<div class="bg"></div>
							</div>
						</a>
					</li>
					<li class="reversefadeitem">
						<a href="http://www.skype.com/" title="Skype">
							<div class="soc skype">
								<div class="bg"></div>
							</div>
						</a>
					</li>
					<li class="reversefadeitem">
						<a href="http://www.dribbble.com/" title="Dribbble">
							<div class="soc dribbble">
								<div class="bg"></div>
							</div>
						</a>
					</li>
					<li class="reversefadeitem">
						<a href="http://www.flickr.com/" title="Flickr">
							<div class="soc flickr">
								<div class="bg"></div>
							</div>
						</a>
					</li>
				</ul> <!-- END OF SOCIALS -->
			</div>
		</div>
		<div class="clear"></div>
		<div class="divide20 visible-phone"></div>
	</div>
</section><!-- END OF SUBHEADER WRAP -->