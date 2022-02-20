<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accounttag $accounttag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accounttag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accounttag->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Accounttags'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accounttags form content">
            <?= $this->Form->create($accounttag) ?>
            <fieldset>
                <legend><?= __('Edit Accounttag') ?></legend>
                <?php
                    echo $this->Form->control('at_name');
                    echo $this->Form->control('at_applicability');
                    echo $this->Form->control('at_color');
                    echo $this->Form->control('at_active');
                    echo $this->Form->control('at_createdDate');
                    echo $this->Form->control('at_createUser');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
