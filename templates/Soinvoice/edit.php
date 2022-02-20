<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Soinvoice $soinvoice
 * @var string[]|\Cake\Collection\CollectionInterface $salesorder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $soinvoice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $soinvoice->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Soinvoice'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="soinvoice form content">
            <?= $this->Form->create($soinvoice) ?>
            <fieldset>
                <legend><?= __('Edit Soinvoice') ?></legend>
                <?php
                    echo $this->Form->control('si_invoiceNumber');
                    echo $this->Form->control('si_createTime');
                    echo $this->Form->control('si_products');
                    echo $this->Form->control('si_paymentid');
                    echo $this->Form->control('si_transactionID');
                    echo $this->Form->control('si_transactionAuth');
                    echo $this->Form->control('si_transactionAmount');
                    echo $this->Form->control('salesorder_invoicecol');
                    echo $this->Form->control('salesOrder_id', ['options' => $salesorder]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
