<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pointofsale[]|\Cake\Collection\CollectionInterface $pointofsale
 */
?>
<div class="pointofsale index content">
    <?= $this->Html->link(__('New Pointofsale'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pointofsale') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pos_userid') ?></th>
                    <th><?= $this->Paginator->sort('pos_opentime') ?></th>
                    <th><?= $this->Paginator->sort('pos_endtime') ?></th>
                    <th><?= $this->Paginator->sort('pos_openamount') ?></th>
                    <th><?= $this->Paginator->sort('pos_sessionAmount') ?></th>
                    <th><?= $this->Paginator->sort('pos_endamount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pointofsale as $pointofsale): ?>
                <tr>
                    <td><?= $this->Number->format($pointofsale->id) ?></td>
                    <td><?= $this->Number->format($pointofsale->pos_userid) ?></td>
                    <td><?= $this->Number->format($pointofsale->pos_opentime) ?></td>
                    <td><?= $this->Number->format($pointofsale->pos_endtime) ?></td>
                    <td><?= $this->Number->format($pointofsale->pos_openamount) ?></td>
                    <td><?= $this->Number->format($pointofsale->pos_sessionAmount) ?></td>
                    <td><?= $this->Number->format($pointofsale->pos_endamount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pointofsale->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pointofsale->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pointofsale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pointofsale->id)]) ?>
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
