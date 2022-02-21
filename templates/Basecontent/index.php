<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Basecontent[]|\Cake\Collection\CollectionInterface $basecontent
 */
?>
<div class="basecontent index content">
    <?= $this->Html->link(__('New Basecontent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Basecontent') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('bc_path') ?></th>
                    <th><?= $this->Paginator->sort('bc_string') ?></th>
                    <th><?= $this->Paginator->sort('bc_int') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($basecontent as $basecontent): ?>
                <tr>
                    <td><?= $this->Number->format($basecontent->id) ?></td>
                    <td><?= h($basecontent->bc_path) ?></td>
                    <td><?= h($basecontent->bc_string) ?></td>
                    <td><?= $this->Number->format($basecontent->bc_int) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $basecontent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $basecontent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $basecontent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $basecontent->id)]) ?>
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
