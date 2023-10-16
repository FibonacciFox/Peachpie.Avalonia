<?php
namespace System\Runtime\CompilerServices;
/**
 */
class MetadataUpdateOriginalTypeAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $OriginalType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_OriginalType(){}
}
