<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newslettersub $newslettersub
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newslettersub->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newslettersub->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Newslettersubs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newslettersubs form content">
            <?= $this->Form->create($newslettersub) ?>
            <fieldset>
                <legend><?= __('Edit Newslettersub') ?></legend>
                <?php
                    echo $this->Form->control('nl_name');
                    echo $this->Form->control('nl_email');
                    echo $this->Form->control('nl_group');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
