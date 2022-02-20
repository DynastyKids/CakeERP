<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newslettersub $newslettersub
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Newslettersub'), ['action' => 'edit', $newslettersub->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Newslettersub'), ['action' => 'delete', $newslettersub->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newslettersub->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Newslettersubs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Newslettersub'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newslettersubs view content">
            <h3><?= h($newslettersub->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($newslettersub->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nl Group') ?></th>
                    <td><?= $this->Number->format($newslettersub->nl_group) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nl Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($newslettersub->nl_name)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Nl Email') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($newslettersub->nl_email)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
