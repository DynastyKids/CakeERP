<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accounttag[]|\Cake\Collection\CollectionInterface $accounttags
 */
?>
<div class="accounttags index content">
    <?= $this->Html->link(__('New Accounttag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Accounttags') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('at_applicability') ?></th>
                    <th><?= $this->Paginator->sort('at_color') ?></th>
                    <th><?= $this->Paginator->sort('at_active') ?></th>
                    <th><?= $this->Paginator->sort('at_createdDate') ?></th>
                    <th><?= $this->Paginator->sort('at_createUser') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accounttags as $accounttag): ?>
                <tr>
                    <td><?= $this->Number->format($accounttag->id) ?></td>
                    <td><?= h($accounttag->at_applicability) ?></td>
                    <td><?= h($accounttag->at_color) ?></td>
                    <td><?= $this->Number->format($accounttag->at_active) ?></td>
                    <td><?= $this->Number->format($accounttag->at_createdDate) ?></td>
                    <td><?= $this->Number->format($accounttag->at_createUser) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $accounttag->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accounttag->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accounttag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accounttag->id)]) ?>
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
