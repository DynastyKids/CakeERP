<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ordercomment $ordercomment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ordercomment'), ['action' => 'edit', $ordercomment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ordercomment'), ['action' => 'delete', $ordercomment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordercomment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ordercomments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ordercomment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ordercomments view content">
            <h3><?= h($ordercomment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Purchaseorder') ?></th>
                    <td><?= $ordercomment->has('purchaseorder') ? $this->Html->link($ordercomment->purchaseorder->id, ['controller' => 'Purchaseorder', 'action' => 'view', $ordercomment->purchaseorder->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Salesorder') ?></th>
                    <td><?= $ordercomment->has('salesorder') ? $this->Html->link($ordercomment->salesorder->id, ['controller' => 'Salesorder', 'action' => 'view', $ordercomment->salesorder->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ordercomment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pc Userid') ?></th>
                    <td><?= $this->Number->format($ordercomment->pc_userid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pc ParentId') ?></th>
                    <td><?= $this->Number->format($ordercomment->pc_parentId) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Pc Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ordercomment->pc_content)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Pc Attachment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ordercomment->pc_attachment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
