<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Soproduct[]|\Cake\Collection\CollectionInterface $soproducts
 */
?>
<div class="soproducts index content">
    <?= $this->Html->link(__('New Soproduct'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Soproducts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('salesOrder_id') ?></th>
                    <th><?= $this->Paginator->sort('products_id') ?></th>
                    <th><?= $this->Paginator->sort('sp_shippingMethod') ?></th>
                    <th><?= $this->Paginator->sort('sp_shippingNumber') ?></th>
                    <th><?= $this->Paginator->sort('sp_unitPrice') ?></th>
                    <th><?= $this->Paginator->sort('sp_quantity') ?></th>
                    <th><?= $this->Paginator->sort('sp_tax') ?></th>
                    <th><?= $this->Paginator->sort('sp_subtotal') ?></th>
                    <th><?= $this->Paginator->sort('sp_currency') ?></th>
                    <th><?= $this->Paginator->sort('sp_currencyRate') ?></th>
                    <th><?= $this->Paginator->sort('sp_discount') ?></th>
                    <th><?= $this->Paginator->sort('sp_reduceSubtotal') ?></th>
                    <th><?= $this->Paginator->sort('sp_reductTax') ?></th>
                    <th><?= $this->Paginator->sort('sp_qtyDelivered') ?></th>
                    <th><?= $this->Paginator->sort('sp_qtyInvoiced') ?></th>
                    <th><?= $this->Paginator->sort('sp_salesman') ?></th>
                    <th><?= $this->Paginator->sort('sp_status') ?></th>
                    <th><?= $this->Paginator->sort('sp_batch') ?></th>
                    <th><?= $this->Paginator->sort('sp_lot') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($soproducts as $soproduct): ?>
                <tr>
                    <td><?= $this->Number->format($soproduct->id) ?></td>
                    <td><?= $soproduct->has('salesorder') ? $this->Html->link($soproduct->salesorder->id, ['controller' => 'Salesorder', 'action' => 'view', $soproduct->salesorder->id]) : '' ?></td>
                    <td><?= $soproduct->has('product') ? $this->Html->link($soproduct->product->id, ['controller' => 'Products', 'action' => 'view', $soproduct->product->id]) : '' ?></td>
                    <td><?= h($soproduct->sp_shippingMethod) ?></td>
                    <td><?= h($soproduct->sp_shippingNumber) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_unitPrice) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_quantity) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_tax) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_subtotal) ?></td>
                    <td><?= h($soproduct->sp_currency) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_currencyRate) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_discount) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_reduceSubtotal) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_reductTax) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_qtyDelivered) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_qtyInvoiced) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_salesman) ?></td>
                    <td><?= $this->Number->format($soproduct->sp_status) ?></td>
                    <td><?= h($soproduct->sp_batch) ?></td>
                    <td><?= h($soproduct->sp_lot) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $soproduct->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $soproduct->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $soproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $soproduct->id)]) ?>
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
