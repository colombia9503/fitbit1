<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Heart Rates'), ['controller' => 'HeartRates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Heart Rate'), ['controller' => 'HeartRates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profiles form large-9 medium-8 columns content">
    <?= $this->Form->create($profile) ?>
    <fieldset>
        <legend><?= __('Add Profile') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('bithday', ['empty' => true]);
            echo $this->Form->input('altura');
            echo $this->Form->input('weight');
            echo $this->Form->input('gender');
            echo $this->Form->input('bpmLowerLimit');
            echo $this->Form->input('bpmUpperLimit');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
