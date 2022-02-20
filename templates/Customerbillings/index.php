<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customerbilling[]|\Cake\Collection\CollectionInterface $customerbillings
 */
?>
<div class="customerbillings index content">
    <?= $this->Html->link(__('New Customerbilling'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customerbillings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cb_phone') ?></th>
                    <th><?= $this->Paginator->sort('cb_mobile') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customerbillings as $customerbilling): ?>
                <tr>
                    <td><?= $this->Number->format($customerbilling->id) ?></td>
                    <td><?= h($customerbilling->cb_phone) ?></td>
                    <td><?= h($customerbilling->cb_mobile) ?></td>
                    <td><?= $customerbilling->has('customer') ? $this->Html->link($customerbilling->customer->id, ['controller' => 'Customers', 'action' => 'view', $customerbilling->customer->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customerbilling->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customerbilling->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customerbilling->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerbilling->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
