<?php
declare(strict_types=1);

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
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Database\Connection;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\ORM\TableRegistry;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 * @property \App\Model\Table\StaffsTable $Staffs
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function setup()
    {
        $initsetting = TableRegistry::getTableLocator()->get('Basecontent')->get(1)->get('bc_int');
        if ($this->request->is('POST') && $initsetting == 0) {
            $received = $this->request->getData();
            $masterAcc = TableRegistry::getTableLocator()->get('Staffs')->get(1,[]);
            $masterAcc['sf_email'] = $received['masteremail'];
            $masterAcc['sf_password'] = $received['masterpass'];
            $savemaster = TableRegistry::getTableLocator()->get('Staffs')->save($masterAcc);
            $staff = TableRegistry::getTableLocator()->get('Staffs')->newEmptyEntity();
            $staff['sf_Firstname']= $received['sf_Firstname'];
            $staff['sf_Lastname']= $received['sf_Lastname'];
            $staff['sf_Middlename']= $received['sf_Middlename'];
            $staff['sf_createTime'] =gmmktime();
            $staff['sf_email']= $received['useremail'];
            $staff['sf_password']= $received['sf_password'];
            $saveStaff = TableRegistry::getTableLocator()->get('Staffs')->save($staff);
            if ($savemaster && $saveStaff){
                $flag = TableRegistry::getTableLocator()->get('Basecontent')->get(1, ['contain' => [],]);
                $flag['bc_int'] =1;
                TableRegistry::getTableLocator()->get('Basecontent')->save($flag);
                $this->Flash->success(__('The Initial setting has been finished.'));
                return $this->redirect(['controller'=>'staffs','action' => 'login']);
            }
        }

        if ($initsetting == 1){
            $this->redirect(['action'=>'display','status']);
        }
        $this->set(compact('initsetting'));
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['setup','display']);
    }
}
