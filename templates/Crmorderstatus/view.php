<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmorderstatus $crmorderstatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Crmorderstatus'), ['action' => 'edit', $crmorderstatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Crmorderstatus'), ['action' => 'delete', $crmorderstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmorderstatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Crmorderstatus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Crmorderstatus'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmorderstatus view content">
            <h3><?= h($crmorderstatus->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cs Name') ?></th>
                    <td><?= h($crmorderstatus->cs_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($crmorderstatus->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cs Code') ?></th>
                    <td><?= $this->Number->format($crmorderstatus->cs_code) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Cs Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($crmorderstatus->cs_description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
