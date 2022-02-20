<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrmhomeHasCrmtag $crmhomeHasCrmtag
 * @var string[]|\Cake\Collection\CollectionInterface $crmhome
 * @var string[]|\Cake\Collection\CollectionInterface $crmtag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $crmhomeHasCrmtag->crmHome_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $crmhomeHasCrmtag->crmHome_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Crmhome Has Crmtag'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmhomeHasCrmtag form content">
            <?= $this->Form->create($crmhomeHasCrmtag) ?>
            <fieldset>
                <legend><?= __('Edit Crmhome Has Crmtag') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
