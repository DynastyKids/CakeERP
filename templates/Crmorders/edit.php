<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmorder $crmorder
 * @var string[]|\Cake\Collection\CollectionInterface $crmhome
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $crmorder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $crmorder->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Crmorders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmorders form content">
            <?= $this->Form->create($crmorder) ?>
            <fieldset>
                <legend><?= __('Edit Crmorder') ?></legend>
                <?php
                    echo $this->Form->control('crmHome_id', ['options' => $crmhome]);
                    echo $this->Form->control('co_productId');
                    echo $this->Form->control('co_inventoryCode');
                    echo $this->Form->control('co_quantity');
                    echo $this->Form->control('co_sequence');
                    echo $this->Form->control('co_Taxes');
                    echo $this->Form->control('co_agreedPrice');
                    echo $this->Form->control('co_optionalFlag');
                    echo $this->Form->control('co_notes');
                    echo $this->Form->control('co_subsection');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
