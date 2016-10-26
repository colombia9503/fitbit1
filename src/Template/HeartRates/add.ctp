<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Heart Rates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hrzones'), ['controller' => 'Hrzones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hrzone'), ['controller' => 'Hrzones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Activities'), ['controller' => 'Activities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="heartRates form large-9 medium-8 columns content">
    <?= $this->Form->create($heartRate) ?>
    <fieldset>
        <legend><?= __('Add Heart Rate') ?></legend>
        <?php
            echo $this->Form->input('profile_id', ['options' => $profiles]);
            echo $this->Form->input('bpm');
            echo $this->Form->input('hrZone_id', ['options' => $hrzones]);
            echo $this->Form->input('activity_id', ['options' => $activities]);
            echo $this->Form->input('totalCals');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
