<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Newsletters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="newsletters form content">
            <?= $this->Form->create($newsletter) ?>
            <fieldset>
                <legend><?= __('Add Newsletter') ?></legend>
                <?php
                    echo $this->Form->control('nl_title');
                    echo $this->Form->control('nl_contents');
                    echo $this->Form->control('nl_attachments');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
