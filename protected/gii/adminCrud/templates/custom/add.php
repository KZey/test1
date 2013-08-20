<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	Yii::t('models/table','Add'),
);\n";
?>

$this->menu=array(
	array('label'=>'<?php echo $this->modelClass; ?> '.Yii::t('models/table','List'), 'url'=>array('index')),
	array('label'=>Yii::t('models/talbe','Manage').' <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<?php echo "<?php";?> if(Yii::app()->user->hasFlash('Message')): ?>
<script type="text/javascript" language="javascript">   
	Z.Alert('<?php echo "<?php";?> echo Yii::app()->user->getFlash('Message'); ?>');
</script>
<?php echo "<?php";?> endif; ?>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
