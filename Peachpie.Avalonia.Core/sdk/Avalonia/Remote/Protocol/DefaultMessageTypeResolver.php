<?php
namespace Avalonia\Remote\Protocol;
/**
 */
class DefaultMessageTypeResolver extends \System\Object implements 
	\Avalonia\Remote\Protocol\IMessageTypeResolver
{
	/**
	 * @param \System\Guid $id
	 * @return \System\Type
	 */
	public  function GetByGuid($id){}
	/**
	 * @param \System\Type $type
	 * @return \System\Guid
	 */
	public  function GetGuid($type){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
