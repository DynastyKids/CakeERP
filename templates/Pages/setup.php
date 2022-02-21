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

$cakeDescription = 'CakeERP: Status Page';
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
            <h1>Welcome to CakeERP</h1>
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
                        <h4>Environment</h4>
                        <ul>
                        <?php if (version_compare(PHP_VERSION, '7.2.0', '>=')) : ?>
                            <li class="bullet success">Your version of PHP is 7.2.0 or higher (detected <?= PHP_VERSION ?>).</li>
                        <?php else : ?>
                            <li class="bullet problem">Your version of PHP is too low. You need PHP 7.2.0 or higher to use CakePHP (detected <?= PHP_VERSION ?>).</li>
                        <?php endif; ?>

                        <?php if (extension_loaded('mbstring')) : ?>
                            <li class="bullet success">Your version of PHP has the mbstring extension loaded.</li>
                        <?php else : ?>
                            <li class="bullet problem">Your version of PHP does NOT have the mbstring extension loaded.</li>
                        <?php endif; ?>

                        <?php if (extension_loaded('openssl')) : ?>
                            <li class="bullet success">Your version of PHP has the openssl extension loaded.</li>
                        <?php elseif (extension_loaded('mcrypt')) : ?>
                            <li class="bullet success">Your version of PHP has the mcrypt extension loaded.</li>
                        <?php else : ?>
                            <li class="bullet problem">Your version of PHP does NOT have the openssl or mcrypt extension loaded.</li>
                        <?php endif; ?>

                        <?php if (extension_loaded('intl')) : ?>
                            <li class="bullet success">Your version of PHP has the intl extension loaded.</li>
                        <?php else : ?>
                            <li class="bullet problem">Your version of PHP does NOT have the intl extension loaded.</li>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <div class="column">
                        <h4>Filesystem</h4>
                        <ul>
                        <?php if (is_writable(TMP)) : ?>
                            <li class="bullet success">Your tmp directory is writable.</li>
                        <?php else : ?>
                            <li class="bullet problem">Your tmp directory is NOT writable.</li>
                        <?php endif; ?>

                        <?php if (is_writable(LOGS)) : ?>
                            <li class="bullet success">Your logs directory is writable.</li>
                        <?php else : ?>
                            <li class="bullet problem">Your logs directory is NOT writable.</li>
                        <?php endif; ?>

                        <?php $settings = Cache::getConfig('_cake_core_'); ?>
                        <?php if (!empty($settings)) : ?>
                            <li class="bullet success">The <em><?= $settings['className'] ?>Engine</em> is being used for core caching. To change the config edit config/app.php</li>
                        <?php else : ?>
                            <li class="bullet problem">Your cache is NOT working. Please check the settings in config/app.php</li>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <hr>
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
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
                <hr>
                <?php if ($initsetting == 0):?>
                <div class="row">
                    <div class="column">
                        <h3>Getting Started</h3>
                        <h4>Master Password Reset</h4>
                            <div class="row">
                                <div class="column">
                                    <?php echo $this->Form->control('masteremail',['label'=>'Master Email Address','placeholder'=>'Input your master account email','type'=>'email','required'=>true]);?>
                                </div>
                                <div class="column" >
                                    <?php echo $this->Form->control('masterpass',['label'=>'Master Password','placeholder'=>'Input your master password','type'=>'password']);?>
                                </div>
                                <div class="column">
                                    <?php echo $this->Form->control('masterpass',['label'=>'Master Password','placeholder'=>'Input your master password','type'=>'password']);?>
                                </div>
                            </div>
                                <small>Please keep your master password safe as this is able to control all system features.</small>

                        <h4>Create first account</h4>
                        <div class="row">
                            <div class="column" style="width: 45%">
                                <?php echo $this->Form->control('sf_Firstname',['label'=>'Your First name','placeholder'=>'Please input your firstname']);?>
                            </div>
                            <div class="column" style="width: 45%">
                                <?php echo $this->Form->control('sf_Lastname',['label'=>'Your Last name','placeholder'=>'Please input your lastname']);?>
                            </div>
                            <div class="column" style="width: 45%">
                                <?php echo $this->Form->control('useremail',['label'=>'Account email','placeholder'=>'Please input your account email address','type'=>'email']);?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column" style="width: 45%">
                                <?php echo $this->Form->control('password',['label'=>'Your password','placeholder'=>"Please input your password",'type'=>'password']);?>
                            </div>
                            <div class="column" style="width: 45%">
                                <?php echo $this->Form->control('passwordV',['label'=>'Password verify','placeholder'=>"Please input your password again to verify",'type'=>'password']);?>
                            </div>
                        </div>
                        <?php echo $this->Form->button('Save'); echo $this->Form->end();?>
                    </div>
                </div>
                <hr>
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

<script>

</script>
