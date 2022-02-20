<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socomment $socomment
 * @var string[]|\Cake\Collection\CollectionInterface $salesorder
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $socomment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $socomment->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Socomments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="socomments form content">
            <?= $this->Form->create($socomment) ?>
            <fieldset>
                <legend><?= __('Edit Socomment') ?></legend>
                <?php
                    echo $this->Form->control('salesOrder_id', ['options' => $salesorder]);
                    echo $this->Form->control('sc_content');
                    echo $this->Form->control('sc_userid');
                    echo $this->Form->control('sc_attachment');
                    echo $this->Form->control('sc_parentId');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
