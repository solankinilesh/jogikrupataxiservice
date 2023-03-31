<?php echo $this->extend('templates/layout'); ?>

<?php echo $this->section('content'); ?>
<!-- Start services Area -->
<?php
echo view('_services');
?>
<!-- End services Area -->
<?php echo $this->endSection(); ?>