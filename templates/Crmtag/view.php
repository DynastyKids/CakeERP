<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmtag $crmtag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Crmtag'), ['action' => 'edit', $crmtag->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Crmtag'), ['action' => 'delete', $crmtag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmtag->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Crmtag'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Crmtag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmtag view content">
            <h3><?= h($crmtag->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ct Name') ?></th>
                    <td><?= h($crmtag->ct_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ct Color') ?></th>
                    <td><?= h($crmtag->ct_color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($crmtag->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ct Creator') ?></th>
                    <td><?= $this->Number->format($crmtag->ct_creator) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ct CreateTime') ?></th>
                    <td><?= $this->Number->format($crmtag->ct_createTime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
