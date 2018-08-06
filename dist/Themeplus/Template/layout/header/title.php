<?php global $themePlusConfig; ?><h1>
    <span class="logo">
        <?php /* <?= $this->url->link('K<span>B</span>', 'DashboardController', 'show', array(), false, '', t('Dashboard')) ?> */ ?>
        <?= $this->url->link('<img src="'.$this->url->dir().'plugins/Themeplus/Img/'.$themePlusConfig['logo'].'" />', 'DashboardController', 'show', array(), false, '', t('Dashboard')) ?>
    </span>
    <span class="title">
        <?php if (! empty($project) && ! empty($task)): ?>
            <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
        <?php else: ?>
            <?= $this->text->e($title) ?>
        <?php endif ?>
    </span>
    <?php if (! empty($description)): ?>
        <small class="tooltip" title="<?= $this->text->markdown($description) ?>">
            <i class="fa fa-info-circle"></i>
        </small>
    <?php endif ?>
</h1>
