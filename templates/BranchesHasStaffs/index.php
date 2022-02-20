<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BranchesHasStaff[]|\Cake\Collection\CollectionInterface $branchesHasStaffs
 */
?>
<div class="branchesHasStaffs index content">
    <?= $this->Html->link(__('New Branches Has Staff'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Branches Has Staffs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Branches_id') ?></th>
                    <th><?= $this->Paginator->sort('staffs_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($branchesHasStaffs as $branchesHasStaff): ?>
                <tr>
                    <td><?= $branchesHasStaff->has('branch') ? $this->Html->link($branchesHasStaff->branch->id, ['controller' => 'Branches', 'action' => 'view', $branchesHasStaff->branch->id]) : '' ?></td>
                    <td><?= $branchesHasStaff->has('staff') ? $this->Html->link($branchesHasStaff->staff->id, ['controller' => 'Staffs', 'action' => 'view', $branchesHasStaff->staff->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $branchesHasStaff->Branches_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $branchesHasStaff->Branches_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $branchesHasStaff->Branches_id], ['confirm' => __('Are you sure you want to delete # {0}?', $branchesHasStaff->Branches_id)]) ?>
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
