<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poproduct $poproduct
 * @var string[]|\Cake\Collection\CollectionInterface $purchaseorder
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $poproduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $poproduct->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Poproducts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="poproducts form content">
            <?= $this->Form->create($poproduct) ?>
            <fieldset>
                <legend><?= __('Edit Poproduct') ?></legend>
                <?php
                    echo $this->Form->control('purchaseOrder_id', ['options' => $purchaseorder]);
                    echo $this->Form->control('products_id', ['options' => $products]);
                    echo $this->Form->control('pp_quantity');
                    echo $this->Form->control('pp_plannedDelivery');
                    echo $this->Form->control('pp_productId');
                    echo $this->Form->control('pp_pricepunit');
                    echo $this->Form->control('pp_subtotal');
                    echo $this->Form->control('pp_tax');
                    echo $this->Form->control('pp_total');
                    echo $this->Form->control('pp_currency');
                    echo $this->Form->control('pp_convertRate');
                    echo $this->Form->control('pp_status');
                    echo $this->Form->control('pp_createUser');
                    echo $this->Form->control('pp_createDate');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
