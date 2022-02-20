<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Newsletter'), ['action' => 'edit', $newsletter->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Newsletter'), ['action' => 'delete', $newsletter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletter->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Newsletters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Newsletter'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newsletters view content">
            <h3><?= h($newsletter->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($newsletter->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nl Title') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($newsletter->nl_title)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Nl Contents') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($newsletter->nl_contents)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Nl Attachments') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($newsletter->nl_attachments)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
