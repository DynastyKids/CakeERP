<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PosProduct $posProduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pos Product'), ['action' => 'edit', $posProduct->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pos Product'), ['action' => 'delete', $posProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posProduct->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pos Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pos Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posProducts view content">
            <h3><?= h($posProduct->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pointofsale') ?></th>
                    <td><?= $posProduct->has('pointofsale') ? $this->Html->link($posProduct->pointofsale->id, ['controller' => 'Pointofsale', 'action' => 'view', $posProduct->pointofsale->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $posProduct->has('product') ? $this->Html->link($posProduct->product->id, ['controller' => 'Products', 'action' => 'view', $posProduct->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos Email') ?></th>
                    <td><?= h($posProduct->pos_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos Mobile') ?></th>
                    <td><?= h($posProduct->pos_mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($posProduct->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos UnitPrice') ?></th>
                    <td><?= $this->Number->format($posProduct->pos_unitPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos DiscountRate') ?></th>
                    <td><?= $this->Number->format($posProduct->pos_discountRate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos DiscountAmount') ?></th>
                    <td><?= $this->Number->format($posProduct->pos_discountAmount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos Count') ?></th>
                    <td><?= $this->Number->format($posProduct->pos_count) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos ActualPrice') ?></th>
                    <td><?= $this->Number->format($posProduct->pos_actualPrice) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
