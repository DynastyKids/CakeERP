<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CrmhomeHasCrmhome $crmhomeHasCrmhome
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Crmhome Has Crmhome'), ['action' => 'edit', $crmhomeHasCrmhome->crmHome_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Crmhome Has Crmhome'), ['action' => 'delete', $crmhomeHasCrmhome->crmHome_id], ['confirm' => __('Are you sure you want to delete # {0}?', $crmhomeHasCrmhome->crmHome_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Crmhome Has Crmhome'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Crmhome Has Crmhome'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmhomeHasCrmhome view content">
            <h3><?= h($crmhomeHasCrmhome->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Crmhome') ?></th>
                    <td><?= $crmhomeHasCrmhome->has('crmhome') ? $this->Html->link($crmhomeHasCrmhome->crmhome->id, ['controller' => 'Crmhome', 'action' => 'view', $crmhomeHasCrmhome->crmhome->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('CrmHome Id1') ?></th>
                    <td><?= $this->Number->format($crmhomeHasCrmhome->crmHome_id1) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
