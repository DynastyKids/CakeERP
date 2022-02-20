<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coupon $coupon
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Coupon'), ['action' => 'edit', $coupon->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Coupon'), ['action' => 'delete', $coupon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Coupons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Coupon'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coupons view content">
            <h3><?= h($coupon->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cp Code') ?></th>
                    <td><?= h($coupon->cp_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($coupon->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp StartTime') ?></th>
                    <td><?= $this->Number->format($coupon->cp_startTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp EndTime') ?></th>
                    <td><?= $this->Number->format($coupon->cp_endTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp Deducepercent') ?></th>
                    <td><?= $this->Number->format($coupon->cp_deducepercent) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp Deduceamount') ?></th>
                    <td><?= $this->Number->format($coupon->cp_deduceamount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp Newuser') ?></th>
                    <td><?= $this->Number->format($coupon->cp_newuser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp Amount') ?></th>
                    <td><?= $this->Number->format($coupon->cp_amount) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Cp Applyprod') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($coupon->cp_applyprod)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Salesorder') ?></h4>
                <?php if (!empty($coupon->salesorder)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('So Ordertime') ?></th>
                            <th><?= __('So PaidTime') ?></th>
                            <th><?= __('So Dispatchtime') ?></th>
                            <th><?= __('So Deliverymethod') ?></th>
                            <th><?= __('So Trackingcourier') ?></th>
                            <th><?= __('So Trackingno') ?></th>
                            <th><?= __('So Items') ?></th>
                            <th><?= __('So Paymentid') ?></th>
                            <th><?= __('So Status') ?></th>
                            <th><?= __('So Deliveryaddress') ?></th>
                            <th><?= __('Coupon Id') ?></th>
                            <th><?= __('So Subtotal') ?></th>
                            <th><?= __('So PromoAmount') ?></th>
                            <th><?= __('So Tax') ?></th>
                            <th><?= __('So TotalAmount') ?></th>
                            <th><?= __('So Currency') ?></th>
                            <th><?= __('So CustomerRef') ?></th>
                            <th><?= __('So Staff Id') ?></th>
                            <th><?= __('So Notes') ?></th>
                            <th><?= __('So Token') ?></th>
                            <th><?= __('So Attachemnt') ?></th>
                            <th><?= __('So Campaign') ?></th>
                            <th><?= __('Branch Processid') ?></th>
                            <th><?= __('SoStatus Id') ?></th>
                            <th><?= __('So Salesman') ?></th>
                            <th><?= __('So ConfirmDate') ?></th>
                            <th><?= __('So ConfirmUser') ?></th>
                            <th><?= __('PriorityRef Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($coupon->salesorder as $salesorder) : ?>
                        <tr>
                            <td><?= h($salesorder->id) ?></td>
                            <td><?= h($salesorder->customer_id) ?></td>
                            <td><?= h($salesorder->so_ordertime) ?></td>
                            <td><?= h($salesorder->so_paidTime) ?></td>
                            <td><?= h($salesorder->so_dispatchtime) ?></td>
                            <td><?= h($salesorder->so_deliverymethod) ?></td>
                            <td><?= h($salesorder->so_trackingcourier) ?></td>
                            <td><?= h($salesorder->so_trackingno) ?></td>
                            <td><?= h($salesorder->so_items) ?></td>
                            <td><?= h($salesorder->so_paymentid) ?></td>
                            <td><?= h($salesorder->so_status) ?></td>
                            <td><?= h($salesorder->so_deliveryaddress) ?></td>
                            <td><?= h($salesorder->coupon_id) ?></td>
                            <td><?= h($salesorder->so_subtotal) ?></td>
                            <td><?= h($salesorder->so_promoAmount) ?></td>
                            <td><?= h($salesorder->so_tax) ?></td>
                            <td><?= h($salesorder->so_totalAmount) ?></td>
                            <td><?= h($salesorder->so_currency) ?></td>
                            <td><?= h($salesorder->so_customerRef) ?></td>
                            <td><?= h($salesorder->so_staff_id) ?></td>
                            <td><?= h($salesorder->so_notes) ?></td>
                            <td><?= h($salesorder->so_token) ?></td>
                            <td><?= h($salesorder->so_attachemnt) ?></td>
                            <td><?= h($salesorder->so_campaign) ?></td>
                            <td><?= h($salesorder->branch_processid) ?></td>
                            <td><?= h($salesorder->soStatus_id) ?></td>
                            <td><?= h($salesorder->so_salesman) ?></td>
                            <td><?= h($salesorder->so_confirmDate) ?></td>
                            <td><?= h($salesorder->so_confirmUser) ?></td>
                            <td><?= h($salesorder->PriorityRef_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Salesorder', 'action' => 'view', $salesorder->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Salesorder', 'action' => 'edit', $salesorder->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Salesorder', 'action' => 'delete', $salesorder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salesorder->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
