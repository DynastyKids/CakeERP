<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles view content">
            <h3><?= h($article->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($article->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('A PublishTime') ?></th>
                    <td><?= $this->Number->format($article->a_publishTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('A LastModifyTime') ?></th>
                    <td><?= $this->Number->format($article->a_lastModifyTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('A Status') ?></th>
                    <td><?= $this->Number->format($article->a_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('A Type') ?></th>
                    <td><?= $this->Number->format($article->a_type) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('A Title') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->a_title)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('A Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->a_content)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
