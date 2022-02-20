<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Branch'), ['action' => 'edit', $branch->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Branch'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Branches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Branch'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="branches view content">
            <h3><?= h($branch->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Br Abn') ?></th>
                    <td><?= h($branch->br_abn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Br Phone') ?></th>
                    <td><?= h($branch->br_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Br Email') ?></th>
                    <td><?= h($branch->br_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Br Currency') ?></th>
                    <td><?= h($branch->br_currency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($branch->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('So PickupFlag') ?></th>
                    <td><?= $this->Number->format($branch->so_pickupFlag) ?></td>
                </tr>
                <tr>
                    <th><?= __('In LocationFlag') ?></th>
                    <td><?= $this->Number->format($branch->in_locationFlag) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Br Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($branch->br_name)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Br Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($branch->br_address)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Br Logo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($branch->br_logo)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
