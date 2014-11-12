<div class="panel panel-default animated fadeIn">

    <div class="install-header" style="background-image: url('<?php echo $this->module->assetsUrl; ?>/humhub-install-header.jpg');">
        <h2 class="install-header-title">安装向导</h2>
    </div>

    <div class="panel-body  text-center">

        <p class="lead">欢迎来到humhub，你的社交网络平台。</p>

        <p>该向导将安装和配置你自己的humhub社交平台。<br/>点击下一步开始安装。</p>



        <div class="text-center">
            <br/>
            <?php echo HHtml::link(Yii::t('InstallerModule.base', "下一步") . ' <i class="fa fa-arrow-circle-right"></i>', array('go'), array('class' => 'btn btn-lg btn-primary')); ?>
            <br/><br/>
        </div>
    </div>


</div>