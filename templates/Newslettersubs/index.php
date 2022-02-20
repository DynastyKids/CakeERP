<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newslettersub[]|\Cake\Collection\CollectionInterface $newslettersubs
 */
?>
<div class="newslettersubs index content">
    <?= $this->Html->link(__('New Newslettersub'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Newslettersubs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nl_group') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newslettersubs as $newslettersub): ?>
                <tr>
                    <td><?= $this->Number->format($newslettersub->id) ?></td>
                    <td><?= $this->Number->format($newslettersub->nl_group) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $newslettersub->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newslettersub->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newslettersub->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newslettersub->id)]) ?>
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
