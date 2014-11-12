<div id="database-form" class="panel panel-default animated fadeIn">

    <div class="install-header install-header-small" style="background-image: url('<?php echo $this->module->assetsUrl; ?>/humhub-install-header.jpg');">
        <h2 class="install-header-title"><?php echo Yii::t('InstallerModule.base', '<strong>数据库</strong> 配置'); ?></h2>
    </div>

    <div class="panel-body">
        <p>
            <?php echo Yii::t('InstallerModule.base', '你必须配置以下数据库链接信息。如果你不知道这些，请联系您的系统管理员。'); ?>
        </p>


        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'database-form',
            'enableAjaxValidation' => false,
        ));
        ?>

<?php //echo $form->errorSummary($model);  ?>
        <hr/>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'hostname'); ?>
            <?php echo $form->textField($model, 'hostname', array('class' => 'form-control', 'id' => 'hostname')); ?>
            <p class="help-block"><?php echo Yii::t('InstallerModule.base', 'mysql数据库的主机名 (如果是本地 ,应为localhost)'); ?></p>
<?php echo $form->error($model, 'hostname'); ?>
        </div>
        <hr/>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
            <p class="help-block"><?php echo Yii::t('InstallerModule.base', '你数据库用户名。'); ?></p>
<?php echo $form->error($model, 'username'); ?>
        </div>
        <hr/>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
            <p class="help-block"><?php echo Yii::t('InstallerModule.base', '你数据库的密码。'); ?></p>
<?php echo $form->error($model, 'password'); ?>
        </div>
        <hr/>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'database'); ?>
            <?php echo $form->textField($model, 'database', array('class' => 'form-control')); ?>
            <p class="help-block"><?php echo Yii::t('InstallerModule.base', '你想要用于存放humhub数据的数据库名。'); ?></p>
<?php echo $form->error($model, 'database'); ?>
        </div>

        <?php if ($submitted) { ?>
                <?php if ($success) { ?>
                <div class="alert alert-success">
                <?php echo Yii::t('InstallerModule.base', '好的, 数据库已连接!'); ?>
                </div>
    <?php } else { ?>
                <div class="alert alert-danger">
                    <strong><?php echo Yii::t('InstallerModule.base', '抱歉, 出错了!'); ?></strong><br />
                <?php echo HHtml::encode($errorMessage); ?>
                </div>
            <?php } ?>
<?php } ?>


        <hr>

        <?php echo CHtml::submitButton(Yii::t('InstallerModule.base', '下一步'), array('class' => 'btn btn-primary')); ?>

<?php $this->endWidget(); ?>
    </div>
</div>

<script type="text/javascript">

    $(function() {
        // set cursor to email field
        $('#hostname').focus();
    })

    // Shake panel after wrong validation
<?php if ($form->errorSummary($model) != null) { ?>
        $('#database-form').removeClass('fadeIn');
        $('#database-form').addClass('shake');
<?php } ?>

</script>