<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PosProduct $posProduct
 * @var string[]|\Cake\Collection\CollectionInterface $pointofsale
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $posProduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $posProduct->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pos Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posProducts form content">
            <?= $this->Form->create($posProduct) ?>
            <fieldset>
                <legend><?= __('Edit Pos Product') ?></legend>
                <?php
                    echo $this->Form->control('pointofsale_id', ['options' => $pointofsale]);
                    echo $this->Form->control('products_id', ['options' => $products]);
                    echo $this->Form->control('pos_email');
                    echo $this->Form->control('pos_mobile');
                    echo $this->Form->control('pos_unitPrice');
                    echo $this->Form->control('pos_discountRate');
                    echo $this->Form->control('pos_discountAmount');
                    echo $this->Form->control('pos_count');
                    echo $this->Form->control('pos_actualPrice');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
