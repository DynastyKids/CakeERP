<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Priorityref $priorityref
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $priorityref->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $priorityref->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Priorityref'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="priorityref form content">
            <?= $this->Form->create($priorityref) ?>
            <fieldset>
                <legend><?= __('Edit Priorityref') ?></legend>
                <?php
                    echo $this->Form->control('pr_name');
                    echo $this->Form->control('pr_description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
