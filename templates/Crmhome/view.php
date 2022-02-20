<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmhome $crmhome
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Crmhome'), ['action' => 'edit', $crmhome->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Crmhome'), ['action' => 'delete', $crmhome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmhome->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Crmhome'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Crmhome'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmhome view content">
            <h3><?= h($crmhome->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $crmhome->has('customer') ? $this->Html->link($crmhome->customer->id, ['controller' => 'Customers', 'action' => 'view', $crmhome->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Crmorderstatus') ?></th>
                    <td><?= $crmhome->has('crmorderstatus') ? $this->Html->link($crmhome->crmorderstatus->id, ['controller' => 'Crmorderstatus', 'action' => 'view', $crmhome->crmorderstatus->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($crmhome->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp Expiredate') ?></th>
                    <td><?= $this->Number->format($crmhome->cp_expiredate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp PaymentTerms') ?></th>
                    <td><?= $this->Number->format($crmhome->cp_paymentTerms) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp CreateDate') ?></th>
                    <td><?= $this->Number->format($crmhome->cp_createDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp CreateUser') ?></th>
                    <td><?= $this->Number->format($crmhome->cp_createUser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp LastModifyDate') ?></th>
                    <td><?= $this->Number->format($crmhome->cp_lastModifyDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp LastModifyUser') ?></th>
                    <td><?= $this->Number->format($crmhome->cp_lastModifyUser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp StatusId') ?></th>
                    <td><?= $this->Number->format($crmhome->cp_statusId) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
