<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socomment $socomment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Socomment'), ['action' => 'edit', $socomment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Socomment'), ['action' => 'delete', $socomment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socomment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Socomments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Socomment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="socomments view content">
            <h3><?= h($socomment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Salesorder') ?></th>
                    <td><?= $socomment->has('salesorder') ? $this->Html->link($socomment->salesorder->id, ['controller' => 'Salesorder', 'action' => 'view', $socomment->salesorder->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($socomment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sc Userid') ?></th>
                    <td><?= $this->Number->format($socomment->sc_userid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sc ParentId') ?></th>
                    <td><?= $this->Number->format($socomment->sc_parentId) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Sc Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($socomment->sc_content)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Sc Attachment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($socomment->sc_attachment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
