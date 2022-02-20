<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendarevent[]|\Cake\Collection\CollectionInterface $calendarevents
 */
?>
<div class="calendarevents index content">
    <?= $this->Html->link(__('New Calendarevent'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Calendarevents') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('staffs_id') ?></th>
                    <th><?= $this->Paginator->sort('ev_type') ?></th>
                    <th><?= $this->Paginator->sort('ev_priority') ?></th>
                    <th><?= $this->Paginator->sort('ev_alarmTime') ?></th>
                    <th><?= $this->Paginator->sort('ev_eventTime') ?></th>
                    <th><?= $this->Paginator->sort('ev_duration') ?></th>
                    <th><?= $this->Paginator->sort('ev_createUser') ?></th>
                    <th><?= $this->Paginator->sort('ev_createTime') ?></th>
                    <th><?= $this->Paginator->sort('ev_lastupdateUser') ?></th>
                    <th><?= $this->Paginator->sort('ev_lastupdateTime') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($calendarevents as $calendarevent): ?>
                <tr>
                    <td><?= $this->Number->format($calendarevent->id) ?></td>
                    <td><?= $calendarevent->has('staff') ? $this->Html->link($calendarevent->staff->id, ['controller' => 'Staffs', 'action' => 'view', $calendarevent->staff->id]) : '' ?></td>
                    <td><?= $this->Number->format($calendarevent->ev_type) ?></td>
                    <td><?= $this->Number->format($calendarevent->ev_priority) ?></td>
                    <td><?= $this->Number->format($calendarevent->ev_alarmTime) ?></td>
                    <td><?= $this->Number->format($calendarevent->ev_eventTime) ?></td>
                    <td><?= $this->Number->format($calendarevent->ev_duration) ?></td>
                    <td><?= $this->Number->format($calendarevent->ev_createUser) ?></td>
                    <td><?= $this->Number->format($calendarevent->ev_createTime) ?></td>
                    <td><?= $this->Number->format($calendarevent->ev_lastupdateUser) ?></td>
                    <td><?= $this->Number->format($calendarevent->ev_lastupdateTime) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $calendarevent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calendarevent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calendarevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendarevent->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
