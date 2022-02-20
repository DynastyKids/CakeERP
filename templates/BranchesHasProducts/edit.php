<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BranchesHasProduct $branchesHasProduct
 * @var string[]|\Cake\Collection\CollectionInterface $branches
 * @var string[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $branchesHasProduct->Branches_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $branchesHasProduct->Branches_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Branches Has Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="branchesHasProducts form content">
            <?= $this->Form->create($branchesHasProduct) ?>
            <fieldset>
                <legend><?= __('Edit Branches Has Product') ?></legend>
                <?php
                    echo $this->Form->control('quantity');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
