<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AmbiguousMatchExceptionOverride {
	/**
	 * @param \System\UInt32 $flags
	 */
	#[MethodOverride]public function __construct_1 ($flags){}
	/**
	 * @param \System\Int32|int $assemblyFlags
	 */
	#[MethodOverride]public function __construct_2 ($assemblyFlags){}
	/**
	 * @param \System\Reflection\AssemblyNameFlags $assemblyFlags
	 */
	#[MethodOverride]public function __construct_3 ($assemblyFlags){}
}
final class AssemblyFlagsAttribute extends \System\Attribute
{
	use AmbiguousMatchExceptionOverride;
	/**
	 * @property
	 * @var \System\UInt32
	 * @since readonly
	 */
	public $Flags;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $AssemblyFlags;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses AssemblyFlagsAttributeOverride::__construct_1 <br>public , args: ($flags)<br>
	 * @uses AssemblyFlagsAttributeOverride::__construct_2 <br>public , args: ($assemblyFlags)<br>
	 * @uses AssemblyFlagsAttributeOverride::__construct_3 <br>public , args: ($assemblyFlags)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}