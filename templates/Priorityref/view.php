<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Priorityref $priorityref
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Priorityref'), ['action' => 'edit', $priorityref->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Priorityref'), ['action' => 'delete', $priorityref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $priorityref->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Priorityref'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Priorityref'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="priorityref view content">
            <h3><?= h($priorityref->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pr Name') ?></th>
                    <td><?= h($priorityref->pr_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($priorityref->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Pr Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($priorityref->pr_description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
