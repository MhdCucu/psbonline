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
					<h4 class="showbiz-title txt-left nobottommargin"><a href="#" class="black">Pengumuman</a></h4>
					<div class="divide5"></div>
					<p class="txt-left">Umum</p>
				</div>
				<div class="divide10"></div>
				<div class="clear"></div>
			</div>

			<div class="divide30 visible-phone"></div>
			<div class="span9">
				<article>
					<h6>Berikut adalah informasi mengenai pengumuman siswa yang diterima di SMAN 1 Cisarua periode 2013/2014</h6>
					<div class="divide10"></div>

					<table border="0" width="100%" id="pengumuman">
					    <tr class="blue">
					    	<th>No.</th>
					    	<th>No.Pendaftaran</th>
					        <th>Nama</th>
					        <th>Tempat Lahir</th>
					        <th>Tgl. Lahir</th>
					        <th>Jenis Kelamin</th>
					        <th>Agama</th>
					        <th>Asal Sekolah</th>  
					    </tr>
					    <?php $i=1; foreach ($pengumuman as $value) {
					    	$color = ($i % 2 == 0) ? 'whiteblue' : 'cyan';
					    	echo '<tr class="'. $color .'">';
        					echo '<td>'. $i++ .'.</td>';
        					echo '<td>'. $value->kode_pendaftar .'</td>';
        					echo '<td>'. $value->nama_siswa .'</td>';
        					echo '<td>'. $value->tempat_lahir .'</td>';
        					echo '<td>'. $value->tanggal_lahir .'</td>';
        					echo '<td>'. $value->jenis_kelamin .'</td>';
        					echo '<td>'. $value->agama .'</td>';
        					echo '<td>'. $value->smp .'</td>';
    						echo '</tr>';
					    }?>
					</table>
				</article>

				<hr class="nobottommargin">
				<div class="divide10"></div>
			</div>
		</div>
	</section>
</section>