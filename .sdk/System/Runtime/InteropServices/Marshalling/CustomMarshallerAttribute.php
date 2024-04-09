<?php
namespace System\Runtime\InteropServices\Marshalling;
final class CustomMarshallerAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ManagedType;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\Marshalling\MarshalMode
	 * @since readonly
	 */
	public $MarshalMode;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $MarshallerType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $managedType
	 * @param \System\Runtime\InteropServices\Marshalling\MarshalMode $marshalMode
	 * @param \System\Type $marshallerType
	 */
	public function __construct($managedType, $marshalMode, $marshallerType){}
}