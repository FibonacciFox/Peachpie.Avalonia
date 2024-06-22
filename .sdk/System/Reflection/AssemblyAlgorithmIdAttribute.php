<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AmbiguousMatchExceptionOverride {
	/**
	 * @param \System\Configuration\Assemblies\AssemblyHashAlgorithm $algorithmId
	 */
	#[MethodOverride]public function __construct_1 ($algorithmId){}
	/**
	 * @param \System\UInt32 $algorithmId
	 */
	#[MethodOverride]public function __construct_2 ($algorithmId){}
}
final class AssemblyAlgorithmIdAttribute extends \System\Attribute
{
	use AmbiguousMatchExceptionOverride;

	/**
	 * @property
	 * @var \System\UInt32
	 * @since readonly
	 */
	public $AlgorithmId;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses AssemblyAlgorithmIdAttributeOverride::__construct_1 <br>public , args: ($algorithmId)<br>
	 * @uses AssemblyAlgorithmIdAttributeOverride::__construct_2 <br>public , args: ($algorithmId)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}