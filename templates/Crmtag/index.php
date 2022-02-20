<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmtag[]|\Cake\Collection\CollectionInterface $crmtag
 */
?>
<div class="crmtag index content">
    <?= $this->Html->link(__('New Crmtag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Crmtag') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ct_name') ?></th>
                    <th><?= $this->Paginator->sort('ct_color') ?></th>
                    <th><?= $this->Paginator->sort('ct_creator') ?></th>
                    <th><?= $this->Paginator->sort('ct_createTime') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crmtag as $crmtag): ?>
                <tr>
                    <td><?= $this->Number->format($crmtag->id) ?></td>
                    <td><?= h($crmtag->ct_name) ?></td>
                    <td><?= h($crmtag->ct_color) ?></td>
                    <td><?= $this->Number->format($crmtag->ct_creator) ?></td>
                    <td><?= $this->Number->format($crmtag->ct_createTime) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $crmtag->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $crmtag->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $crmtag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmtag->id)]) ?>
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
