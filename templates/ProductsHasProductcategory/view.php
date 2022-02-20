<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsHasProductcategory $productsHasProductcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Products Has Productcategory'), ['action' => 'edit', $productsHasProductcategory->products_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Products Has Productcategory'), ['action' => 'delete', $productsHasProductcategory->products_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsHasProductcategory->products_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products Has Productcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Products Has Productcategory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsHasProductcategory view content">
            <h3><?= h($productsHasProductcategory->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productsHasProductcategory->has('product') ? $this->Html->link($productsHasProductcategory->product->id, ['controller' => 'Products', 'action' => 'view', $productsHasProductcategory->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Productcategory') ?></th>
                    <td><?= $productsHasProductcategory->has('productcategory') ? $this->Html->link($productsHasProductcategory->productcategory->id, ['controller' => 'Productcategory', 'action' => 'view', $productsHasProductcategory->productcategory->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
