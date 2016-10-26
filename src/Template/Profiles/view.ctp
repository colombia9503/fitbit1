<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Heart Rates'), ['controller' => 'HeartRates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Heart Rate'), ['controller' => 'HeartRates', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profiles view large-9 medium-8 columns content">
    <h3><?= h($profile->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($profile->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($profile->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Altura') ?></th>
            <td><?= $this->Number->format($profile->altura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($profile->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BpmLowerLimit') ?></th>
            <td><?= $this->Number->format($profile->bpmLowerLimit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BpmUpperLimit') ?></th>
            <td><?= $this->Number->format($profile->bpmUpperLimit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bithday') ?></th>
            <td><?= h($profile->bithday) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Heart Rates') ?></h4>
        <?php if (!empty($profile->heart_rates)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Profile Id') ?></th>
                <th scope="col"><?= __('Bpm') ?></th>
                <th scope="col"><?= __('HrZone Id') ?></th>
                <th scope="col"><?= __('Activity Id') ?></th>
                <th scope="col"><?= __('TotalCals') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profile->heart_rates as $heartRates): ?>
            <tr>
                <td><?= h($heartRates->id) ?></td>
                <td><?= h($heartRates->profile_id) ?></td>
                <td><?= h($heartRates->bpm) ?></td>
                <td><?= h($heartRates->hrZone_id) ?></td>
                <td><?= h($heartRates->activity_id) ?></td>
                <td><?= h($heartRates->totalCals) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HeartRates', 'action' => 'view', $heartRates->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HeartRates', 'action' => 'edit', $heartRates->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HeartRates', 'action' => 'delete', $heartRates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $heartRates->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
