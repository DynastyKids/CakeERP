<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 * @var string[]|\Cake\Collection\CollectionInterface $staffGroups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $staff->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffs form content">
            <?= $this->Form->create($staff) ?>
            <fieldset>
                <legend><?= __('Edit Staff') ?></legend>
                <?php
                    echo $this->Form->control('sf_Firstname');
                    echo $this->Form->control('sf_Lastname');
                    echo $this->Form->control('sf_address');
                    echo $this->Form->control('sf_email');
                    echo $this->Form->control('sf_password');
                    echo $this->Form->control('sf_createTime');
                    echo $this->Form->control('sf_lastLogin');
                    echo $this->Form->control('sf_role');
                    echo $this->Form->control('sf_phone');
                    echo $this->Form->control('sf_mobile');
                    echo $this->Form->control('sf_jobTitle');
                    echo $this->Form->control('sf_website');
                    echo $this->Form->control('sf_taxID');
                    echo $this->Form->control('sf_tags');
                    echo $this->Form->control('sf_token');
                    echo $this->Form->control('sf_authkey');
                    echo $this->Form->control('staff_groups_id', ['options' => $staffGroups, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
