<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sostatus[]|\Cake\Collection\CollectionInterface $sostatus
 */
?>
<div class="sostatus index content">
    <?= $this->Html->link(__('New Sostatus'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sostatus') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ss_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sostatus as $sostatus): ?>
                <tr>
                    <td><?= $this->Number->format($sostatus->id) ?></td>
                    <td><?= h($sostatus->ss_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sostatus->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sostatus->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sostatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sostatus->id)]) ?>
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
