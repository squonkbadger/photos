<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="photos form large-9 medium-8 columns content">
    <?= $this->Form->create($photo) ?>
    <fieldset>
        <legend><?= __('Add Photo') ?></legend>
        <?php
        echo $this->Form->input('data', [
                     'type' => 'file',
                     'accept'=>"image/gif, image/png, image/jpeg"
]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
