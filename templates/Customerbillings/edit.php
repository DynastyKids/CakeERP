<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customerbilling $customerbilling
 * @var string[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerbilling->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerbilling->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Customerbillings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customerbillings form content">
            <?= $this->Form->create($customerbilling) ?>
            <fieldset>
                <legend><?= __('Edit Customerbilling') ?></legend>
                <?php
                    echo $this->Form->control('cb_firstname');
                    echo $this->Form->control('cb_lastname');
                    echo $this->Form->control('cb_address');
                    echo $this->Form->control('cb_phone');
                    echo $this->Form->control('cb_mobile');
                    echo $this->Form->control('customer_id', ['options' => $customers]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
