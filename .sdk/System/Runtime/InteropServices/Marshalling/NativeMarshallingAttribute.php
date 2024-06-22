<?php
namespace System\Runtime\InteropServices\Marshalling;
final class NativeMarshallingAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $NativeType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $nativeType
	 */
	public function __construct($nativeType){}
}