<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <div class="row">
        <div class="col-6">
            <h2 class="content-title">
                <?= __('Users') ?>
            </h2>
        </div>
        <div class="col-6 text-right">
            <?= $this->Html->link('<i class="fas fa-plus"></i>', ['action' => 'add'], ['class' => 'btn  btn-sm btn-success', 'escape' => false]) ?>
        </div>
    </div>


    <div class="card">
        <table id="user-table" class="table table-no-outer-padding table-hover table-responsive">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Username') ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    <th><?= $this->Paginator->sort('Status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->status) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('<i class="fas fa-eye"></i>', ['action' => 'view', $user->id], ['class' => 'btn  btn-sm', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="fas fa-edit"></i>', ['action' => 'edit', $user->id], ['class' => 'btn  btn-sm btn-primary', 'escape' => false ]) ?>
                        <?= $this->Form->postLink('<i class="fas fa-trash-alt"></i>', ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-sm btn-danger', 'escape' => false]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
