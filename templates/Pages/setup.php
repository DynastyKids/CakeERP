<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

$cakeDescription = 'CakeERP: Initial Setup';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            <h1>CakeERP Initial Setup</h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <div id="url-rewriting-warning" style="padding: 1rem; background: #fcebea; color: #cc1f1a; border-color: #ef5753;">
                            <ul>
                                <li class="bullet problem">
                                    URL rewriting is not properly configured on your server.<br />
                                    1) <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/en/installation.html#url-rewriting">Help me configure it</a><br />
                                    2) <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/en/development/configuration.html#general-configuration">I don't / can't use URL rewriting</a>
                                </li>
                            </ul>
                        </div>
                        <?php Debugger::checkSecurityKeys(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <h4>Database</h4>
                        <?php
                        $result = $checkConnection('default');
                        ?>
                        <ul>
                        <?php if ($result['connected']) : ?>
                            <li class="bullet success">System is able to connect to the database.</li>
                        <?php else : ?>
                            <li class="bullet problem">System is NOT able to connect to the database.<br /><?= $result['error'] ?></li>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <div class="column">
                        <h4>Debug Mode</h4>
                        <ul>
                            <?php if (Configure::read('debug')) :?>
                            <li class="bullet success">Debug mode has been disabled.</li>
                            <?php
//                            throw new NotFoundException('Please disable the debug mode to continue.');
                            endif; ?>
                        </ul>
                    </div>
                </div>
                <hr>
                <?php if ($result['connected']) : ?>
                    <?php if (TableRegistry::getTableLocator()->get('Basecontent')->get(1)->get('bc_int') == 0):?>
                    <?php echo $this->Form->create()?>
                    <div class="row">
                        <div class="column">
                            <h3>Getting Started</h3>
                            <h4>Master Password Reset</h4>
                            <small>Please keep your master password safe as this is able to control all system features.</small>
                                <div class="row">
                                    <div class="column">
                                        <?php echo $this->Form->control('masteremail',['label'=>'Master Email Address','placeholder'=>'Input your master account email','type'=>'email','required'=>true]);?>
                                    </div>
                                    <div class="column" >
                                        <?php echo $this->Form->control('masterpass',['label'=>'Master Password','placeholder'=>'Input your master password','type'=>'password','required'=>true]);?>
                                    </div>
                                    <div class="column">
                                        <?php echo $this->Form->control('masterpassv',['label'=>'Confirm Master Password','placeholder'=>'Confirm your master password','type'=>'password','required'=>true]);?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column"></div>
                                    <div class="column">
                                        <div class="message" id="mpmsg">
                                            <p id="mpletter" class="invalid">Any letters</p>
                                            <p id="mplength" class="invalid">Minimum <b>8 characters</b></p>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="message" id="mpmsgv">
                                            <p id="mpvalidate" class="invalid">Master password matches</p>
                                        </div>
                                    </div>
                                </div>
                            <hr>
                            <h4>Create first account</h4>
                            <div class="row">
                                <div class="column" style="width: 45%">
                                    <?php echo $this->Form->control('sf_Firstname',['label'=>'Your First name','placeholder'=>'Please input your firstname']);?>
                                </div>
                                <div class="column" style="width: 45%">
                                    <?php echo $this->Form->control('sf_Middlename',['label'=>'Your Middle name','placeholder'=>'Leave blank if you don\'t have middle name']);?>
                                </div>
                                <div class="column" style="width: 45%">
                                    <?php echo $this->Form->control('sf_Lastname',['label'=>'Your Last name','placeholder'=>'Please input your lastname']);?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column" style="width: 45%">
                                    <?php echo $this->Form->control('useremail',['label'=>'Account email','placeholder'=>'Please input your account email address','type'=>'email']);?>
                                </div>
                                <div class="column" style="width: 45%">
                                    <?php echo $this->Form->control('sf_password',['label'=>'User password','placeholder'=>"Please input your password",'type'=>'password']);?>
                                </div>
                                <div class="column" style="width: 45%">
                                    <?php echo $this->Form->control('sf_passwordv',['label'=>'Confirm User Password','placeholder'=>"Input again to confirm your password",'type'=>'password']);?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column"></div>
                                <div class="column">
                                    <div class="message" id="uspmsg">
                                        <p id="uspletter" class="invalid">Any letters</p>
                                        <p id="usplength" class="invalid">Minimum <b>8 characters</b></p>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="message" id="uspmsgv">
                                        <p id="uspvalidate" class="invalid">User password matches</p>
                                    </div>
                                </div>
                            </div>
                            <?php echo $this->Form->button('Submit');
                            echo $this->Form->end();?>
                        </div>
                    </div>
                    <hr>
                    <?php endif;?>
                <?php endif;?>
                <div class="row">
                    <div class="column links">
                        <h3>Help and Bug Reports</h3>
                        Please submit your Bug Reports to GitHub Repository<br>
                        <a target="_blank" rel="noopener" href="https://github.com/DynastyKids/CakeERP/Issues">GitHub Issues</a>
                        <a target="_blank" rel="noopener" href="https://github.com/DynastyKids/CakeERP">Repository</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </main>
</body>
</html>
<style>
    .message {
        display:none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
    }

    .message p {
        padding: 10px 35px;
        font-size: 18px;
    }

    .valid {
        color: green;
    }
    .valid:before {
        position: relative;
        left: -35px;
        content: "√";
    }

    .invalid {
        color: red;
    }
    .invalid:before {
        position: relative;
        left: -35px;
        content: "X";
    }
</style>
<script>
    var myInput = document.getElementById("masterpass");
    myInput.onfocus = function() {
        document.getElementById("mpmsg").style.display = "block";
    }
    myInput.onkeyup = function() {
        var letters = /[a-zA-Z]/g;
        if(myInput.value.match(letters)) {
            mpletter.classList.remove("invalid");
            mpletter.classList.add("valid");
        } else {
            mpletter.classList.remove("valid");
            mpletter.classList.add("invalid");
        }

        if (myInput.value.length >= 8) {
            mplength.classList.remove("invalid");
            mplength.classList.add("valid");
        } else {
            mplength.classList.remove("valid");
            mplength.classList.add("invalid");
        }
    }
</script>

<script>
    var mpValidate = document.getElementById("masterpassv");
    var mpInput = document.getElementById("masterpass")
    mpValidate.onfocus = function() {
        document.getElementById("mpmsgv").style.display = "block";
    }
    mpValidate.onkeyup = function() {
        if (mpValidate.value === mpInput.value){
            mpvalidate.classList.remove("invalid");
            mpvalidate.classList.add("valid");
        } else {
            mpvalidate.classList.remove("valid");
            mpvalidate.classList.add("invalid");
        }
    }
</script>

<script>
    var uspInput = document.getElementById("sf-password");
    uspInput.onfocus = function() {
        document.getElementById("uspmsg").style.display = "block";
    }
    uspInput.onkeyup = function() {
        var letters = /[a-zA-Z]/g;
        if(uspInput.value.match(letters)) {
            uspletter.classList.remove("invalid");
            uspletter.classList.add("valid");
        } else {
            uspletter.classList.remove("valid");
            uspletter.classList.add("invalid");
        }

        if (uspInput.value.length >= 8) {
            usplength.classList.remove("invalid");
            usplength.classList.add("valid");
        } else {
            usplength.classList.remove("valid");
            usplength.classList.add("invalid");
        }
    }
</script>

<script>
    var uspValidate = document.getElementById("sf-passwordv");
    var uspInput = document.getElementById("sf-password")
    uspValidate.onfocus = function() {
        document.getElementById("uspmsgv").style.display = "block";
    }
    uspValidate.onkeyup = function() {
        if (uspValidate.value === uspInput.value){
            uspvalidate.classList.remove("invalid");
            uspvalidate.classList.add("valid");
        } else {
            uspvalidate.classList.remove("valid");
            uspvalidate.classList.add("invalid");
        }
    }
</script>
