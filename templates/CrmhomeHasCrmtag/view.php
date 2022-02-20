<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrmhomeHasCrmtag $crmhomeHasCrmtag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Crmhome Has Crmtag'), ['action' => 'edit', $crmhomeHasCrmtag->crmHome_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Crmhome Has Crmtag'), ['action' => 'delete', $crmhomeHasCrmtag->crmHome_id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmhomeHasCrmtag->crmHome_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Crmhome Has Crmtag'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Crmhome Has Crmtag'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmhomeHasCrmtag view content">
            <h3><?= h($crmhomeHasCrmtag->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Crmhome') ?></th>
                    <td><?= $crmhomeHasCrmtag->has('crmhome') ? $this->Html->link($crmhomeHasCrmtag->crmhome->id, ['controller' => 'Crmhome', 'action' => 'view', $crmhomeHasCrmtag->crmhome->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Crmtag') ?></th>
                    <td><?= $crmhomeHasCrmtag->has('crmtag') ? $this->Html->link($crmhomeHasCrmtag->crmtag->id, ['controller' => 'Crmtag', 'action' => 'view', $crmhomeHasCrmtag->crmtag->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
