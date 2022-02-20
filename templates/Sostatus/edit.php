<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sostatus $sostatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sostatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sostatus->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sostatus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sostatus form content">
            <?= $this->Form->create($sostatus) ?>
            <fieldset>
                <legend><?= __('Edit Sostatus') ?></legend>
                <?php
                    echo $this->Form->control('ss_name');
                    echo $this->Form->control('ss_description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
