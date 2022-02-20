<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salesorder $salesorder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Salesorder'), ['action' => 'edit', $salesorder->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Salesorder'), ['action' => 'delete', $salesorder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesorder->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Salesorder'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Salesorder'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="salesorder view content">
            <h3><?= h($salesorder->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $salesorder->has('customer') ? $this->Html->link($salesorder->customer->id, ['controller' => 'Customers', 'action' => 'view', $salesorder->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('So Deliverymethod') ?></th>
                    <td><?= h($salesorder->so_deliverymethod) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Trackingcourier') ?></th>
                    <td><?= h($salesorder->so_trackingcourier) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Trackingno') ?></th>
                    <td><?= h($salesorder->so_trackingno) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Status') ?></th>
                    <td><?= h($salesorder->so_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coupon') ?></th>
                    <td><?= $salesorder->has('coupon') ? $this->Html->link($salesorder->coupon->id, ['controller' => 'Coupons', 'action' => 'view', $salesorder->coupon->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('So Currency') ?></th>
                    <td><?= h($salesorder->so_currency) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Token') ?></th>
                    <td><?= h($salesorder->so_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sostatus') ?></th>
                    <td><?= $salesorder->has('sostatus') ? $this->Html->link($salesorder->sostatus->id, ['controller' => 'Sostatus', 'action' => 'view', $salesorder->sostatus->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Priorityref') ?></th>
                    <td><?= $salesorder->has('priorityref') ? $this->Html->link($salesorder->priorityref->id, ['controller' => 'Priorityref', 'action' => 'view', $salesorder->priorityref->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($salesorder->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Ordertime') ?></th>
                    <td><?= $this->Number->format($salesorder->so_ordertime) ?></td>
                </tr>
                <tr>
                    <th><?= __('So PaidTime') ?></th>
                    <td><?= $this->Number->format($salesorder->so_paidTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Dispatchtime') ?></th>
                    <td><?= $this->Number->format($salesorder->so_dispatchtime) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Subtotal') ?></th>
                    <td><?= $this->Number->format($salesorder->so_subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('So PromoAmount') ?></th>
                    <td><?= $this->Number->format($salesorder->so_promoAmount) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Tax') ?></th>
                    <td><?= $this->Number->format($salesorder->so_tax) ?></td>
                </tr>
                <tr>
                    <th><?= __('So TotalAmount') ?></th>
                    <td><?= $this->Number->format($salesorder->so_totalAmount) ?></td>
                </tr>
                <tr>
                    <th><?= __('So CustomerRef') ?></th>
                    <td><?= $this->Number->format($salesorder->so_customerRef) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Staff Id') ?></th>
                    <td><?= $this->Number->format($salesorder->so_staff_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Branch Processid') ?></th>
                    <td><?= $this->Number->format($salesorder->branch_processid) ?></td>
                </tr>
                <tr>
                    <th><?= __('So Salesman') ?></th>
                    <td><?= $this->Number->format($salesorder->so_salesman) ?></td>
                </tr>
                <tr>
                    <th><?= __('So ConfirmDate') ?></th>
                    <td><?= $this->Number->format($salesorder->so_confirmDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('So ConfirmUser') ?></th>
                    <td><?= $this->Number->format($salesorder->so_confirmUser) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('So Items') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesorder->so_items)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('So Paymentid') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesorder->so_paymentid)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('So Deliveryaddress') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesorder->so_deliveryaddress)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('So Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesorder->so_notes)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('So Attachemnt') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesorder->so_attachemnt)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('So Campaign') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($salesorder->so_campaign)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
