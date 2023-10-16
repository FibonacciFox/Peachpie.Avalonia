<?php
namespace System\Runtime\InteropServices;
/**
 */
class ComCompatibleVersionAttribute extends \System\Attribute
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MajorVersion;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MinorVersion;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BuildNumber;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $RevisionNumber;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MajorVersion(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MinorVersion(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BuildNumber(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RevisionNumber(){}
}
