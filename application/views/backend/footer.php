<?php $version = $this->db->get_where('settings', array('type' => 'version'))->row()->description;?>
<!-- Footer -->
<footer class="main">
	&copy; 2020 <strong>Impulse Hospital</strong>
    <strong class="pull-right"> VERSION <?php echo $version;?></strong>
    Developed by
	<a href="https://impulsehospital.com"
    	target="_blank">Impulse Hospital</a>
</footer>
