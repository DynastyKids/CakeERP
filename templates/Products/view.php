<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('P Barcode') ?></th>
                    <td><?= h($product->p_barcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('P Group') ?></th>
                    <td><?= h($product->p_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($product->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('P OnlinePrice') ?></th>
                    <td><?= $this->Number->format($product->p_onlinePrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('P RetailPrice') ?></th>
                    <td><?= $this->Number->format($product->p_retailPrice) ?></td>
                </tr>
                <tr>
                    <th><?= __('P Cubic Long') ?></th>
                    <td><?= $this->Number->format($product->p_cubic_long) ?></td>
                </tr>
                <tr>
                    <th><?= __('P Cubit Width') ?></th>
                    <td><?= $this->Number->format($product->p_cubit_width) ?></td>
                </tr>
                <tr>
                    <th><?= __('P Cubic Height') ?></th>
                    <td><?= $this->Number->format($product->p_cubic_height) ?></td>
                </tr>
                <tr>
                    <th><?= __('P Publish') ?></th>
                    <td><?= $this->Number->format($product->p_publish) ?></td>
                </tr>
                <tr>
                    <th><?= __('P Hide') ?></th>
                    <td><?= $this->Number->format($product->p_hide) ?></td>
                </tr>
                <tr>
                    <th><?= __('P Totalquantity') ?></th>
                    <td><?= $this->Number->format($product->p_totalquantity) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('P Sku') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($product->p_sku)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('P PromoGroup') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($product->p_promoGroup)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
