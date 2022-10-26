<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script src="<?php echo base_url('assets/js/jquery.cycle2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.cycle2.carousel.js') ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#marquee').on('cycle-initialized', function( event, opts ) {
		$('div.marquee-box').removeClass('hide');
	});
    $('#marquee').cycle({
		fx: 'carousel',
		speed: 20000,
		timeout: '10',
		easing: 'linear',
		pauseOnHover: true,
		slides: '> span',
		throttleSpeed: true
	});
});
</script>

<div class='marquee-box hide'>
<div id="marquee">
	<?php foreach($teks_berjalan AS $data) {?>
	<span><?php echo strip_tags($data['isi']); ?></span>
	<?php } ?>
</div>
</div>