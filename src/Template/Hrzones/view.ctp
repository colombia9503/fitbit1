<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hrzone'), ['action' => 'edit', $hrzone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hrzone'), ['action' => 'delete', $hrzone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hrzone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hrzones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hrzone'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hrzones view large-9 medium-8 columns content">
    <h3><?= h($hrzone->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($hrzone->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HrMax') ?></th>
            <td><?= h($hrzone->hrMax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hrzone->id) ?></td>
        </tr>
    </table>
</div>
