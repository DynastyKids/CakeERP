<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accountmessage $accountmessage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Accountmessage'), ['action' => 'edit', $accountmessage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Accountmessage'), ['action' => 'delete', $accountmessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountmessage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accountmessages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Accountmessage'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountmessages view content">
            <h3><?= h($accountmessage->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Am Attachment') ?></th>
                    <td><?= h($accountmessage->am_attachment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accountmessage->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Am Senderid') ?></th>
                    <td><?= $this->Number->format($accountmessage->am_senderid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Am Receiverid') ?></th>
                    <td><?= $this->Number->format($accountmessage->am_receiverid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Am Parentid') ?></th>
                    <td><?= $this->Number->format($accountmessage->am_parentid) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Am Title') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($accountmessage->am_title)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Am Contents') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($accountmessage->am_contents)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Am AttsByLink') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($accountmessage->am_attsByLink)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
