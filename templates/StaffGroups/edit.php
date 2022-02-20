<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StaffGroup $staffGroup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $staffGroup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $staffGroup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Staff Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffGroups form content">
            <?= $this->Form->create($staffGroup) ?>
            <fieldset>
                <legend><?= __('Edit Staff Group') ?></legend>
                <?php
                    echo $this->Form->control('sg_name');
                    echo $this->Form->control('sg_applyBranch');
                    echo $this->Form->control('staff_groupscol');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
