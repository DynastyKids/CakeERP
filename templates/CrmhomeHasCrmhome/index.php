<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrmhomeHasCrmhome[]|\Cake\Collection\CollectionInterface $crmhomeHasCrmhome
 */
?>
<div class="crmhomeHasCrmhome index content">
    <?= $this->Html->link(__('New Crmhome Has Crmhome'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Crmhome Has Crmhome') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('crmHome_id') ?></th>
                    <th><?= $this->Paginator->sort('crmHome_id1') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crmhomeHasCrmhome as $crmhomeHasCrmhome): ?>
                <tr>
                    <td><?= $crmhomeHasCrmhome->has('crmhome') ? $this->Html->link($crmhomeHasCrmhome->crmhome->id, ['controller' => 'Crmhome', 'action' => 'view', $crmhomeHasCrmhome->crmhome->id]) : '' ?></td>
                    <td><?= $this->Number->format($crmhomeHasCrmhome->crmHome_id1) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crmhomeHasCrmhome->crmHome_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crmhomeHasCrmhome->crmHome_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $crmhomeHasCrmhome->crmHome_id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmhomeHasCrmhome->crmHome_id)]) ?>
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
