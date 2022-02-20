<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffs view content">
            <h3><?= h($staff->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sf Email') ?></th>
                    <td><?= h($staff->sf_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sf Password') ?></th>
                    <td><?= h($staff->sf_password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sf Role') ?></th>
                    <td><?= h($staff->sf_role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sf Phone') ?></th>
                    <td><?= h($staff->sf_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sf Mobile') ?></th>
                    <td><?= h($staff->sf_mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sf TaxID') ?></th>
                    <td><?= h($staff->sf_taxID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sf Token') ?></th>
                    <td><?= h($staff->sf_token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sf Authkey') ?></th>
                    <td><?= h($staff->sf_authkey) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Group') ?></th>
                    <td><?= $staff->has('staff_group') ? $this->Html->link($staff->staff_group->id, ['controller' => 'StaffGroups', 'action' => 'view', $staff->staff_group->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($staff->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sf CreateTime') ?></th>
                    <td><?= $this->Number->format($staff->sf_createTime) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sf LastLogin') ?></th>
                    <td><?= $this->Number->format($staff->sf_lastLogin) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Sf Firstname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($staff->sf_Firstname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Sf Lastname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($staff->sf_Lastname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Sf Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($staff->sf_address)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Sf JobTitle') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($staff->sf_jobTitle)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Sf Website') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($staff->sf_website)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Sf Tags') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($staff->sf_tags)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
