<div id="create-admin-account-form" class="panel panel-default animated fadeIn">

    <div class="install-header install-header-small" style="background-image: url('<?php echo $this->module->assetsUrl; ?>/humhub-install-header.jpg');">
        <h2 class="install-header-title"><?php echo Yii::t('InstallerModule.base', '<strong>管理账户</strong> 配置'); ?></h2>
    </div>

    <div class="panel-body">
        <p><?php echo Yii::t('InstallerModule.base', "你几乎完成了。但你必须完成最后一步，填写表格来创建一个管理员帐户。这个帐户用来管理整个网络。"); ?></p>
        <hr/>
        <?php echo $form; ?>

    </div>
</div>

<script type="text/javascript">

    $(function () {
        // set cursor to email field
        $('#User_username').focus();
    })

    // Shake panel after wrong validation
    <?php foreach($form->models as $model) : ?>
    <?php if ($model->hasErrors()) : ?>
    $('#create-admin-account-form').removeClass('fadeIn');
    $('#create-admin-account-form').addClass('shake');
    <?php endif; ?>
    <?php endforeach; ?>

</script>

