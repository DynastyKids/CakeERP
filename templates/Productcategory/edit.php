<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Productcategory $productcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productcategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productcategory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Productcategory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productcategory form content">
            <?= $this->Form->create($productcategory) ?>
            <fieldset>
                <legend><?= __('Edit Productcategory') ?></legend>
                <?php
                    echo $this->Form->control('pc_name');
                    echo $this->Form->control('pc_describe');
                    echo $this->Form->control('pc_available');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
