<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsHasProductcategory $productsHasProductcategory
 * @var string[]|\Cake\Collection\CollectionInterface $products
 * @var string[]|\Cake\Collection\CollectionInterface $productcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productsHasProductcategory->products_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsHasProductcategory->products_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Products Has Productcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsHasProductcategory form content">
            <?= $this->Form->create($productsHasProductcategory) ?>
            <fieldset>
                <legend><?= __('Edit Products Has Productcategory') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
