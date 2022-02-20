<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ordercomment[]|\Cake\Collection\CollectionInterface $ordercomments
 */
?>
<div class="ordercomments index content">
    <?= $this->Html->link(__('New Ordercomment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ordercomments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('purchaseOrder_id') ?></th>
                    <th><?= $this->Paginator->sort('salesOrder_id') ?></th>
                    <th><?= $this->Paginator->sort('pc_userid') ?></th>
                    <th><?= $this->Paginator->sort('pc_parentId') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ordercomments as $ordercomment): ?>
                <tr>
                    <td><?= $this->Number->format($ordercomment->id) ?></td>
                    <td><?= $ordercomment->has('purchaseorder') ? $this->Html->link($ordercomment->purchaseorder->id, ['controller' => 'Purchaseorder', 'action' => 'view', $ordercomment->purchaseorder->id]) : '' ?></td>
                    <td><?= $ordercomment->has('salesorder') ? $this->Html->link($ordercomment->salesorder->id, ['controller' => 'Salesorder', 'action' => 'view', $ordercomment->salesorder->id]) : '' ?></td>
                    <td><?= $this->Number->format($ordercomment->pc_userid) ?></td>
                    <td><?= $this->Number->format($ordercomment->pc_parentId) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ordercomment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordercomment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordercomment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordercomment->id)]) ?>
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
