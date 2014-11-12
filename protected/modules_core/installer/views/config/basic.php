<div id="name-form" class="panel panel-default animated fadeIn">

    <div class="install-header install-header-small" style="background-image: url('<?php echo $this->module->assetsUrl; ?>/humhub-install-header.jpg');">
        <h2 class="install-header-title"><?php echo Yii::t('InstallerModule.base', '社交网络 <strong>名字</strong>'); ?></h2>
    </div>

    <div class="panel-body">

        <p>当然，你的新社交网络平台需要一个名字。请更改默认名称为你喜欢的名字。（例如，你的公司，组织或俱乐部的名字）</p>

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'basic-form',
            'enableAjaxValidation' => false,
        ));
        ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'name'); ?>
            <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'name'); ?>
        </div>

        <hr>

        <?php echo CHtml::submitButton(Yii::t('InstallerModule.base', '下一步'), array('class' => 'btn btn-primary')); ?>

        <?php $this->endWidget(); ?>
    </div>
</div>

<script type="text/javascript">

    $(function () {
        // set cursor to email field
        $('#ConfigBasicForm_name').focus();
    })

    // Shake panel after wrong validation
    <?php if ($form->errorSummary($model) != null) { ?>
    $('#name-form').removeClass('fadeIn');
    $('#name-form').addClass('shake');
    <?php } ?>

</script>


