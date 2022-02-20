<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsHasProductcategory[]|\Cake\Collection\CollectionInterface $productsHasProductcategory
 */
?>
<div class="productsHasProductcategory index content">
    <?= $this->Html->link(__('New Products Has Productcategory'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Products Has Productcategory') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('products_id') ?></th>
                    <th><?= $this->Paginator->sort('productCategory_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productsHasProductcategory as $productsHasProductcategory): ?>
                <tr>
                    <td><?= $productsHasProductcategory->has('product') ? $this->Html->link($productsHasProductcategory->product->id, ['controller' => 'Products', 'action' => 'view', $productsHasProductcategory->product->id]) : '' ?></td>
                    <td><?= $productsHasProductcategory->has('productcategory') ? $this->Html->link($productsHasProductcategory->productcategory->id, ['controller' => 'Productcategory', 'action' => 'view', $productsHasProductcategory->productcategory->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productsHasProductcategory->products_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsHasProductcategory->products_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsHasProductcategory->products_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsHasProductcategory->products_id)]) ?>
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
