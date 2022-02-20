<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Soproduct $soproduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Soproduct'), ['action' => 'edit', $soproduct->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Soproduct'), ['action' => 'delete', $soproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $soproduct->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Soproducts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Soproduct'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="soproducts view content">
            <h3><?= h($soproduct->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Salesorder') ?></th>
                    <td><?= $soproduct->has('salesorder') ? $this->Html->link($soproduct->salesorder->id, ['controller' => 'Salesorder', 'action' => 'view', $soproduct->salesorder->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $soproduct->has('product') ? $this->Html->link($soproduct->product->id, ['controller' => 'Products', 'action' => 'view', $soproduct->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp ShippingMethod') ?></th>
                    <td><?= h($soproduct->sp_shippingMethod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp ShippingNumber') ?></th>
                    <td><?= h($soproduct->sp_shippingNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp Currency') ?></th>
                    <td><?= h($soproduct->sp_currency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp Batch') ?></th>
                    <td><?= h($soproduct->sp_batch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp Lot') ?></th>
                    <td><?= h($soproduct->sp_lot) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($soproduct->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp UnitPrice') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_unitPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp Quantity') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp Tax') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_tax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp Subtotal') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp CurrencyRate') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_currencyRate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp Discount') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp ReduceSubtotal') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_reduceSubtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp ReductTax') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_reductTax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp QtyDelivered') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_qtyDelivered) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp QtyInvoiced') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_qtyInvoiced) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp Salesman') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_salesman) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sp Status') ?></th>
                    <td><?= $this->Number->format($soproduct->sp_status) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
