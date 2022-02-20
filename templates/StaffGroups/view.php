<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StaffGroup $staffGroup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Staff Group'), ['action' => 'edit', $staffGroup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Staff Group'), ['action' => 'delete', $staffGroup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staffGroup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Staff Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Staff Group'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffGroups view content">
            <h3><?= h($staffGroup->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Staff Groupscol') ?></th>
                    <td><?= h($staffGroup->staff_groupscol) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($staffGroup->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Sg Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($staffGroup->sg_name)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Sg ApplyBranch') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($staffGroup->sg_applyBranch)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
