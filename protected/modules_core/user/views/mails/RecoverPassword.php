<?php $this->beginContent('application.views.mail.template'); ?>

<tr>
    <td align="center" valign="top"   class="fix-box">

        <!-- start  container width 600px -->
        <table width="600"  align="center" border="0" cellspacing="0" cellpadding="0" class="container"  style="background-color: #ffffff; ">


            <tr>
                <td valign="top">

                    <!-- start container width 560px -->
                    <table width="540"  align="center" border="0" cellspacing="0" cellpadding="0" class="full-width" bgcolor="#ffffff" style="background-color:#ffffff;">


                        <!-- start text content -->
                        <tr>
                            <td valign="top">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" >
                                    <tr>
                                        <td valign="top" width="auto" align="center">
                                            <!-- start button -->
                                            <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="auto"  align="center" valign="middle" height="28" style=" background-color:#ffffff; background-clip: padding-box; font-size:26px; font-family:Open Sans, Arial,Tahoma, Helvetica, sans-serif; text-align:center;  color:#a3a2a2; font-weight: 300; padding-left:18px; padding-right:18px; ">

                             <span style="color: #555555; font-weight: 300;">
                               <?php echo Yii::t('UserModule.views_mails_RecoverPassword', '<strong>找回</strong> 密码'); ?>
                             </span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- end button -->
                                        </td>
                                    </tr>



                                </table>
                            </td>
                        </tr>
                        <!-- end text content -->


                    </table>
                    <!-- end  container width 560px -->
                </td>
            </tr>
        </table>
        <!-- end  container width 600px -->
    </td>
</tr>


<tr>
    <td align="center" valign="top"   class="fix-box">

        <!-- start  container width 600px -->
        <table width="600"  align="center" border="0" cellspacing="0" cellpadding="0" class="container"  style="background-color: #ffffff; border-bottom-left-radius: 4px; border-bottom-right-radius: 4px;">


            <tr>
                <td valign="top">

                    <!-- start container width 560px -->
                    <table width="540"  align="center" border="0" cellspacing="0" cellpadding="0" class="full-width" bgcolor="#ffffff" style="background-color:#ffffff;">


                        <!-- start text content -->
                        <tr>
                            <td valign="top">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" >


                                    <!-- start text content -->
                                    <tr>
                                        <td valign="top">
                                            <table border="0" cellspacing="0" cellpadding="0" align="left" >


                                                <!--start space height -->
                                                <tr>
                                                    <td height="30" ></td>
                                                </tr>
                                                <!--end space height -->

                                                <tr>
                                                    <td  style="font-size: 14px; line-height: 22px; font-family:Open Sans,Arial,Tahoma, Helvetica, sans-serif; color:#777777; font-weight:300; text-align:left; ">

                                                        <?php echo Yii::t('UserModule.views_mails_RecoverPassword', '你好 {displayName}, ', array('{displayName}' => $user->displayName)); ?>
                                                        <br><br>
                                                        <?php echo Yii::t('UserModule.views_mails_RecoverPassword', '你请求到了一个新密码。'); ?>
                                                        <br>
                                                        <?php echo Yii::t('UserModule.views_mails_RecoverPassword', '你的用户名是: <strong>{username}</strong>', array('{username}' => $user->username)); ?>
                                                        <br>
                                                        <?php echo Yii::t('UserModule.views_mails_RecoverPassword', '你的新密码是: <strong>{password}</strong>', array('{password}' => $newPassword)); ?>
                                                        <br>

                                                    </td>
                                                </tr>

                                                <!--start space height -->
                                                <tr>
                                                    <td height="30" ></td>
                                                </tr>
                                                <!--end space height -->



                                            </table>
                                        </td>
                                    </tr>
                                    <!-- end text content -->

                                    <tr>
                                        <td valign="top" width="auto" align="center">
                                            <!-- start button -->
                                            <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td width="auto"  align="center" valign="middle" height="32" style=" background-color:#7191a8;  border-radius:5px; background-clip: padding-box;font-size:14px; font-family:Open Sans, Arial,Tahoma, Helvetica, sans-serif; text-align:center;  color:#ffffff; font-weight: 600; padding-left:30px; padding-right:30px; padding-top: 5px; padding-bottom: 5px;">

                             <span style="color: #ffffff; font-weight: 300;">
                               <a href="<?php echo Yii::app()->createAbsoluteUrl("//user/auth/login"); ?>" style="text-decoration: none; color: #ffffff; font-weight: 300;">
                                   <strong><?php echo Yii::t('UserModule.views_mails_RecoverPassword', '登 录'); ?></strong>
                               </a>
                             </span>
                                                    </td>

                                                </tr>
                                            </table>
                                            <!-- end button -->
                                        </td>

                                    </tr>

                                </table>
                            </td>
                        </tr>
                        <!-- end text content -->

                        <!--start space height -->
                        <tr>
                            <td height="20" ></td>
                        </tr>
                        <!--end space height -->


                    </table>
                    <!-- end  container width 560px -->
                </td>
            </tr>
        </table>
        <!-- end  container width 600px -->
    </td>
</tr>

<?php $this->endContent(); ?>
