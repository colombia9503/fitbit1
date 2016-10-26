<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hrzone'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hrzones index large-9 medium-8 columns content">
    <h3><?= __('Hrzones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hrMax') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hrzones as $hrzone): ?>
            <tr>
                <td><?= $this->Number->format($hrzone->id) ?></td>
                <td><?= h($hrzone->name) ?></td>
                <td><?= h($hrzone->hrMax) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hrzone->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hrzone->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hrzone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hrzone->id)]) ?>
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
