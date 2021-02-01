<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form content">
    <div class="row">
        <div class="col-6">
            <h2 class="content-title">
                <?= __('Adicionar User') ?>
            </h2>
        </div>
        <div class="col-6 text-right">
            <?= $this->Html->link('<i class="fas fa-align-justify"></i>', ['action' => 'index'], ['class' => 'btn  btn-sm', 'escape' => false]) ?>
        </div>
    </div>

    <div class="card">
        <?= $this->Form->create($user) ?>
            <?php
                echo $this->Form->control('name',['class' => 'form-control mb-20']);
                echo $this->Form->control('username',['class' => 'form-control mb-20']);
                echo $this->Form->control('email',['class' => 'form-control mb-20']);
                echo $this->Form->control('status',['class' => 'form-control mb-20']);
                echo $this->Form->control('password',['class' => 'form-control mb-20']);
            ?>
            <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
