<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ModuleHandleOverride {
	/**
	 * @param \System\IRuntimeMethodInfo $method
	 * @param \System\RuntimeType $arguments
	 * @param \System\RuntimeType $returnType
	 * @param \System\Reflection\CallingConventions $callingConvention
	 */
	#[MethodOverride]public function __construct_1 ($method, $arguments, $returnType, $callingConvention){}
	/**
	 * @param \System\IRuntimeMethodInfo $methodHandle
	 * @param \System\RuntimeType $declaringType
	 */
	#[MethodOverride]public function __construct_2 ($methodHandle, $declaringType){}
	/**
	 * @param \System\IRuntimeFieldInfo $fieldHandle
	 * @param \System\RuntimeType $declaringType
	 */
	#[MethodOverride]public function __construct_3 ($fieldHandle, $declaringType){}
	/**
	 * @param \System\Void* $pCorSig
	 * @param \System\Int32|int $cCorSig
	 * @param \System\RuntimeType $declaringType
	 */
	#[MethodOverride]public function __construct_4 ($pCorSig, $cCorSig, $declaringType){}
}
final class Signature extends \System\Object
{
	use ModuleHandleOverride;

	/**
	 * @field
	 * @var \System\RuntimeType[]
	 */
	protected $m_arguments;
	/**
	 * @field
	 * @var \System\RuntimeType
	 */
	protected $m_declaringType;
	/**
	 * @field
	 * @var \System\RuntimeType
	 */
	protected $m_returnTypeORfieldType;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $m_keepalive;
	/**
	 * @field
	 * @var \System\Void*
	 */
	protected $m_sig;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_managedCallingConventionAndArgIteratorFlags;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_nSizeOfArgStack;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_csig;
	/**
	 * @field
	 * @var \System\RuntimeMethodHandleInternal
	 */
	protected $m_pMethod;
	private function GetSignature($pCorSig, $cCorSig, $fieldHandle, $methodHandle, $declaringType){}
	/**
	 * @param \System\Signature $sig1
	 * @param \System\Signature $sig2
	 * @return \System\Boolean|bool
	 */
	protected static function CompareSig($sig1, $sig2){}
	/**
	 * @param \System\Int32|int $position
	 * @param \System\Boolean|bool $required
	 * @return \System\Type[]
	 */
	protected function GetCustomModifiers($position, $required){}
	/**
	 * @uses SignatureOverride::__construct_1 <br>public , args: ($method, $arguments, $returnType, $callingConvention)<br>
	 * @uses SignatureOverride::__construct_2 <br>public , args: ($methodHandle, $declaringType)<br>
	 * @uses SignatureOverride::__construct_3 <br>public , args: ($fieldHandle, $declaringType)<br>
	 * @uses SignatureOverride::__construct_4 <br>public , args: ($pCorSig, $cCorSig, $declaringType)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}