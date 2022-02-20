<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<div class="customers index content">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cu_email') ?></th>
                    <th><?= $this->Paginator->sort('cu_password') ?></th>
                    <th><?= $this->Paginator->sort('cu_activate') ?></th>
                    <th><?= $this->Paginator->sort('cu_dob') ?></th>
                    <th><?= $this->Paginator->sort('cu_mobile') ?></th>
                    <th><?= $this->Paginator->sort('cu_workphone') ?></th>
                    <th><?= $this->Paginator->sort('cu_token') ?></th>
                    <th><?= $this->Paginator->sort('cu_role') ?></th>
                    <th><?= $this->Paginator->sort('cu_createTime') ?></th>
                    <th><?= $this->Paginator->sort('cu_lastLogin') ?></th>
                    <th><?= $this->Paginator->sort('cu_group') ?></th>
                    <th><?= $this->Paginator->sort('cu_abn') ?></th>
                    <th><?= $this->Paginator->sort('cu_authkey') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $this->Number->format($customer->id) ?></td>
                    <td><?= h($customer->cu_email) ?></td>
                    <td><?= h($customer->cu_password) ?></td>
                    <td><?= $this->Number->format($customer->cu_activate) ?></td>
                    <td><?= $this->Number->format($customer->cu_dob) ?></td>
                    <td><?= h($customer->cu_mobile) ?></td>
                    <td><?= h($customer->cu_workphone) ?></td>
                    <td><?= h($customer->cu_token) ?></td>
                    <td><?= $this->Number->format($customer->cu_role) ?></td>
                    <td><?= $this->Number->format($customer->cu_createTime) ?></td>
                    <td><?= $this->Number->format($customer->cu_lastLogin) ?></td>
                    <td><?= $this->Number->format($customer->cu_group) ?></td>
                    <td><?= h($customer->cu_abn) ?></td>
                    <td><?= h($customer->cu_authkey) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
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
