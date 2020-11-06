<?php
	include 'components/sidebar.php';
	include 'components/navbar.php';
?>

<center>
	<h1 class="mt-5">MÜŞTERİ ÜNVANI</h1>
	<h4 class="mt-2">Kontrol Paneli</h4>
</center>

<div class="row has-max-width mt-2">
	<form class="is-fullwidth">
		<div class="form-group">
			<label for="siteTitle">Site Başlığı</label>
			<input type="email" class="form-control" id="siteTitle" aria-describedby="titleHelp" placeholder="Ör. DigaPanel V.1.0">
			<small id="titleHelp" class="form-text text-muted">Tarayıcı sekmelerinde görünecek olan kısım.</small>
		</div>
		<div class="form-group">
			<label for="siteTitle">Tagline</label>
			<input type="email" class="form-control" id="siteTitle" aria-describedby="titleHelp" placeholder="Ör. Kullanıcı odaklı ve kullanım kolaylığı merkezli kontrol paneli">
			<small id="titleHelp" class="form-text text-muted">Birkaç kelime ile sitenizin ne yaptığını açıklayın.</small>
		</div>
		<div class="form-group">
			<label for="faviconUpload">Favicon</label>
			<div id="faviconUpload" class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text">Favicon olarak</span>
			  </div>
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" id="inputGroupFile01">
			    <label class="custom-file-label" for="inputGroupFile01">yüklenecek dosyayı seçin</label>
					<small id="inputGroupFile01" class="form-text text-muted">test</small>
			  </div>
			</div>
			<small class="form-text text-muted">Site başlığının solunda bulunan görsel</small>
			<small class="form-text text-muted">! Maksimum 512x512px boyutuna ve transparan arka plana sahip olmalı.</small>
		</div>
		<button type="submit" class="btn btn-outline-success float-right" name="submit">Güncelle</button>
	</form>
</div>
<br><br><br><br>


<?php
    include 'components/footer.php';
?>
