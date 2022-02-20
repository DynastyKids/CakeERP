<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pointofsale $pointofsale
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pointofsale'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pointofsale form content">
            <?= $this->Form->create($pointofsale) ?>
            <fieldset>
                <legend><?= __('Add Pointofsale') ?></legend>
                <?php
                    echo $this->Form->control('pos_userid');
                    echo $this->Form->control('pos_opentime');
                    echo $this->Form->control('pos_endtime');
                    echo $this->Form->control('pos_openamount');
                    echo $this->Form->control('pos_sessionAmount');
                    echo $this->Form->control('pos_endamount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
