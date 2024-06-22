<?php
namespace System\Reflection\Metadata;
final class MetadataUpdateHandlerAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $HandlerType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $handlerType
	 */
	public function __construct($handlerType){}
}