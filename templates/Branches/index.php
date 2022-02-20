<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch[]|\Cake\Collection\CollectionInterface $branches
 */
?>
<div class="branches index content">
    <?= $this->Html->link(__('New Branch'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Branches') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('br_abn') ?></th>
                    <th><?= $this->Paginator->sort('br_phone') ?></th>
                    <th><?= $this->Paginator->sort('br_email') ?></th>
                    <th><?= $this->Paginator->sort('br_currency') ?></th>
                    <th><?= $this->Paginator->sort('so_pickupFlag') ?></th>
                    <th><?= $this->Paginator->sort('in_locationFlag') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($branches as $branch): ?>
                <tr>
                    <td><?= $this->Number->format($branch->id) ?></td>
                    <td><?= h($branch->br_abn) ?></td>
                    <td><?= h($branch->br_phone) ?></td>
                    <td><?= h($branch->br_email) ?></td>
                    <td><?= h($branch->br_currency) ?></td>
                    <td><?= $this->Number->format($branch->so_pickupFlag) ?></td>
                    <td><?= $this->Number->format($branch->in_locationFlag) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $branch->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $branch->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]) ?>
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
