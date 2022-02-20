<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Basecontent $basecontent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $basecontent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $basecontent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Basecontent'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="basecontent form content">
            <?= $this->Form->create($basecontent) ?>
            <fieldset>
                <legend><?= __('Edit Basecontent') ?></legend>
                <?php
                    echo $this->Form->control('bc_path');
                    echo $this->Form->control('bc_string');
                    echo $this->Form->control('bc_details');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>