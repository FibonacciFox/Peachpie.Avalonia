<?php
namespace System\Threading;
final class IdManager extends \System\Object
{


	/**
	 * @param \System\Boolean|bool $trackAllValues
	 * @return \System\Int32|int
	 */
	protected function GetId($trackAllValues){}
	/**
	 * @param \System\Int32|int $id
	 * @return \System\Boolean|bool
	 */
	protected function IdTracksAllValues($id){}
	/**
	 * @param \System\Int32|int $id
	 * @param \System\Boolean|bool $idTracksAllValues
	 * @return \System\Void|void
	 */
	protected function ReturnId($id, $idTracksAllValues){}
	/**
	 */
	public function __construct(){}
}