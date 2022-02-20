<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PosProduct[]|\Cake\Collection\CollectionInterface $posProducts
 */
?>
<div class="posProducts index content">
    <?= $this->Html->link(__('New Pos Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pos Products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pointofsale_id') ?></th>
                    <th><?= $this->Paginator->sort('products_id') ?></th>
                    <th><?= $this->Paginator->sort('pos_email') ?></th>
                    <th><?= $this->Paginator->sort('pos_mobile') ?></th>
                    <th><?= $this->Paginator->sort('pos_unitPrice') ?></th>
                    <th><?= $this->Paginator->sort('pos_discountRate') ?></th>
                    <th><?= $this->Paginator->sort('pos_discountAmount') ?></th>
                    <th><?= $this->Paginator->sort('pos_count') ?></th>
                    <th><?= $this->Paginator->sort('pos_actualPrice') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posProducts as $posProduct): ?>
                <tr>
                    <td><?= $this->Number->format($posProduct->id) ?></td>
                    <td><?= $posProduct->has('pointofsale') ? $this->Html->link($posProduct->pointofsale->id, ['controller' => 'Pointofsale', 'action' => 'view', $posProduct->pointofsale->id]) : '' ?></td>
                    <td><?= $posProduct->has('product') ? $this->Html->link($posProduct->product->id, ['controller' => 'Products', 'action' => 'view', $posProduct->product->id]) : '' ?></td>
                    <td><?= h($posProduct->pos_email) ?></td>
                    <td><?= h($posProduct->pos_mobile) ?></td>
                    <td><?= $this->Number->format($posProduct->pos_unitPrice) ?></td>
                    <td><?= $this->Number->format($posProduct->pos_discountRate) ?></td>
                    <td><?= $this->Number->format($posProduct->pos_discountAmount) ?></td>
                    <td><?= $this->Number->format($posProduct->pos_count) ?></td>
                    <td><?= $this->Number->format($posProduct->pos_actualPrice) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $posProduct->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $posProduct->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $posProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posProduct->id)]) ?>
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
