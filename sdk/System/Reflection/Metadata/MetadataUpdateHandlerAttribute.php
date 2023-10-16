<?php
namespace System\Reflection\Metadata;
/**
 */
class MetadataUpdateHandlerAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $HandlerType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_HandlerType(){}
}
