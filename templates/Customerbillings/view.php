<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customerbilling $customerbilling
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customerbilling'), ['action' => 'edit', $customerbilling->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customerbilling'), ['action' => 'delete', $customerbilling->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerbilling->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customerbillings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customerbilling'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customerbillings view content">
            <h3><?= h($customerbilling->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cb Phone') ?></th>
                    <td><?= h($customerbilling->cb_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cb Mobile') ?></th>
                    <td><?= h($customerbilling->cb_mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $customerbilling->has('customer') ? $this->Html->link($customerbilling->customer->id, ['controller' => 'Customers', 'action' => 'view', $customerbilling->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customerbilling->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Cb Firstname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($customerbilling->cb_firstname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Cb Lastname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($customerbilling->cb_lastname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Cb Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($customerbilling->cb_address)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
