<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmorder $crmorder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Crmorder'), ['action' => 'edit', $crmorder->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Crmorder'), ['action' => 'delete', $crmorder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmorder->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Crmorders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Crmorder'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmorders view content">
            <h3><?= h($crmorder->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Crmhome') ?></th>
                    <td><?= $crmorder->has('crmhome') ? $this->Html->link($crmorder->crmhome->id, ['controller' => 'Crmhome', 'action' => 'view', $crmorder->crmhome->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Sequence') ?></th>
                    <td><?= h($crmorder->co_sequence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($crmorder->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co ProductId') ?></th>
                    <td><?= $this->Number->format($crmorder->co_productId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Quantity') ?></th>
                    <td><?= $this->Number->format($crmorder->co_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co Taxes') ?></th>
                    <td><?= $this->Number->format($crmorder->co_Taxes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co AgreedPrice') ?></th>
                    <td><?= $this->Number->format($crmorder->co_agreedPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('Co OptionalFlag') ?></th>
                    <td><?= $this->Number->format($crmorder->co_optionalFlag) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Co InventoryCode') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($crmorder->co_inventoryCode)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Co Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($crmorder->co_notes)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Co Subsection') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($crmorder->co_subsection)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
