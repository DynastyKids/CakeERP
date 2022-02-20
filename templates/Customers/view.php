<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cu Email') ?></th>
                    <td><?= h($customer->cu_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Password') ?></th>
                    <td><?= h($customer->cu_password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Mobile') ?></th>
                    <td><?= h($customer->cu_mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Workphone') ?></th>
                    <td><?= h($customer->cu_workphone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Token') ?></th>
                    <td><?= h($customer->cu_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Abn') ?></th>
                    <td><?= h($customer->cu_abn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Authkey') ?></th>
                    <td><?= h($customer->cu_authkey) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($customer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Activate') ?></th>
                    <td><?= $this->Number->format($customer->cu_activate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Dob') ?></th>
                    <td><?= $this->Number->format($customer->cu_dob) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Role') ?></th>
                    <td><?= $this->Number->format($customer->cu_role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu CreateTime') ?></th>
                    <td><?= $this->Number->format($customer->cu_createTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu LastLogin') ?></th>
                    <td><?= $this->Number->format($customer->cu_lastLogin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cu Group') ?></th>
                    <td><?= $this->Number->format($customer->cu_group) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Cu Firstname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($customer->cu_firstname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Cu Lastname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($customer->cu_lastname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Cu BusinessName') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($customer->cu_businessName)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Cu PostalAddress') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($customer->cu_PostalAddress)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Cu AccountTag') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($customer->cu_accountTag)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Cu Notes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($customer->cu_notes)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Crmhome') ?></h4>
                <?php if (!empty($customer->crmhome)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th><?= __('Cp Expiredate') ?></th>
                            <th><?= __('Cp PaymentTerms') ?></th>
                            <th><?= __('Cp CreateDate') ?></th>
                            <th><?= __('Cp CreateUser') ?></th>
                            <th><?= __('Cp LastModifyDate') ?></th>
                            <th><?= __('Cp LastModifyUser') ?></th>
                            <th><?= __('Cp StatusId') ?></th>
                            <th><?= __('CrmOrderStatus Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->crmhome as $crmhome) : ?>
                        <tr>
                            <td><?= h($crmhome->id) ?></td>
                            <td><?= h($crmhome->customer_id) ?></td>
                            <td><?= h($crmhome->cp_expiredate) ?></td>
                            <td><?= h($crmhome->cp_paymentTerms) ?></td>
                            <td><?= h($crmhome->cp_createDate) ?></td>
                            <td><?= h($crmhome->cp_createUser) ?></td>
                            <td><?= h($crmhome->cp_lastModifyDate) ?></td>
                            <td><?= h($crmhome->cp_lastModifyUser) ?></td>
                            <td><?= h($crmhome->cp_statusId) ?></td>
                            <td><?= h($crmhome->crmOrderStatus_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Crmhome', 'action' => 'view', $crmhome->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Crmhome', 'action' => 'edit', $crmhome->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Crmhome', 'action' => 'delete', $crmhome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmhome->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Customerbillings') ?></h4>
                <?php if (!empty($customer->customerbillings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cb Firstname') ?></th>
                            <th><?= __('Cb Lastname') ?></th>
                            <th><?= __('Cb Address') ?></th>
                            <th><?= __('Cb Phone') ?></th>
                            <th><?= __('Cb Mobile') ?></th>
                            <th><?= __('Customer Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->customerbillings as $customerbillings) : ?>
                        <tr>
                            <td><?= h($customerbillings->id) ?></td>
                            <td><?= h($customerbillings->cb_firstname) ?></td>
                            <td><?= h($customerbillings->cb_lastname) ?></td>
                            <td><?= h($customerbillings->cb_address) ?></td>
                            <td><?= h($customerbillings->cb_phone) ?></td>
                            <td><?= h($customerbillings->cb_mobile) ?></td>
                            <td><?= h($customerbillings->customer_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Customerbillings', 'action' => 'view', $customerbillings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Customerbillings', 'action' => 'edit', $customerbillings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customerbillings', 'action' => 'delete', $customerbillings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerbillings->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Salesorder') ?></h4>
                <?php if (!empty($customer->salesorder)) : ?>
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
                        <?php foreach ($customer->salesorder as $salesorder) : ?>
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
