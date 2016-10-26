<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Heart Rate'), ['action' => 'edit', $heartRate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Heart Rate'), ['action' => 'delete', $heartRate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $heartRate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Heart Rates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Heart Rate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hrzones'), ['controller' => 'Hrzones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hrzone'), ['controller' => 'Hrzones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Activities'), ['controller' => 'Activities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="heartRates view large-9 medium-8 columns content">
    <h3><?= h($heartRate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= $heartRate->has('profile') ? $this->Html->link($heartRate->profile->name, ['controller' => 'Profiles', 'action' => 'view', $heartRate->profile->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hrzone') ?></th>
            <td><?= $heartRate->has('hrzone') ? $this->Html->link($heartRate->hrzone->name, ['controller' => 'Hrzones', 'action' => 'view', $heartRate->hrzone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activity') ?></th>
            <td><?= $heartRate->has('activity') ? $this->Html->link($heartRate->activity->name, ['controller' => 'Activities', 'action' => 'view', $heartRate->activity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($heartRate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bpm') ?></th>
            <td><?= $this->Number->format($heartRate->bpm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TotalCals') ?></th>
            <td><?= $this->Number->format($heartRate->totalCals) ?></td>
        </tr>
    </table>
</div>
