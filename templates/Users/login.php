<br>
<div class = "index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center text-white pt-5">Login</h2>   
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <?= $this->Form->create(); ?>
                            <?= $this->Form->input('email', array('type' => 'email')); ?>
                            <?= $this->Form->input('password', array('type' => 'password')); ?>
                            <?= $this->Form->submit('Login', array('class' => 'button')); ?>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

