<?php
namespace System\Runtime\InteropServices;
final class ManagedToNativeComInteropStubAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ClassType;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $MethodName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $classType
	 * @param \System\String|string $methodName
	 */
	public function __construct($classType, $methodName){}
}