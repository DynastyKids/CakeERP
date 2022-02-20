<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ordercomment $ordercomment
 * @var \Cake\Collection\CollectionInterface|string[] $purchaseorder
 * @var \Cake\Collection\CollectionInterface|string[] $salesorder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ordercomments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ordercomments form content">
            <?= $this->Form->create($ordercomment) ?>
            <fieldset>
                <legend><?= __('Add Ordercomment') ?></legend>
                <?php
                    echo $this->Form->control('purchaseOrder_id', ['options' => $purchaseorder, 'empty' => true]);
                    echo $this->Form->control('salesOrder_id', ['options' => $salesorder, 'empty' => true]);
                    echo $this->Form->control('pc_content');
                    echo $this->Form->control('pc_userid');
                    echo $this->Form->control('pc_attachment');
                    echo $this->Form->control('pc_parentId');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
