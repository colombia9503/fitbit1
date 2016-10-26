<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Heart Rates'), ['controller' => 'HeartRates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Heart Rate'), ['controller' => 'HeartRates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profiles index large-9 medium-8 columns content">
    <h3><?= __('Profiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bithday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('altura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bpmLowerLimit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bpmUpperLimit') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profiles as $profile): ?>
            <tr>
                <td><?= $this->Number->format($profile->id) ?></td>
                <td><?= h($profile->name) ?></td>
                <td><?= h($profile->bithday) ?></td>
                <td><?= $this->Number->format($profile->altura) ?></td>
                <td><?= $this->Number->format($profile->weight) ?></td>
                <td><?= h($profile->gender) ?></td>
                <td><?= $this->Number->format($profile->bpmLowerLimit) ?></td>
                <td><?= $this->Number->format($profile->bpmUpperLimit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?>
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
