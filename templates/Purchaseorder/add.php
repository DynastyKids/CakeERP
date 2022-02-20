<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Purchaseorder $purchaseorder
 * @var \Cake\Collection\CollectionInterface|string[] $priorityref
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Purchaseorder'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="purchaseorder form content">
            <?= $this->Form->create($purchaseorder) ?>
            <fieldset>
                <legend><?= __('Add Purchaseorder') ?></legend>
                <?php
                    echo $this->Form->control('po_reference');
                    echo $this->Form->control('po_attachment');
                    echo $this->Form->control('po_ordertime');
                    echo $this->Form->control('po_confirmDate');
                    echo $this->Form->control('po_dispatchtime');
                    echo $this->Form->control('po_subtotalAmount');
                    echo $this->Form->control('po_taxAmount');
                    echo $this->Form->control('po_totalAmount');
                    echo $this->Form->control('po_convertRate');
                    echo $this->Form->control('po_currency');
                    echo $this->Form->control('po_trackingcourier');
                    echo $this->Form->control('po_trackingno');
                    echo $this->Form->control('po_receiveAddress');
                    echo $this->Form->control('po_items');
                    echo $this->Form->control('po_deliverymethod');
                    echo $this->Form->control('po_requestUser');
                    echo $this->Form->control('po_approveUser');
                    echo $this->Form->control('po_partnerid');
                    echo $this->Form->control('po_invoices');
                    echo $this->Form->control('po_status');
                    echo $this->Form->control('po_notes');
                    echo $this->Form->control('po_alarmDate');
                    echo $this->Form->control('po_alarmNote');
                    echo $this->Form->control('po_deliveryAdd');
                    echo $this->Form->control('po_token');
                    echo $this->Form->control('PriorityRef_id', ['options' => $priorityref, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
