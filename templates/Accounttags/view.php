<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accounttag $accounttag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Accounttag'), ['action' => 'edit', $accounttag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Accounttag'), ['action' => 'delete', $accounttag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accounttag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accounttags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Accounttag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accounttags view content">
            <h3><?= h($accounttag->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('At Applicability') ?></th>
                    <td><?= h($accounttag->at_applicability) ?></td>
                </tr>
                <tr>
                    <th><?= __('At Color') ?></th>
                    <td><?= h($accounttag->at_color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accounttag->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('At Active') ?></th>
                    <td><?= $this->Number->format($accounttag->at_active) ?></td>
                </tr>
                <tr>
                    <th><?= __('At CreatedDate') ?></th>
                    <td><?= $this->Number->format($accounttag->at_createdDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('At CreateUser') ?></th>
                    <td><?= $this->Number->format($accounttag->at_createUser) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('At Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($accounttag->at_name)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
