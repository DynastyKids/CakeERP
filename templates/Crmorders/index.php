<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmorder[]|\Cake\Collection\CollectionInterface $crmorders
 */
?>
<div class="crmorders index content">
    <?= $this->Html->link(__('New Crmorder'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Crmorders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('crmHome_id') ?></th>
                    <th><?= $this->Paginator->sort('co_productId') ?></th>
                    <th><?= $this->Paginator->sort('co_quantity') ?></th>
                    <th><?= $this->Paginator->sort('co_sequence') ?></th>
                    <th><?= $this->Paginator->sort('co_Taxes') ?></th>
                    <th><?= $this->Paginator->sort('co_agreedPrice') ?></th>
                    <th><?= $this->Paginator->sort('co_optionalFlag') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crmorders as $crmorder): ?>
                <tr>
                    <td><?= $this->Number->format($crmorder->id) ?></td>
                    <td><?= $crmorder->has('crmhome') ? $this->Html->link($crmorder->crmhome->id, ['controller' => 'Crmhome', 'action' => 'view', $crmorder->crmhome->id]) : '' ?></td>
                    <td><?= $this->Number->format($crmorder->co_productId) ?></td>
                    <td><?= $this->Number->format($crmorder->co_quantity) ?></td>
                    <td><?= h($crmorder->co_sequence) ?></td>
                    <td><?= $this->Number->format($crmorder->co_Taxes) ?></td>
                    <td><?= $this->Number->format($crmorder->co_agreedPrice) ?></td>
                    <td><?= $this->Number->format($crmorder->co_optionalFlag) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crmorder->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crmorder->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $crmorder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmorder->id)]) ?>
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
