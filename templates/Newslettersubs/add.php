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
            <?= $this->Html->link(__('List Newslettersubs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newslettersubs form content">
            <?= $this->Form->create($newslettersub) ?>
            <fieldset>
                <legend><?= __('Add Newslettersub') ?></legend>
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
