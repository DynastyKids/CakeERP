<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendarevent $calendarevent
 * @var \Cake\Collection\CollectionInterface|string[] $staffs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Calendarevents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calendarevents form content">
            <?= $this->Form->create($calendarevent) ?>
            <fieldset>
                <legend><?= __('Add Calendarevent') ?></legend>
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
