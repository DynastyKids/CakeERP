<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Soinvoice[]|\Cake\Collection\CollectionInterface $soinvoice
 */
?>
<div class="soinvoice index content">
    <?= $this->Html->link(__('New Soinvoice'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Soinvoice') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('si_invoiceNumber') ?></th>
                    <th><?= $this->Paginator->sort('si_createTime') ?></th>
                    <th><?= $this->Paginator->sort('si_transactionAuth') ?></th>
                    <th><?= $this->Paginator->sort('si_transactionAmount') ?></th>
                    <th><?= $this->Paginator->sort('salesorder_invoicecol') ?></th>
                    <th><?= $this->Paginator->sort('salesOrder_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($soinvoice as $soinvoice): ?>
                <tr>
                    <td><?= $this->Number->format($soinvoice->id) ?></td>
                    <td><?= h($soinvoice->si_invoiceNumber) ?></td>
                    <td><?= h($soinvoice->si_createTime) ?></td>
                    <td><?= h($soinvoice->si_transactionAuth) ?></td>
                    <td><?= $this->Number->format($soinvoice->si_transactionAmount) ?></td>
                    <td><?= h($soinvoice->salesorder_invoicecol) ?></td>
                    <td><?= $soinvoice->has('salesorder') ? $this->Html->link($soinvoice->salesorder->id, ['controller' => 'Salesorder', 'action' => 'view', $soinvoice->salesorder->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $soinvoice->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $soinvoice->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $soinvoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $soinvoice->id)]) ?>
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
