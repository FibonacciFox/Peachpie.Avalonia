<?php
namespace System\Diagnostics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait WriteIfInterpolatedStringHandlerOverride {
	/**
	 * @param \System\Type $type
	 */
	#[MethodOverride]public function __construct_1 ($type){}
	/**
	 * @param \System\String|string $typeName
	 */
	#[MethodOverride]public function __construct_2 ($typeName){}
}
final class DebuggerTypeProxyAttribute extends \System\Attribute
{
	use WriteIfInterpolatedStringHandlerOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ProxyTypeName;
	/**
	 * @property
	 * @var \System\Type
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $TargetTypeName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DebuggerTypeProxyAttributeOverride::__construct_1 <br>public , args: ($type)<br>
	 * @uses DebuggerTypeProxyAttributeOverride::__construct_2 <br>public , args: ($typeName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}