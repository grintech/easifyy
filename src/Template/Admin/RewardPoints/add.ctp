<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RewardPoint $rewardPoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Reward Points'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rewardPoints form large-9 medium-8 columns content">
    <?= $this->Form->create($rewardPoint) ?>
    <fieldset>
        <legend><?= __('Add Reward Point') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('coins');
            echo $this->Form->control('date_last_change');
            echo $this->Form->control('date_added');
            echo $this->Form->control('date_expire');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
