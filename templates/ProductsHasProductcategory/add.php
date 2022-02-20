<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsHasProductcategory $productsHasProductcategory
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $productcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Products Has Productcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsHasProductcategory form content">
            <?= $this->Form->create($productsHasProductcategory) ?>
            <fieldset>
                <legend><?= __('Add Products Has Productcategory') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
