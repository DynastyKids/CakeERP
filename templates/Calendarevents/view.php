<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendarevent $calendarevent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Calendarevent'), ['action' => 'edit', $calendarevent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Calendarevent'), ['action' => 'delete', $calendarevent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calendarevent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Calendarevents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Calendarevent'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calendarevents view content">
            <h3><?= h($calendarevent->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Staff') ?></th>
                    <td><?= $calendarevent->has('staff') ? $this->Html->link($calendarevent->staff->id, ['controller' => 'Staffs', 'action' => 'view', $calendarevent->staff->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($calendarevent->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ev Type') ?></th>
                    <td><?= $this->Number->format($calendarevent->ev_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ev Priority') ?></th>
                    <td><?= $this->Number->format($calendarevent->ev_priority) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ev AlarmTime') ?></th>
                    <td><?= $this->Number->format($calendarevent->ev_alarmTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ev EventTime') ?></th>
                    <td><?= $this->Number->format($calendarevent->ev_eventTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ev Duration') ?></th>
                    <td><?= $this->Number->format($calendarevent->ev_duration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ev CreateUser') ?></th>
                    <td><?= $this->Number->format($calendarevent->ev_createUser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ev CreateTime') ?></th>
                    <td><?= $this->Number->format($calendarevent->ev_createTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ev LastupdateUser') ?></th>
                    <td><?= $this->Number->format($calendarevent->ev_lastupdateUser) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ev LastupdateTime') ?></th>
                    <td><?= $this->Number->format($calendarevent->ev_lastupdateTime) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Ev Title') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($calendarevent->ev_title)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Ev Detail') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($calendarevent->ev_detail)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Ev InvolvedUsers') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($calendarevent->ev_involvedUsers)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Ev Location') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($calendarevent->ev_location)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
