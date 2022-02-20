<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salesorder $salesorder
 * @var string[]|\Cake\Collection\CollectionInterface $customers
 * @var string[]|\Cake\Collection\CollectionInterface $coupons
 * @var string[]|\Cake\Collection\CollectionInterface $sostatus
 * @var string[]|\Cake\Collection\CollectionInterface $priorityref
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $salesorder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salesorder->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Salesorder'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="salesorder form content">
            <?= $this->Form->create($salesorder) ?>
            <fieldset>
                <legend><?= __('Edit Salesorder') ?></legend>
                <?php
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                    echo $this->Form->control('so_ordertime');
                    echo $this->Form->control('so_paidTime');
                    echo $this->Form->control('so_dispatchtime');
                    echo $this->Form->control('so_deliverymethod');
                    echo $this->Form->control('so_trackingcourier');
                    echo $this->Form->control('so_trackingno');
                    echo $this->Form->control('so_items');
                    echo $this->Form->control('so_paymentid');
                    echo $this->Form->control('so_status');
                    echo $this->Form->control('so_deliveryaddress');
                    echo $this->Form->control('coupon_id', ['options' => $coupons, 'empty' => true]);
                    echo $this->Form->control('so_subtotal');
                    echo $this->Form->control('so_promoAmount');
                    echo $this->Form->control('so_tax');
                    echo $this->Form->control('so_totalAmount');
                    echo $this->Form->control('so_currency');
                    echo $this->Form->control('so_customerRef');
                    echo $this->Form->control('so_staff_id');
                    echo $this->Form->control('so_notes');
                    echo $this->Form->control('so_token');
                    echo $this->Form->control('so_attachemnt');
                    echo $this->Form->control('so_campaign');
                    echo $this->Form->control('branch_processid');
                    echo $this->Form->control('soStatus_id', ['options' => $sostatus]);
                    echo $this->Form->control('so_salesman');
                    echo $this->Form->control('so_confirmDate');
                    echo $this->Form->control('so_confirmUser');
                    echo $this->Form->control('PriorityRef_id', ['options' => $priorityref, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
