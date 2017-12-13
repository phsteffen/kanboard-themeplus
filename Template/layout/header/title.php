<?php global $themePlusConfig; ?>
<h1>
   <span class="logo">
       <?= $this->url->link('<p><strong>K</strong>B</p>', 'DashboardController', 'show', array(), false, '', t('Dashboard')) ?>
   </span>
    <span class="title">
        <?php if (! empty($project) && ! empty($task)): ?>
            <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
        <?php else: ?>
            <?= $this->text->e($title) ?>
        <?php endif ?>
    </span>
    
    <?php if (! empty($description)): ?>
        <small class="tooltip" title="<?= $this->text->markdownAttribute($description) ?>">
            <i class="ico-user-tie"></i>
        </small>
    <?php endif ?>
</h1>
<a href="#" id="menu-switch">
    <i class="ico-menu"></i>
</a>