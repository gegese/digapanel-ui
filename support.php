<?php
	include 'components/sidebar.php';
	include 'components/navbar.php';
?>

<center>
	<h1 class="mt-5">MÜŞTERİ ÜNVANI</h1>
	<h4 class="mt-2">Destek Talebi</h4>
</center>

<div class="row has-max-width mt-2">
	<form class="is-fullwidth">
		<div class="form-group">
			<label for="supportTitle">Talep Başlığı</label>
			<input type="text" class="form-control" id="supportTitle" aria-describedby="supportHelp" placeholder="Ör. Metin güncelleme hk.">
			<small id="supportHelp" class="form-text text-muted">İnternet sitenizinde ya da panelinizde yaşadığınız problemi kısaca açıklayınız.</small>
		</div>
		<div class="form-group">
			<label for="supportPriority">Öncelik Seviyesi</label>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="prioritySelect">Bu talep</label>
			  </div>
			  <select class="custom-select" id="prioritySelect">
			    <option selected>için öncelik</option>
			    <option value="1">bekleyebilir !</option>
			    <option value="2">normal !!</option>
			    <option value="3">acil !!!</option>
			  </select>
			</div>
			<small id="priorityHelp" class="form-text text-muted">Bütün destek taleplerinin yüksek önceliğe sahip olduğunun farkındayız. Fakat burada objektif olmanız taleplerin karşılanması noktasında ki verimlilik acısından önem arz etmektedir.</small>
		</div>
		<div class="form-group">
	    <label for="explainText">Talep Açıklaması</label>
	    <textarea class="form-control" id="explainText" rows="3" aria-describedby="explainHelp"></textarea>
			<small id="explainHelp" class="form-text text-muted">Destek talebinizi birkaç cümle ile açıklayınız.</small>
	  </div>
		<button type="submit" class="btn btn-outline-success float-right" name="submit">Destek talebini ilet</button>
	</form>
</div>
<br><br><br><br>


<?php
    include 'components/footer.php';
?>
