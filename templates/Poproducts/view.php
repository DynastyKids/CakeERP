<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poproduct $poproduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Poproduct'), ['action' => 'edit', $poproduct->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Poproduct'), ['action' => 'delete', $poproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poproduct->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Poproducts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Poproduct'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="poproducts view content">
            <h3><?= h($poproduct->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Purchaseorder') ?></th>
                    <td><?= $poproduct->has('purchaseorder') ? $this->Html->link($poproduct->purchaseorder->id, ['controller' => 'Purchaseorder', 'action' => 'view', $poproduct->purchaseorder->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $poproduct->has('product') ? $this->Html->link($poproduct->product->id, ['controller' => 'Products', 'action' => 'view', $poproduct->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp Currency') ?></th>
                    <td><?= h($poproduct->pp_currency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($poproduct->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp Quantity') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp PlannedDelivery') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_plannedDelivery) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp ProductId') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_productId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp Pricepunit') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_pricepunit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp Subtotal') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_subtotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp Tax') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_tax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp Total') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp ConvertRate') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_convertRate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp Status') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp CreateUser') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_createUser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pp CreateDate') ?></th>
                    <td><?= $this->Number->format($poproduct->pp_createDate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
