<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accountmessage $accountmessage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Accountmessages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountmessages form content">
            <?= $this->Form->create($accountmessage) ?>
            <fieldset>
                <legend><?= __('Add Accountmessage') ?></legend>
                <?php
                    echo $this->Form->control('am_senderid');
                    echo $this->Form->control('am_receiverid');
                    echo $this->Form->control('am_title');
                    echo $this->Form->control('am_contents');
                    echo $this->Form->control('am_parentid');
                    echo $this->Form->control('am_attachment');
                    echo $this->Form->control('am_attsByLink');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
