<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmhome[]|\Cake\Collection\CollectionInterface $crmhome
 */
?>
<div class="crmhome index content">
    <?= $this->Html->link(__('New Crmhome'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Crmhome') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('cp_expiredate') ?></th>
                    <th><?= $this->Paginator->sort('cp_paymentTerms') ?></th>
                    <th><?= $this->Paginator->sort('cp_createDate') ?></th>
                    <th><?= $this->Paginator->sort('cp_createUser') ?></th>
                    <th><?= $this->Paginator->sort('cp_lastModifyDate') ?></th>
                    <th><?= $this->Paginator->sort('cp_lastModifyUser') ?></th>
                    <th><?= $this->Paginator->sort('cp_statusId') ?></th>
                    <th><?= $this->Paginator->sort('crmOrderStatus_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crmhome as $crmhome): ?>
                <tr>
                    <td><?= $this->Number->format($crmhome->id) ?></td>
                    <td><?= $crmhome->has('customer') ? $this->Html->link($crmhome->customer->id, ['controller' => 'Customers', 'action' => 'view', $crmhome->customer->id]) : '' ?></td>
                    <td><?= $this->Number->format($crmhome->cp_expiredate) ?></td>
                    <td><?= $this->Number->format($crmhome->cp_paymentTerms) ?></td>
                    <td><?= $this->Number->format($crmhome->cp_createDate) ?></td>
                    <td><?= $this->Number->format($crmhome->cp_createUser) ?></td>
                    <td><?= $this->Number->format($crmhome->cp_lastModifyDate) ?></td>
                    <td><?= $this->Number->format($crmhome->cp_lastModifyUser) ?></td>
                    <td><?= $this->Number->format($crmhome->cp_statusId) ?></td>
                    <td><?= $crmhome->has('crmorderstatus') ? $this->Html->link($crmhome->crmorderstatus->id, ['controller' => 'Crmorderstatus', 'action' => 'view', $crmhome->crmorderstatus->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crmhome->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crmhome->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $crmhome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmhome->id)]) ?>
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
