<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salesorder[]|\Cake\Collection\CollectionInterface $salesorder
 */
?>
<div class="salesorder index content">
    <?= $this->Html->link(__('New Salesorder'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Salesorder') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('so_ordertime') ?></th>
                    <th><?= $this->Paginator->sort('so_paidTime') ?></th>
                    <th><?= $this->Paginator->sort('so_dispatchtime') ?></th>
                    <th><?= $this->Paginator->sort('so_deliverymethod') ?></th>
                    <th><?= $this->Paginator->sort('so_trackingcourier') ?></th>
                    <th><?= $this->Paginator->sort('so_trackingno') ?></th>
                    <th><?= $this->Paginator->sort('so_status') ?></th>
                    <th><?= $this->Paginator->sort('coupon_id') ?></th>
                    <th><?= $this->Paginator->sort('so_subtotal') ?></th>
                    <th><?= $this->Paginator->sort('so_promoAmount') ?></th>
                    <th><?= $this->Paginator->sort('so_tax') ?></th>
                    <th><?= $this->Paginator->sort('so_totalAmount') ?></th>
                    <th><?= $this->Paginator->sort('so_currency') ?></th>
                    <th><?= $this->Paginator->sort('so_customerRef') ?></th>
                    <th><?= $this->Paginator->sort('so_staff_id') ?></th>
                    <th><?= $this->Paginator->sort('so_token') ?></th>
                    <th><?= $this->Paginator->sort('branch_processid') ?></th>
                    <th><?= $this->Paginator->sort('soStatus_id') ?></th>
                    <th><?= $this->Paginator->sort('so_salesman') ?></th>
                    <th><?= $this->Paginator->sort('so_confirmDate') ?></th>
                    <th><?= $this->Paginator->sort('so_confirmUser') ?></th>
                    <th><?= $this->Paginator->sort('PriorityRef_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salesorder as $salesorder): ?>
                <tr>
                    <td><?= $this->Number->format($salesorder->id) ?></td>
                    <td><?= $salesorder->has('customer') ? $this->Html->link($salesorder->customer->id, ['controller' => 'Customers', 'action' => 'view', $salesorder->customer->id]) : '' ?></td>
                    <td><?= $this->Number->format($salesorder->so_ordertime) ?></td>
                    <td><?= $this->Number->format($salesorder->so_paidTime) ?></td>
                    <td><?= $this->Number->format($salesorder->so_dispatchtime) ?></td>
                    <td><?= h($salesorder->so_deliverymethod) ?></td>
                    <td><?= h($salesorder->so_trackingcourier) ?></td>
                    <td><?= h($salesorder->so_trackingno) ?></td>
                    <td><?= h($salesorder->so_status) ?></td>
                    <td><?= $salesorder->has('coupon') ? $this->Html->link($salesorder->coupon->id, ['controller' => 'Coupons', 'action' => 'view', $salesorder->coupon->id]) : '' ?></td>
                    <td><?= $this->Number->format($salesorder->so_subtotal) ?></td>
                    <td><?= $this->Number->format($salesorder->so_promoAmount) ?></td>
                    <td><?= $this->Number->format($salesorder->so_tax) ?></td>
                    <td><?= $this->Number->format($salesorder->so_totalAmount) ?></td>
                    <td><?= h($salesorder->so_currency) ?></td>
                    <td><?= $this->Number->format($salesorder->so_customerRef) ?></td>
                    <td><?= $this->Number->format($salesorder->so_staff_id) ?></td>
                    <td><?= h($salesorder->so_token) ?></td>
                    <td><?= $this->Number->format($salesorder->branch_processid) ?></td>
                    <td><?= $salesorder->has('sostatus') ? $this->Html->link($salesorder->sostatus->id, ['controller' => 'Sostatus', 'action' => 'view', $salesorder->sostatus->id]) : '' ?></td>
                    <td><?= $this->Number->format($salesorder->so_salesman) ?></td>
                    <td><?= $this->Number->format($salesorder->so_confirmDate) ?></td>
                    <td><?= $this->Number->format($salesorder->so_confirmUser) ?></td>
                    <td><?= $salesorder->has('priorityref') ? $this->Html->link($salesorder->priorityref->id, ['controller' => 'Priorityref', 'action' => 'view', $salesorder->priorityref->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $salesorder->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salesorder->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salesorder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesorder->id)]) ?>
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
