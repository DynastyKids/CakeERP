<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socomment[]|\Cake\Collection\CollectionInterface $socomments
 */
?>
<div class="socomments index content">
    <?= $this->Html->link(__('New Socomment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Socomments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('salesOrder_id') ?></th>
                    <th><?= $this->Paginator->sort('sc_userid') ?></th>
                    <th><?= $this->Paginator->sort('sc_parentId') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socomments as $socomment): ?>
                <tr>
                    <td><?= $this->Number->format($socomment->id) ?></td>
                    <td><?= $socomment->has('salesorder') ? $this->Html->link($socomment->salesorder->id, ['controller' => 'Salesorder', 'action' => 'view', $socomment->salesorder->id]) : '' ?></td>
                    <td><?= $this->Number->format($socomment->sc_userid) ?></td>
                    <td><?= $this->Number->format($socomment->sc_parentId) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $socomment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socomment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socomment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socomment->id)]) ?>
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
