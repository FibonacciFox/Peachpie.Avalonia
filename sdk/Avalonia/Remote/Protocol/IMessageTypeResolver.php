<?php
namespace Avalonia\Remote\Protocol;
/**
 */
interface IMessageTypeResolver
{
	/**
	 * @param \System\Guid $id
	 */
	public function GetByGuid($id);
	/**
	 * @param \System\Type $type
	 */
	public function GetGuid($type);
}
