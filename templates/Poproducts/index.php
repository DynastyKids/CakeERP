<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poproduct[]|\Cake\Collection\CollectionInterface $poproducts
 */
?>
<div class="poproducts index content">
    <?= $this->Html->link(__('New Poproduct'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Poproducts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('purchaseOrder_id') ?></th>
                    <th><?= $this->Paginator->sort('products_id') ?></th>
                    <th><?= $this->Paginator->sort('pp_quantity') ?></th>
                    <th><?= $this->Paginator->sort('pp_plannedDelivery') ?></th>
                    <th><?= $this->Paginator->sort('pp_productId') ?></th>
                    <th><?= $this->Paginator->sort('pp_pricepunit') ?></th>
                    <th><?= $this->Paginator->sort('pp_subtotal') ?></th>
                    <th><?= $this->Paginator->sort('pp_tax') ?></th>
                    <th><?= $this->Paginator->sort('pp_total') ?></th>
                    <th><?= $this->Paginator->sort('pp_currency') ?></th>
                    <th><?= $this->Paginator->sort('pp_convertRate') ?></th>
                    <th><?= $this->Paginator->sort('pp_status') ?></th>
                    <th><?= $this->Paginator->sort('pp_createUser') ?></th>
                    <th><?= $this->Paginator->sort('pp_createDate') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($poproducts as $poproduct): ?>
                <tr>
                    <td><?= $this->Number->format($poproduct->id) ?></td>
                    <td><?= $poproduct->has('purchaseorder') ? $this->Html->link($poproduct->purchaseorder->id, ['controller' => 'Purchaseorder', 'action' => 'view', $poproduct->purchaseorder->id]) : '' ?></td>
                    <td><?= $poproduct->has('product') ? $this->Html->link($poproduct->product->id, ['controller' => 'Products', 'action' => 'view', $poproduct->product->id]) : '' ?></td>
                    <td><?= $this->Number->format($poproduct->pp_quantity) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_plannedDelivery) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_productId) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_pricepunit) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_subtotal) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_tax) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_total) ?></td>
                    <td><?= h($poproduct->pp_currency) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_convertRate) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_status) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_createUser) ?></td>
                    <td><?= $this->Number->format($poproduct->pp_createDate) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $poproduct->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $poproduct->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $poproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poproduct->id)]) ?>
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
