<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Thefts */

$this->title = $model->city;
$this->params['breadcrumbs'][] = ['label' => 'Викрадення', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="thefts-view">

    <h1><?= Html::encode($this->title) ?></h1>
<?php if (Yii::$app->user->can('main_operator')) { ?>
    <p>
        <?= Html::a('Редагувати', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви впевнені, що хочете видалити цей елемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?php } ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'city:ntext',
            'stolen_property:ntext',
            'theft_detection_time',
            'notes:ntext',
            'last_update',
        ],
    ]) ?>

</div>
