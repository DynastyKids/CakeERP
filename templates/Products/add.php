<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create($product) ?>
            <fieldset>
                <legend><?= __('Add Product') ?></legend>
                <?php
                    echo $this->Form->control('p_sku');
                    echo $this->Form->control('p_barcode');
                    echo $this->Form->control('p_group');
                    echo $this->Form->control('p_promoGroup');
                    echo $this->Form->control('p_onlinePrice');
                    echo $this->Form->control('p_retailPrice');
                    echo $this->Form->control('p_cubic_long');
                    echo $this->Form->control('p_cubit_width');
                    echo $this->Form->control('p_cubic_height');
                    echo $this->Form->control('p_publish');
                    echo $this->Form->control('p_hide');
                    echo $this->Form->control('p_totalquantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
