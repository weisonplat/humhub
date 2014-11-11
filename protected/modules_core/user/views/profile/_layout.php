<div class="container">

    <div class="row">

        <div class="col-md-9">
            <?php $this->widget('application.modules_core.user.widgets.ProfileHeaderWidget');?>
            <div class="row">
                <div class="profile-nav-container col-md-3">
                    <?php $this->widget('application.modules_core.user.widgets.ProfileMenuWidget', array()); ?>
                </div>
                <div class="col-md-9">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>

        <div class="profile-sidebar-container col-md-3">
            <?php
            $this->widget('application.modules_core.user.widgets.ProfileSidebarWidget', array(
                'widgets' => array(
                    //   array('application.modules_core.user.widgets.ProfileActivityWidget', array()),
                    array('application.modules_core.user.widgets.UserTagsWidget', array(), array('sortOrder' => 10)),
                    array('application.modules_core.user.widgets.UserSpacesWidget', array()),
                    array('application.modules_core.user.widgets.UserFollowerWidget', array()),
                )
            ));
            ?>

        </div>

    </div>


</div>
