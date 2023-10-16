<?php
namespace System\Threading;
/**
 */
class IdManager extends \System\Object
{
	/**
	 * @param \System\Boolean $trackAllValues
	 * @return \System\Int32|int
	 */
	protected  function GetId($trackAllValues){}
	/**
	 * @param \System\Int32|int $id
	 * @return \System\Boolean
	 */
	protected  function IdTracksAllValues($id){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_IdsThatDoNotTrackValuesCount(){}
	/**
	 * @param \System\Int32|int $id
	 * @param \System\Boolean $idTracksAllValues
	 * @return \System\Void|void
	 */
	protected  function ReturnId($id, $idTracksAllValues){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
