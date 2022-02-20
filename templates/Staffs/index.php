<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<div class="staffs index content">
    <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Staffs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sf_email') ?></th>
                    <th><?= $this->Paginator->sort('sf_password') ?></th>
                    <th><?= $this->Paginator->sort('sf_createTime') ?></th>
                    <th><?= $this->Paginator->sort('sf_lastLogin') ?></th>
                    <th><?= $this->Paginator->sort('sf_role') ?></th>
                    <th><?= $this->Paginator->sort('sf_phone') ?></th>
                    <th><?= $this->Paginator->sort('sf_mobile') ?></th>
                    <th><?= $this->Paginator->sort('sf_taxID') ?></th>
                    <th><?= $this->Paginator->sort('sf_token') ?></th>
                    <th><?= $this->Paginator->sort('sf_authkey') ?></th>
                    <th><?= $this->Paginator->sort('staff_groups_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($staffs as $staff): ?>
                <tr>
                    <td><?= $this->Number->format($staff->id) ?></td>
                    <td><?= h($staff->sf_email) ?></td>
                    <td><?= h($staff->sf_password) ?></td>
                    <td><?= $this->Number->format($staff->sf_createTime) ?></td>
                    <td><?= $this->Number->format($staff->sf_lastLogin) ?></td>
                    <td><?= h($staff->sf_role) ?></td>
                    <td><?= h($staff->sf_phone) ?></td>
                    <td><?= h($staff->sf_mobile) ?></td>
                    <td><?= h($staff->sf_taxID) ?></td>
                    <td><?= h($staff->sf_token) ?></td>
                    <td><?= h($staff->sf_authkey) ?></td>
                    <td><?= $staff->has('staff_group') ? $this->Html->link($staff->staff_group->id, ['controller' => 'StaffGroups', 'action' => 'view', $staff->staff_group->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $staff->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $staff->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id)]) ?>
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
