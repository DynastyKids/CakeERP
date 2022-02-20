<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sostatus $sostatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sostatus'), ['action' => 'edit', $sostatus->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sostatus'), ['action' => 'delete', $sostatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sostatus->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sostatus'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sostatus'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sostatus view content">
            <h3><?= h($sostatus->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ss Name') ?></th>
                    <td><?= h($sostatus->ss_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sostatus->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Ss Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sostatus->ss_description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
