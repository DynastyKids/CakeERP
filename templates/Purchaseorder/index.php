<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Purchaseorder[]|\Cake\Collection\CollectionInterface $purchaseorder
 */
?>
<div class="purchaseorder index content">
    <?= $this->Html->link(__('New Purchaseorder'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Purchaseorder') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('po_ordertime') ?></th>
                    <th><?= $this->Paginator->sort('po_confirmDate') ?></th>
                    <th><?= $this->Paginator->sort('po_dispatchtime') ?></th>
                    <th><?= $this->Paginator->sort('po_subtotalAmount') ?></th>
                    <th><?= $this->Paginator->sort('po_taxAmount') ?></th>
                    <th><?= $this->Paginator->sort('po_totalAmount') ?></th>
                    <th><?= $this->Paginator->sort('po_convertRate') ?></th>
                    <th><?= $this->Paginator->sort('po_currency') ?></th>
                    <th><?= $this->Paginator->sort('po_trackingcourier') ?></th>
                    <th><?= $this->Paginator->sort('po_trackingno') ?></th>
                    <th><?= $this->Paginator->sort('po_requestUser') ?></th>
                    <th><?= $this->Paginator->sort('po_approveUser') ?></th>
                    <th><?= $this->Paginator->sort('po_partnerid') ?></th>
                    <th><?= $this->Paginator->sort('po_status') ?></th>
                    <th><?= $this->Paginator->sort('po_alarmDate') ?></th>
                    <th><?= $this->Paginator->sort('po_token') ?></th>
                    <th><?= $this->Paginator->sort('PriorityRef_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($purchaseorder as $purchaseorder): ?>
                <tr>
                    <td><?= $this->Number->format($purchaseorder->id) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_ordertime) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_confirmDate) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_dispatchtime) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_subtotalAmount) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_taxAmount) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_totalAmount) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_convertRate) ?></td>
                    <td><?= h($purchaseorder->po_currency) ?></td>
                    <td><?= h($purchaseorder->po_trackingcourier) ?></td>
                    <td><?= h($purchaseorder->po_trackingno) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_requestUser) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_approveUser) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_partnerid) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_status) ?></td>
                    <td><?= $this->Number->format($purchaseorder->po_alarmDate) ?></td>
                    <td><?= h($purchaseorder->po_token) ?></td>
                    <td><?= $purchaseorder->has('priorityref') ? $this->Html->link($purchaseorder->priorityref->id, ['controller' => 'Priorityref', 'action' => 'view', $purchaseorder->priorityref->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $purchaseorder->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $purchaseorder->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $purchaseorder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchaseorder->id)]) ?>
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
