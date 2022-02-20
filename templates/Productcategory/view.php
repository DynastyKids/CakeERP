<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productcategory $productcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Productcategory'), ['action' => 'edit', $productcategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Productcategory'), ['action' => 'delete', $productcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productcategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Productcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Productcategory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productcategory view content">
            <h3><?= h($productcategory->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pc Name') ?></th>
                    <td><?= h($productcategory->pc_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productcategory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pc Available') ?></th>
                    <td><?= $this->Number->format($productcategory->pc_available) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Pc Describe') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($productcategory->pc_describe)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
