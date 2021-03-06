<?php
/**
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * (CC) BY-NC-SA 2005-2013, Mark Weirath, Özgür Uysal
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          http://www.xlrstats.com
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 * @package       app.Controller
 * @since         XLRstats v3.0
 * @version       0.1
 */

App::uses('AppController', 'Controller');
class ServerGroupsController extends AppController {

	public $components = array(
		'RequestHandler'
	);

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$data = $this->ServerGroup->find('all', array(
			'conditions' => array(
				'active_group' => true
			),
			'order' => 'name ASC',
		));
		//pr($data);

		if ($this->request->is('requested')) {
			return array($data);
		}
		else {
			$this->set('serverGroups', $data);
		}
	}
}
