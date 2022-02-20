<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pointofsale $pointofsale
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pointofsale'), ['action' => 'edit', $pointofsale->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pointofsale'), ['action' => 'delete', $pointofsale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pointofsale->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pointofsale'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pointofsale'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pointofsale view content">
            <h3><?= h($pointofsale->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pointofsale->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos Userid') ?></th>
                    <td><?= $this->Number->format($pointofsale->pos_userid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos Opentime') ?></th>
                    <td><?= $this->Number->format($pointofsale->pos_opentime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos Endtime') ?></th>
                    <td><?= $this->Number->format($pointofsale->pos_endtime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos Openamount') ?></th>
                    <td><?= $this->Number->format($pointofsale->pos_openamount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos SessionAmount') ?></th>
                    <td><?= $this->Number->format($pointofsale->pos_sessionAmount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pos Endamount') ?></th>
                    <td><?= $this->Number->format($pointofsale->pos_endamount) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Pos Products') ?></h4>
                <?php if (!empty($pointofsale->pos_products)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pointofsale Id') ?></th>
                            <th><?= __('Products Id') ?></th>
                            <th><?= __('Pos Email') ?></th>
                            <th><?= __('Pos Mobile') ?></th>
                            <th><?= __('Pos UnitPrice') ?></th>
                            <th><?= __('Pos DiscountRate') ?></th>
                            <th><?= __('Pos DiscountAmount') ?></th>
                            <th><?= __('Pos Count') ?></th>
                            <th><?= __('Pos ActualPrice') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pointofsale->pos_products as $posProducts) : ?>
                        <tr>
                            <td><?= h($posProducts->id) ?></td>
                            <td><?= h($posProducts->pointofsale_id) ?></td>
                            <td><?= h($posProducts->products_id) ?></td>
                            <td><?= h($posProducts->pos_email) ?></td>
                            <td><?= h($posProducts->pos_mobile) ?></td>
                            <td><?= h($posProducts->pos_unitPrice) ?></td>
                            <td><?= h($posProducts->pos_discountRate) ?></td>
                            <td><?= h($posProducts->pos_discountAmount) ?></td>
                            <td><?= h($posProducts->pos_count) ?></td>
                            <td><?= h($posProducts->pos_actualPrice) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PosProducts', 'action' => 'view', $posProducts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PosProducts', 'action' => 'edit', $posProducts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PosProducts', 'action' => 'delete', $posProducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posProducts->id)]) ?>
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
