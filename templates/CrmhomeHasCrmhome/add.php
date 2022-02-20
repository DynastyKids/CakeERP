<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrmhomeHasCrmhome $crmhomeHasCrmhome
 * @var \Cake\Collection\CollectionInterface|string[] $crmhome
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Crmhome Has Crmhome'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmhomeHasCrmhome form content">
            <?= $this->Form->create($crmhomeHasCrmhome) ?>
            <fieldset>
                <legend><?= __('Add Crmhome Has Crmhome') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
