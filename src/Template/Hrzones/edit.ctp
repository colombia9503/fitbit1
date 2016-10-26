<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hrzone->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hrzone->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hrzones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="hrzones form large-9 medium-8 columns content">
    <?= $this->Form->create($hrzone) ?>
    <fieldset>
        <legend><?= __('Edit Hrzone') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('hrMax');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
