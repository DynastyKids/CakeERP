<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmorder $crmorder
 * @var \Cake\Collection\CollectionInterface|string[] $crmhome
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Crmorders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmorders form content">
            <?= $this->Form->create($crmorder) ?>
            <fieldset>
                <legend><?= __('Add Crmorder') ?></legend>
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
