<?php global $themePlusConfig; ?>

<div class="dropdown user-dropdown">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon">
        <?= $this->avatar->currentUserSmall('avatar-inline') ?>
        
        <span class="username">
        
        <?= $this->text->e($this->user->getFullname()) ?>
        
        </span>

        <ul>
            <li class="no-hover">
                <p><?= $this->text->e($this->user->getFullname()) ?></p>
            </li>
            <li>
                <?= $this->url->icon('', t('My dashboard'), 'DashboardController', 'show', array('user_id' => $this->user->getId())) ?>
            </li>
            <li>
                <?= $this->url->icon('', t('My profile'), 'UserViewController', 'show', array('user_id' => $this->user->getId())) ?>
            </li>
            <li>
                <?= $this->url->icon('', t('Projects management'), 'ProjectListController', 'show') ?>
            </li>
            <?php if ($this->user->hasAccess('UserListController', 'show')): ?>
                <li>
                    <?= $this->url->icon('', t('Users management'), 'UserListController', 'show') ?>
                </li>
                <li>
                    <?= $this->url->icon('', t('Groups management'), 'GroupListController', 'index') ?>
                </li>
                <li>
                    <?= $this->url->icon('', t('Plugins'), 'PluginController', 'show') ?>
                </li>
                <li>
                    <?= $this->url->icon('', t('Settings'), 'ConfigController', 'index') ?>
                </li>
            <?php endif ?>

            <?= $this->hook->render('template:header:dropdown') ?>

            <li>
                <?= $this->url->icon('', t('Documentation'), 'DocumentationController', 'show') ?>
            </li>
            <?php if (! DISABLE_LOGOUT): ?>
                <li>
                    <?= $this->url->icon('', t('Logout'), 'AuthController', 'logout') ?>
                </li>
            <?php endif ?>
        </ul>
</div>
