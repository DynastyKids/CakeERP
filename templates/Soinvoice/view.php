<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Soinvoice $soinvoice
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Soinvoice'), ['action' => 'edit', $soinvoice->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Soinvoice'), ['action' => 'delete', $soinvoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $soinvoice->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Soinvoice'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Soinvoice'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="soinvoice view content">
            <h3><?= h($soinvoice->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Si InvoiceNumber') ?></th>
                    <td><?= h($soinvoice->si_invoiceNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Si TransactionAuth') ?></th>
                    <td><?= h($soinvoice->si_transactionAuth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salesorder Invoicecol') ?></th>
                    <td><?= h($soinvoice->salesorder_invoicecol) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salesorder') ?></th>
                    <td><?= $soinvoice->has('salesorder') ? $this->Html->link($soinvoice->salesorder->id, ['controller' => 'Salesorder', 'action' => 'view', $soinvoice->salesorder->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($soinvoice->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Si TransactionAmount') ?></th>
                    <td><?= $this->Number->format($soinvoice->si_transactionAmount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Si CreateTime') ?></th>
                    <td><?= h($soinvoice->si_createTime) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Si Products') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($soinvoice->si_products)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Si Paymentid') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($soinvoice->si_paymentid)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Si TransactionID') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($soinvoice->si_transactionID)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
