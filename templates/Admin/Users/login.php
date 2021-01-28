<div class="w-full h-full d-flex align-items-center justify-content-center">
    <div class="content">
        <div class="form-signin">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <legend><?= __('Por favor digite seu usuário e senha.') ?></legend>
            <?= $this->Form->create() ?>
                <?= $this->Flash->render() ?>
                <?= $this->Form->control('email', ['required' => true, 'class' => 'form-control', 'placeholder' => 'Email', 'value' => 'admin@admin.com', 'label' => false]) ?>
                <?= $this->Form->control('password', ['required' => true, 'class' => 'form-control mb-20', 'placeholder' => 'Senha', 'value' => '123', 'label' => false]) ?>
                <?= $this->Form->submit(__('Login'), ['class'=>'btn btn-lg btn-primary btn-block']); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
