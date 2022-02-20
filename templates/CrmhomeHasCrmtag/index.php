<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrmhomeHasCrmtag[]|\Cake\Collection\CollectionInterface $crmhomeHasCrmtag
 */
?>
<div class="crmhomeHasCrmtag index content">
    <?= $this->Html->link(__('New Crmhome Has Crmtag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Crmhome Has Crmtag') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('crmHome_id') ?></th>
                    <th><?= $this->Paginator->sort('crmTag_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crmhomeHasCrmtag as $crmhomeHasCrmtag): ?>
                <tr>
                    <td><?= $crmhomeHasCrmtag->has('crmhome') ? $this->Html->link($crmhomeHasCrmtag->crmhome->id, ['controller' => 'Crmhome', 'action' => 'view', $crmhomeHasCrmtag->crmhome->id]) : '' ?></td>
                    <td><?= $crmhomeHasCrmtag->has('crmtag') ? $this->Html->link($crmhomeHasCrmtag->crmtag->id, ['controller' => 'Crmtag', 'action' => 'view', $crmhomeHasCrmtag->crmtag->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crmhomeHasCrmtag->crmHome_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crmhomeHasCrmtag->crmHome_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $crmhomeHasCrmtag->crmHome_id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmhomeHasCrmtag->crmHome_id)]) ?>
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
