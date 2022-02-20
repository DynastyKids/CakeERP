<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BranchesHasProduct $branchesHasProduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Branches Has Product'), ['action' => 'edit', $branchesHasProduct->Branches_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Branches Has Product'), ['action' => 'delete', $branchesHasProduct->Branches_id], ['confirm' => __('Are you sure you want to delete # {0}?', $branchesHasProduct->Branches_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Branches Has Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Branches Has Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="branchesHasProducts view content">
            <h3><?= h($branchesHasProduct->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Branch') ?></th>
                    <td><?= $branchesHasProduct->has('branch') ? $this->Html->link($branchesHasProduct->branch->id, ['controller' => 'Branches', 'action' => 'view', $branchesHasProduct->branch->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $branchesHasProduct->has('product') ? $this->Html->link($branchesHasProduct->product->id, ['controller' => 'Products', 'action' => 'view', $branchesHasProduct->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($branchesHasProduct->quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
