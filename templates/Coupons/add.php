<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coupon $coupon
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Coupons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="coupons form content">
            <?= $this->Form->create($coupon) ?>
            <fieldset>
                <legend><?= __('Add Coupon') ?></legend>
                <?php
                    echo $this->Form->control('cp_code');
                    echo $this->Form->control('cp_startTime');
                    echo $this->Form->control('cp_endTime');
                    echo $this->Form->control('cp_deducepercent');
                    echo $this->Form->control('cp_deduceamount');
                    echo $this->Form->control('cp_newuser');
                    echo $this->Form->control('cp_applyprod');
                    echo $this->Form->control('cp_amount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
