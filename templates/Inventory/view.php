<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Inventory'), ['action' => 'edit', $inventory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inventory'), ['action' => 'delete', $inventory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inventory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inventory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inventory view content">
            <h3><?= h($inventory->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $inventory->has('product') ? $this->Html->link($inventory->product->id, ['controller' => 'Products', 'action' => 'view', $inventory->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($inventory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('In Count') ?></th>
                    <td><?= $this->Number->format($inventory->in_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('In EachUnitPrice') ?></th>
                    <td><?= $this->Number->format($inventory->in_eachUnitPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('In ProduceDate') ?></th>
                    <td><?= h($inventory->in_ProduceDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('In BestBefore') ?></th>
                    <td><?= h($inventory->in_BestBefore) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
