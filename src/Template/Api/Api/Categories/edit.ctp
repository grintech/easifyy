<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $category->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Merchant Product Categories'), ['controller' => 'MerchantProductCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Merchant Product Category'), ['controller' => 'MerchantProductCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Product Categories'), ['controller' => 'ProductCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product Category'), ['controller' => 'ProductCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Edit Category') ?></legend>
        <?php
            echo $this->Form->control('parent_id', ['options' => $parentCategories, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('slug');
            echo $this->Form->control('description');
            echo $this->Form->control('image');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
