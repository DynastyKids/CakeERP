<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers form content">
            <?= $this->Form->create($customer) ?>
            <fieldset>
                <legend><?= __('Edit Customer') ?></legend>
                <?php
                    echo $this->Form->control('cu_email');
                    echo $this->Form->control('cu_password');
                    echo $this->Form->control('cu_activate');
                    echo $this->Form->control('cu_dob');
                    echo $this->Form->control('cu_firstname');
                    echo $this->Form->control('cu_lastname');
                    echo $this->Form->control('cu_businessName');
                    echo $this->Form->control('cu_mobile');
                    echo $this->Form->control('cu_workphone');
                    echo $this->Form->control('cu_PostalAddress');
                    echo $this->Form->control('cu_token');
                    echo $this->Form->control('cu_role');
                    echo $this->Form->control('cu_createTime');
                    echo $this->Form->control('cu_lastLogin');
                    echo $this->Form->control('cu_group');
                    echo $this->Form->control('cu_abn');
                    echo $this->Form->control('cu_accountTag');
                    echo $this->Form->control('cu_notes');
                    echo $this->Form->control('cu_authkey');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
