<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmhome $crmhome
 * @var string[]|\Cake\Collection\CollectionInterface $customers
 * @var string[]|\Cake\Collection\CollectionInterface $crmorderstatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $crmhome->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $crmhome->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Crmhome'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmhome form content">
            <?= $this->Form->create($crmhome) ?>
            <fieldset>
                <legend><?= __('Edit Crmhome') ?></legend>
                <?php
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                    echo $this->Form->control('cp_expiredate');
                    echo $this->Form->control('cp_paymentTerms');
                    echo $this->Form->control('cp_createDate');
                    echo $this->Form->control('cp_createUser');
                    echo $this->Form->control('cp_lastModifyDate');
                    echo $this->Form->control('cp_lastModifyUser');
                    echo $this->Form->control('cp_statusId');
                    echo $this->Form->control('crmOrderStatus_id', ['options' => $crmorderstatus]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
