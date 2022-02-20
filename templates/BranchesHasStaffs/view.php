<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BranchesHasStaff $branchesHasStaff
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Branches Has Staff'), ['action' => 'edit', $branchesHasStaff->Branches_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Branches Has Staff'), ['action' => 'delete', $branchesHasStaff->Branches_id], ['confirm' => __('Are you sure you want to delete # {0}?', $branchesHasStaff->Branches_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Branches Has Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Branches Has Staff'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="branchesHasStaffs view content">
            <h3><?= h($branchesHasStaff->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Branch') ?></th>
                    <td><?= $branchesHasStaff->has('branch') ? $this->Html->link($branchesHasStaff->branch->id, ['controller' => 'Branches', 'action' => 'view', $branchesHasStaff->branch->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff') ?></th>
                    <td><?= $branchesHasStaff->has('staff') ? $this->Html->link($branchesHasStaff->staff->id, ['controller' => 'Staffs', 'action' => 'view', $branchesHasStaff->staff->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
