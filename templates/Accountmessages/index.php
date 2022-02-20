<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accountmessage[]|\Cake\Collection\CollectionInterface $accountmessages
 */
?>
<div class="accountmessages index content">
    <?= $this->Html->link(__('New Accountmessage'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Accountmessages') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('am_senderid') ?></th>
                    <th><?= $this->Paginator->sort('am_receiverid') ?></th>
                    <th><?= $this->Paginator->sort('am_parentid') ?></th>
                    <th><?= $this->Paginator->sort('am_attachment') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accountmessages as $accountmessage): ?>
                <tr>
                    <td><?= $this->Number->format($accountmessage->id) ?></td>
                    <td><?= $this->Number->format($accountmessage->am_senderid) ?></td>
                    <td><?= $this->Number->format($accountmessage->am_receiverid) ?></td>
                    <td><?= $this->Number->format($accountmessage->am_parentid) ?></td>
                    <td><?= h($accountmessage->am_attachment) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $accountmessage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountmessage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountmessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountmessage->id)]) ?>
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
