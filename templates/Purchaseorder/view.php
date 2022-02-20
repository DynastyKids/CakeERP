<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Purchaseorder $purchaseorder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Purchaseorder'), ['action' => 'edit', $purchaseorder->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Purchaseorder'), ['action' => 'delete', $purchaseorder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $purchaseorder->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Purchaseorder'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Purchaseorder'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="purchaseorder view content">
            <h3><?= h($purchaseorder->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Po Currency') ?></th>
                    <td><?= h($purchaseorder->po_currency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Trackingcourier') ?></th>
                    <td><?= h($purchaseorder->po_trackingcourier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Trackingno') ?></th>
                    <td><?= h($purchaseorder->po_trackingno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Token') ?></th>
                    <td><?= h($purchaseorder->po_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Priorityref') ?></th>
                    <td><?= $purchaseorder->has('priorityref') ? $this->Html->link($purchaseorder->priorityref->id, ['controller' => 'Priorityref', 'action' => 'view', $purchaseorder->priorityref->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($purchaseorder->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Ordertime') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_ordertime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po ConfirmDate') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_confirmDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Dispatchtime') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_dispatchtime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po SubtotalAmount') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_subtotalAmount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po TaxAmount') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_taxAmount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po TotalAmount') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_totalAmount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po ConvertRate') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_convertRate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po RequestUser') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_requestUser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po ApproveUser') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_approveUser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Partnerid') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_partnerid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po Status') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Po AlarmDate') ?></th>
                    <td><?= $this->Number->format($purchaseorder->po_alarmDate) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Po Reference') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($purchaseorder->po_reference)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Po Attachment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($purchaseorder->po_attachment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Po ReceiveAddress') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($purchaseorder->po_receiveAddress)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Po Items') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($purchaseorder->po_items)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Po Deliverymethod') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($purchaseorder->po_deliverymethod)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Po Invoices') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($purchaseorder->po_invoices)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Po Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($purchaseorder->po_notes)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Po AlarmNote') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($purchaseorder->po_alarmNote)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Po DeliveryAdd') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($purchaseorder->po_deliveryAdd)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
