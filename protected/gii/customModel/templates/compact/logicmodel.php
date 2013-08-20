<?php
/**
 * This is the template for generating the model class of a specified table.
 * - $this: the ModelCode object
 * - $tableName: the table name for this class (prefix is already removed if necessary)
 * - $modelClass: the model class name
 * - $columns: list of table columns (name=>CDbColumnSchema)
 * - $labels: list of attribute labels (name=>label)
 * - $rules: list of validation rules
 * - $relations: list of relations (name=>relation declaration)
 */
?>
<?php echo "<?php\n"; 
echo "Yii::import('".$modelPath.".".$modelClass."');\n";
?>

/**
 * This is the model class for table "<?php echo $tableName; ?>".
 * @author Willie Wang <yyq129@gmail.com>
 * @link http://www.yyq129.com
 * @copyright Copyright &copy; 2009-2010 
 * @date time <?php echo date('Y-m-d H:i:s'); ?>
 */
class <?php echo $logicPrefix.$modelClass; ?> extends <?php echo $modelClass."\n"; ?>
{
	/**
	 * The followings are the available columns in table '<?php echo $tableName; ?>':
<?php foreach($columns as $column): ?>
	 * @var <?php echo $column->type.' $'.$column->name."\n"; ?>
<?php endforeach; ?>
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return <?php echo $modelClass; ?> the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}