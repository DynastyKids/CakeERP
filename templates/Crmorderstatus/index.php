<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmorderstatus[]|\Cake\Collection\CollectionInterface $crmorderstatus
 */
?>
<div class="crmorderstatus index content">
    <?= $this->Html->link(__('New Crmorderstatus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Crmorderstatus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cs_code') ?></th>
                    <th><?= $this->Paginator->sort('cs_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crmorderstatus as $crmorderstatus): ?>
                <tr>
                    <td><?= $this->Number->format($crmorderstatus->id) ?></td>
                    <td><?= $this->Number->format($crmorderstatus->cs_code) ?></td>
                    <td><?= h($crmorderstatus->cs_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crmorderstatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crmorderstatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $crmorderstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmorderstatus->id)]) ?>
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
