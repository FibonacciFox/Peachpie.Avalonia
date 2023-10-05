<?php
namespace Avalonia\Remote\Protocol;
/**
 */
class AvaloniaRemoteMessageGuidAttribute extends \System\Attribute
{
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $Guid;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Guid
	 */
	public  function get_Guid(){}
}
