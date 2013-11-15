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
					<h4 class="showbiz-title txt-left nobottommargin"><a href="#" class="black">Formulir Pendaftaran</a></h4>
					<div class="divide5"></div>
					<p class="txt-left">Umum</p>
				</div>
				<div class="divide10"></div>
				<div class="clear"></div>
			</div>

			<div class="divide30 visible-phone"></div>
			<div class="span9">
				<article>
					<h6>FORMULIR PENDAFTARAN PENERIMAAN SISWA BARU<br/>TAHUN AJARAN 2013/2014</h6>
					<div class="divide10"></div>

					<form method="post" action="<?php echo site_url('/home/save_formulir'); ?>">
					<table border="0" width="95%" align="center" class="blue">
						<tr>
					    	<td>No. Pendaftaran</td>
					        <td width="2%">:</td>
					        <td><input type="text" name="nomor" id="input"/></td>
					    </tr>
					    <tr>
					    	<td colspan="3"><h4>A. Data Pribadi Siswa</h4></td>
					    </tr>
					    <tr>
					    	<td>Nama Calon Siswa</td>
					        <td>:</td>
					        <td><input type="text" name="nama_pendaftar" id="input"/></td>
					    </tr>
					     <tr>
					    	<td>Nama Panggilan</td>
					        <td>:</td>
					        <td><input type="text" name="nama_panggilan" id="input"/></td>
					    </tr>
					    <tr>
					    	<td>Tempat Lahir</td>
					        <td>:</td>
					        <td><input type="text" name="tempat_lahir" id="input"/></td>
					    </tr>
					    <tr>
					    	<td>Tgl Lahir</td>
					        <td>:</td>
					        <td><input type="text" name="tanggal_lahir" id="input"/></td>
					    </tr>
					     <tr>
					    	<td>Jenis Kelamin</td>
					        <td>:</td>
					        <td><select name="jen_kelamin" style="background:#FCF;border:none;height:25px;width:170px;padding:3px;">
					                <option value="L">Laki-laki</option>
					                <option value="P">Perempuan</option>
					            </select></td>
					    </tr>
					    <tr>
					    	<td>Agama</td>
					        <td>:</td>
					        <td><select name="agama" style="background:#FCF;border:none;height:25px;width:170px;padding:3px;">
					                <option value="islam">Islam</option>
					                <option value="prostestan">Protestan</option>
					                <option value="katolik">Katolik</option>
					                <option value="hindu">Hindu</option>
					                <option value="budha">Budha</option>
					                <option value="konghuchu">Konghuchu</option>
					            </select>
					        </td>
					    </tr>
					    <tr>
					    	<td>Golongan Darah</td>
					        <td>:</td>
					        <td><select name="gol_darah" style="background:#FCF;border:none;height:25px;width:170px;padding:3px;">
					                <option value="A">A</option>
					                <option value="B">B</option>
					                <option value="O">O</option>
					                <option value="AB">AB</option>
					            </select>
					        </td>
					    </tr>
					    <tr>
					    	<td>Alamat Lengkap</td>
					        <td>:</td>
					        <td><textarea name="alamat" style="width:150px;" id="input"/></textarea></td>
					    </tr>
					    <tr>
					    	<td>No. Telepon</td>
					        <td>:</td>
					        <td><input type="text" name="no_telepon" id="input"/></td>
					    </tr>
					    <tr>
					    	<td>Pihak yang dihubungi</td>
					        <td>:</td>
					        <td><select name="pihakwali" style="background:#FCF;border:none;height:25px;width:170px;padding:3px;">
					                <option value="ayah">Ayah</option>
					                <option value="ibu">Ibu</option>
					                <option value="wali">Wali Siswa</option>
					            </select>
					        </td>
					    </tr>
					    <tr>
					    	<td>Nama Orangtua</td>
					        <td>:</td>
					        <td><input type="text" name="nama_ortu" id="input"/></td>
					    </tr> 
					     <tr>
					    	<td>Alamat Orangtua</td>
					        <td>:</td>
					        <td><input type="text" name="alamat_ortu" id="input"/></td>
					    </tr>
					     <tr>
					    	<td>Agama</td>
					        <td>:</td>
					        <td><select name="agama_ortu" style="background:#FCF;border:none;height:25px;width:170px;padding:3px;">
					                <option value="islam">Islam</option>
					                <option value="prostestan">Protestan</option>
					                <option value="katolik">Katolik</option>
					                <option value="hindu">Hindu</option>
					                <option value="budha">Budha</option>
					                <option value="konghuchu">Konghuchu</option>
					            </select></td>
					    </tr>
					    <tr>
					    	<td colspan="3"><b>B. Sekolah yang ingin diikuti</b></td>
					    </tr>
					     <tr>
					    	<td>Pilihan ke-1</td>
					        <td>:</td>
					        <td><input type="text" name="pil1" id="input"/></td>
					    </tr>
					     <tr>
					    	<td>Pilihan ke-2</td>
					        <td>:</td>
					        <td><input type="text" name="pil2" id="input"/></td>
					    </tr>
					    <tr>
					    	<td colspan="3"><b>C. Data pendidikan sebelumnya</b></td>
					    </tr>
					    <tr>
					    	<td>Asal Sekolah</td>
					        <td>:</td>
					        <td><input type="text" name="smp" id="input"/></td>
					    </tr>
					    <tr>
					    	<td>Lama Belajar</td>
					        <td>:</td>
					        <td><input type="text" name="lama_belajar" id="input"/></td>
					    </tr>
					    <tr>
					    	<td>Nilai SKHUN</td>
					        <td>:</td>
					        <td><input type="text" name="nilai_skhun" id="input"/></td>
					    </tr>
					    <tr>
					    	<td>&nbsp;</td>
					    </tr>
					    <tr>
					    	<td colspan="3">
					    			<input type="submit" value="Lanjut" class="btn small maincolor" />&nbsp;&nbsp;
					        		<input type="reset" value="Batal" class="btn small maincolor" />
					        </td>
					    </tr>
					</table>
					<hr class="nobottommargin">
					<div class="divide10"></div>
				</article>
			</div>
		</div>
	</section>
</section>