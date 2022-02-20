<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendarevent $calendarevent
 * @var string[]|\Cake\Collection\CollectionInterface $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $calendarevent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $calendarevent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Calendarevents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calendarevents form content">
            <?= $this->Form->create($calendarevent) ?>
            <fieldset>
                <legend><?= __('Edit Calendarevent') ?></legend>
                <?php
                    echo $this->Form->control('staffs_id', ['options' => $staffs]);
                    echo $this->Form->control('ev_title');
                    echo $this->Form->control('ev_detail');
                    echo $this->Form->control('ev_type');
                    echo $this->Form->control('ev_priority');
                    echo $this->Form->control('ev_involvedUsers');
                    echo $this->Form->control('ev_alarmTime');
                    echo $this->Form->control('ev_location');
                    echo $this->Form->control('ev_eventTime');
                    echo $this->Form->control('ev_duration');
                    echo $this->Form->control('ev_createUser');
                    echo $this->Form->control('ev_createTime');
                    echo $this->Form->control('ev_lastupdateUser');
                    echo $this->Form->control('ev_lastupdateTime');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
