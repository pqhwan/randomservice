
<!--
	Master Layer will always be the view called
	if we request a different page, params will be different
-->
<?php
	$this->load->view('master_header');
?>

<?php
	if (isset($page)) {
			$this->load->view('signup/signup_form');
	} 
?>
	



<?php
	$this->load->view('master_footer');
?>
