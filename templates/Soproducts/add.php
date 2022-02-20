<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Soproduct $soproduct
 * @var \Cake\Collection\CollectionInterface|string[] $salesorder
 * @var \Cake\Collection\CollectionInterface|string[] $products
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Soproducts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="soproducts form content">
            <?= $this->Form->create($soproduct) ?>
            <fieldset>
                <legend><?= __('Add Soproduct') ?></legend>
                <?php
                    echo $this->Form->control('salesOrder_id', ['options' => $salesorder]);
                    echo $this->Form->control('products_id', ['options' => $products]);
                    echo $this->Form->control('sp_shippingMethod');
                    echo $this->Form->control('sp_shippingNumber');
                    echo $this->Form->control('sp_unitPrice');
                    echo $this->Form->control('sp_quantity');
                    echo $this->Form->control('sp_tax');
                    echo $this->Form->control('sp_subtotal');
                    echo $this->Form->control('sp_currency');
                    echo $this->Form->control('sp_currencyRate');
                    echo $this->Form->control('sp_discount');
                    echo $this->Form->control('sp_reduceSubtotal');
                    echo $this->Form->control('sp_reductTax');
                    echo $this->Form->control('sp_qtyDelivered');
                    echo $this->Form->control('sp_qtyInvoiced');
                    echo $this->Form->control('sp_salesman');
                    echo $this->Form->control('sp_status');
                    echo $this->Form->control('sp_batch');
                    echo $this->Form->control('sp_lot');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
