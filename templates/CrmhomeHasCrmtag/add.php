<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrmhomeHasCrmtag $crmhomeHasCrmtag
 * @var \Cake\Collection\CollectionInterface|string[] $crmhome
 * @var \Cake\Collection\CollectionInterface|string[] $crmtag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Crmhome Has Crmtag'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmhomeHasCrmtag form content">
            <?= $this->Form->create($crmhomeHasCrmtag) ?>
            <fieldset>
                <legend><?= __('Add Crmhome Has Crmtag') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
