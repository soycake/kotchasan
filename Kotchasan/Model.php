<?php
/*
 * @filesource Kotchasan/Model.php
 * @link http://www.kotchasan.com/
 * @copyright 2016 Goragod.com
 * @license http://www.kotchasan.com/license/
 */

namespace Kotchasan;

use \Kotchasan\Database\Query;
use \Kotchasan\Http\Request;

/**
 * Model base class
 *
 * @author Goragod Wiriya <admin@goragod.com>
 *
 * @since 1.0
 */
class Model extends Query
{
	/**
	 * ชื่อของการเชื่อมต่อ ใช้สำหรับโหลด config จาก settings/database.php
	 *
	 * @var string
	 */
	protected $conn = 'mysql';

	/**
	 * Class constructor
	 *
	 * @param Request $request
	 */
	public function __construct(Request $request)
	{
		$this->request = $request;
		parent::__construct($this->conn);
	}

	/**
	 * create Model
	 *
	 * @param Request $request
	 * @return \static
	 */
	public static function create(Request $request)
	{
		return new static($request);
	}
}