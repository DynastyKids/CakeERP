<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index content">
    <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('p_barcode') ?></th>
                    <th><?= $this->Paginator->sort('p_group') ?></th>
                    <th><?= $this->Paginator->sort('p_onlinePrice') ?></th>
                    <th><?= $this->Paginator->sort('p_retailPrice') ?></th>
                    <th><?= $this->Paginator->sort('p_cubic_long') ?></th>
                    <th><?= $this->Paginator->sort('p_cubit_width') ?></th>
                    <th><?= $this->Paginator->sort('p_cubic_height') ?></th>
                    <th><?= $this->Paginator->sort('p_publish') ?></th>
                    <th><?= $this->Paginator->sort('p_hide') ?></th>
                    <th><?= $this->Paginator->sort('p_totalquantity') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= h($product->p_barcode) ?></td>
                    <td><?= h($product->p_group) ?></td>
                    <td><?= $this->Number->format($product->p_onlinePrice) ?></td>
                    <td><?= $this->Number->format($product->p_retailPrice) ?></td>
                    <td><?= $this->Number->format($product->p_cubic_long) ?></td>
                    <td><?= $this->Number->format($product->p_cubit_width) ?></td>
                    <td><?= $this->Number->format($product->p_cubic_height) ?></td>
                    <td><?= $this->Number->format($product->p_publish) ?></td>
                    <td><?= $this->Number->format($product->p_hide) ?></td>
                    <td><?= $this->Number->format($product->p_totalquantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
