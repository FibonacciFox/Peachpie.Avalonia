<?php
namespace Avalonia\Platform\Storage;
/**
 */
class StorageItemProperties extends \System\Object
{
	/**
	 * @var \System\Nullable_1[System\UInt64]
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Nullable_1[System\DateTimeOffset]
	 * @property
	 */
	public readonly $DateCreated;
	/**
	 * @var \System\Nullable_1[System\DateTimeOffset]
	 * @property
	 */
	public readonly $DateModified;
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_DateCreated(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_DateModified(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
