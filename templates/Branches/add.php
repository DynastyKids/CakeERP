<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Branches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="branches form content">
            <?= $this->Form->create($branch) ?>
            <fieldset>
                <legend><?= __('Add Branch') ?></legend>
                <?php
                    echo $this->Form->control('br_name');
                    echo $this->Form->control('br_abn');
                    echo $this->Form->control('br_address');
                    echo $this->Form->control('br_phone');
                    echo $this->Form->control('br_email');
                    echo $this->Form->control('br_currency');
                    echo $this->Form->control('br_logo');
                    echo $this->Form->control('so_pickupFlag');
                    echo $this->Form->control('in_locationFlag');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
