<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Heart Rate'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hrzones'), ['controller' => 'Hrzones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hrzone'), ['controller' => 'Hrzones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Activities'), ['controller' => 'Activities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="heartRates index large-9 medium-8 columns content">
    <h3><?= __('Heart Rates') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bpm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hrZone_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activity_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('totalCals') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($heartRates as $heartRate): ?>
            <tr>
                <td><?= $this->Number->format($heartRate->id) ?></td>
                <td><?= $heartRate->has('profile') ? $this->Html->link($heartRate->profile->name, ['controller' => 'Profiles', 'action' => 'view', $heartRate->profile->id]) : '' ?></td>
                <td><?= $this->Number->format($heartRate->bpm) ?></td>
                <td><?= $heartRate->has('hrzone') ? $this->Html->link($heartRate->hrzone->name, ['controller' => 'Hrzones', 'action' => 'view', $heartRate->hrzone->id]) : '' ?></td>
                <td><?= $heartRate->has('activity') ? $this->Html->link($heartRate->activity->name, ['controller' => 'Activities', 'action' => 'view', $heartRate->activity->id]) : '' ?></td>
                <td><?= $this->Number->format($heartRate->totalCals) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $heartRate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $heartRate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $heartRate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $heartRate->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
