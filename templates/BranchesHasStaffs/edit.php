<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BranchesHasStaff $branchesHasStaff
 * @var string[]|\Cake\Collection\CollectionInterface $branches
 * @var string[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $branchesHasStaff->Branches_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $branchesHasStaff->Branches_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Branches Has Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="branchesHasStaffs form content">
            <?= $this->Form->create($branchesHasStaff) ?>
            <fieldset>
                <legend><?= __('Edit Branches Has Staff') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
