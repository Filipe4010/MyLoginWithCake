<br>
<div class = "index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center text-white pt-5">Register Here</h2>   
        <div class="container">
            <div id="login-row" class="row text-center justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <?= $this->Form->create($user); ?>
                            <?= $this->Form->input('name', array('type' => 'text','class' => 'mt-2', 'placeholder' => 'Name')); ?>
                            <?= $this->Form->input('email', array('type' => 'email','class' => 'mt-2', 'placeholder' => 'E-mail')); ?>
                            <?= $this->Form->input('password', array('type' => 'password','class' => 'mt-2', 'placeholder' => 'Password')); ?>
                            <?= $this->Form->submit('Register', array('class' => 'btn btn-primary mt-2')); ?>
                        <?= $this->Form->end();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

