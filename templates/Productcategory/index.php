<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productcategory[]|\Cake\Collection\CollectionInterface $productcategory
 */
?>
<div class="productcategory index content">
    <?= $this->Html->link(__('New Productcategory'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productcategory') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pc_name') ?></th>
                    <th><?= $this->Paginator->sort('pc_available') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productcategory as $productcategory): ?>
                <tr>
                    <td><?= $this->Number->format($productcategory->id) ?></td>
                    <td><?= h($productcategory->pc_name) ?></td>
                    <td><?= $this->Number->format($productcategory->pc_available) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productcategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productcategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productcategory->id)]) ?>
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
