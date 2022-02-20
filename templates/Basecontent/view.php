<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Basecontent $basecontent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Basecontent'), ['action' => 'edit', $basecontent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Basecontent'), ['action' => 'delete', $basecontent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $basecontent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Basecontent'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Basecontent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="basecontent view content">
            <h3><?= h($basecontent->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bc Path') ?></th>
                    <td><?= h($basecontent->bc_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bc String') ?></th>
                    <td><?= h($basecontent->bc_string) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($basecontent->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Bc Details') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($basecontent->bc_details)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
