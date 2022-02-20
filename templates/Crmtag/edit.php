<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Crmtag $crmtag
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $crmtag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $crmtag->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Crmtag'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="crmtag form content">
            <?= $this->Form->create($crmtag) ?>
            <fieldset>
                <legend><?= __('Edit Crmtag') ?></legend>
                <?php
                    echo $this->Form->control('ct_name');
                    echo $this->Form->control('ct_color');
                    echo $this->Form->control('ct_creator');
                    echo $this->Form->control('ct_createTime');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
