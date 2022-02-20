<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BranchesHasProduct[]|\Cake\Collection\CollectionInterface $branchesHasProducts
 */
?>
<div class="branchesHasProducts index content">
    <?= $this->Html->link(__('New Branches Has Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Branches Has Products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Branches_id') ?></th>
                    <th><?= $this->Paginator->sort('products_id') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($branchesHasProducts as $branchesHasProduct): ?>
                <tr>
                    <td><?= $branchesHasProduct->has('branch') ? $this->Html->link($branchesHasProduct->branch->id, ['controller' => 'Branches', 'action' => 'view', $branchesHasProduct->branch->id]) : '' ?></td>
                    <td><?= $branchesHasProduct->has('product') ? $this->Html->link($branchesHasProduct->product->id, ['controller' => 'Products', 'action' => 'view', $branchesHasProduct->product->id]) : '' ?></td>
                    <td><?= $this->Number->format($branchesHasProduct->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $branchesHasProduct->Branches_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $branchesHasProduct->Branches_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $branchesHasProduct->Branches_id], ['confirm' => __('Are you sure you want to delete # {0}?', $branchesHasProduct->Branches_id)]) ?>
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
