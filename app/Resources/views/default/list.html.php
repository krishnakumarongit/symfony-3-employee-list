<?php $view->extend('layout.html.php'); ?>
<?php $view['slots']->start('body'); ?>
<h1>Employe List</h1>

<table>
<tr><td>Id</td><td>Name</td><td>Department</td><td>Since</td></tr>
<?php if( count($data) > 0 ){ 
foreach($data as $row){	
?>
<tr><td><?php echo $row->getId();?></td><td><?php echo $row->getName(); ?></td><td><?php echo $row->getDepartment();?></td><td><?php echo $row->getSince()->format('Y-m-d');?></td></tr>
<?php }} ?>
</table>



<?php $view['slots']->stop(); ?>
