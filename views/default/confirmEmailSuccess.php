<?php

use yeesoft\usermanagement\UserManagementModule;

/**
 * @var yii\web\View $this
 * @var yeesoft\usermanagement\models\User $user
 */

$this->title = UserManagementModule::t('front', 'E-mail confirmed');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="change-own-password-success">

    <div class="alert alert-success text-center">
        <?= UserManagementModule::t('front', 'E-mail confirmed') ?> - <b><?= $user->email ?></b>
    </div>

</div>
