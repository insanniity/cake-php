<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users view content">
    <div class="row">
        <div class="col-6">
            <h2 class="content-title">
                <?= __('User info') ?>
            </h2>
        </div>
        <div class="col-6 text-right">
            <?= $this->Html->link('<i class="fas fa-edit"></i>', ['action' => 'edit', $user->id], ['class' => 'btn  btn-sm btn-primary', 'escape' => false ]) ?>
            <?= $this->Form->postLink('<i class="fas fa-trash-alt"></i>', ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-sm btn-danger', 'escape' => false]) ?>
            <?= $this->Html->link('<i class="fas fa-align-justify"></i>', ['action' => 'index'], ['class' => 'btn  btn-sm', 'escape' => false]) ?>
            <?= $this->Html->link('<i class="fas fa-plus"></i>', ['action' => 'add'], ['class' => 'btn  btn-sm btn-success', 'escape' => false]) ?>
        </div>
    </div>

    <div class="card">
        <table class="table table-no-outer-padding table-hover table-responsive">
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Nome') ?></th>
                <td><?= h($user->name) ?></td>
            </tr>
            <tr>
                <th><?= __('Usuario') ?></th>
                <td><?= h($user->username) ?></td>
            </tr>
            <tr>
                <th><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <th><?= __('Status') ?></th>
                <td><?= h($user->status) ?></td>
            </tr>
            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($user->created) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($user->modified) ?></td>
            </tr>
        </table>
    </div>
</div>



