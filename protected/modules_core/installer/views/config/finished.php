<div class="panel panel-default animated fadeIn">

    <div class="install-header install-header-small"
         style="background-image: url('<?php echo $this->module->assetsUrl; ?>/humhub-install-header.jpg');">
        <h2 class="install-header-title"><?php echo Yii::t('InstallerModule.base', '<strong>安装</strong> 成功'); ?></h2>
    </div>

    <div class="panel-body text-center">
        <p class="lead"><?php echo Yii::t('InstallerModule.base', "<strong>恭喜你</strong>，你已安装成功！"); ?></p>

        <p>安装成功！请尽情享受你的新的社交网络。</p>

        <div class="text-center">
            <br/>
            <?php echo HHtml::link(Yii::t('InstallerModule.base', '登 录'), Yii::app()->createUrl('/site/index'), array('class' => 'btn btn-primary')); ?>
            <br/><br/>
        </div>
    </div>
</div>
