<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();
echo "<?php";

?>

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use callmez\ajaxcrud\assets\CrudAsset;

CrudAsset::register($this);

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">
    <div id="ajaxCrudDatatable">

        <?= "<?" ?>=$this->render('_grid', [
            <?= !empty($generator->searchModelClass) ? '\'searchModel\' => $searchModel,' : '' ?>

            'dataProvider' => $dataProvider,
        ]) <?= '?>' ?>


    </div>
</div>
<?="<?php\n" ?>
    Modal::begin(['id' => 'ajaxCrubModal']);
    Modal::end();
<?= '?>' ?>

