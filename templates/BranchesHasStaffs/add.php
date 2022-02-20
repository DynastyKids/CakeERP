<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BranchesHasStaff $branchesHasStaff
 * @var \Cake\Collection\CollectionInterface|string[] $branches
 * @var \Cake\Collection\CollectionInterface|string[] $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Branches Has Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="branchesHasStaffs form content">
            <?= $this->Form->create($branchesHasStaff) ?>
            <fieldset>
                <legend><?= __('Add Branches Has Staff') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
