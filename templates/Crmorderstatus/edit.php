<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmorderstatus $crmorderstatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $crmorderstatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $crmorderstatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Crmorderstatus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmorderstatus form content">
            <?= $this->Form->create($crmorderstatus) ?>
            <fieldset>
                <legend><?= __('Edit Crmorderstatus') ?></legend>
                <?php
                    echo $this->Form->control('cs_code');
                    echo $this->Form->control('cs_name');
                    echo $this->Form->control('cs_description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
