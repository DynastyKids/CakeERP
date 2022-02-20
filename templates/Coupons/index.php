<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coupon[]|\Cake\Collection\CollectionInterface $coupons
 */
?>
<div class="coupons index content">
    <?= $this->Html->link(__('New Coupon'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Coupons') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cp_code') ?></th>
                    <th><?= $this->Paginator->sort('cp_startTime') ?></th>
                    <th><?= $this->Paginator->sort('cp_endTime') ?></th>
                    <th><?= $this->Paginator->sort('cp_deducepercent') ?></th>
                    <th><?= $this->Paginator->sort('cp_deduceamount') ?></th>
                    <th><?= $this->Paginator->sort('cp_newuser') ?></th>
                    <th><?= $this->Paginator->sort('cp_amount') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coupons as $coupon): ?>
                <tr>
                    <td><?= $this->Number->format($coupon->id) ?></td>
                    <td><?= h($coupon->cp_code) ?></td>
                    <td><?= $this->Number->format($coupon->cp_startTime) ?></td>
                    <td><?= $this->Number->format($coupon->cp_endTime) ?></td>
                    <td><?= $this->Number->format($coupon->cp_deducepercent) ?></td>
                    <td><?= $this->Number->format($coupon->cp_deduceamount) ?></td>
                    <td><?= $this->Number->format($coupon->cp_newuser) ?></td>
                    <td><?= $this->Number->format($coupon->cp_amount) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coupon->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coupon->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coupon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
