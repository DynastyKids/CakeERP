<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StaffGroup[]|\Cake\Collection\CollectionInterface $staffGroups
 */
?>
<div class="staffGroups index content">
    <?= $this->Html->link(__('New Staff Group'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Staff Groups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('staff_groupscol') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($staffGroups as $staffGroup): ?>
                <tr>
                    <td><?= $this->Number->format($staffGroup->id) ?></td>
                    <td><?= h($staffGroup->staff_groupscol) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $staffGroup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $staffGroup->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $staffGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staffGroup->id)]) ?>
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
