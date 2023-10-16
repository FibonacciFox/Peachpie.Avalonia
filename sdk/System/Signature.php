<?php
namespace System;
/**
 */
class Signature extends \System\Object
{
	/**
	 * @var \System\RuntimeType[]
	 * @field
	 */
	protected $m_arguments;
	/**
	 * @var \System\RuntimeType
	 * @field
	 */
	protected $m_declaringType;
	/**
	 * @var \System\RuntimeType
	 * @field
	 */
	protected $m_returnTypeORfieldType;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $m_keepalive;
	/**
	 * @var \System\Void*
	 * @field
	 */
	protected $m_sig;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_managedCallingConventionAndArgIteratorFlags;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_nSizeOfArgStack;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_csig;
	/**
	 * @var \System\RuntimeMethodHandleInternal
	 * @field
	 */
	protected $m_pMethod;
	/**
	 * @param \System\Void* $pCorSig
	 * @param \System\Int32|int $cCorSig
	 * @param \System\RuntimeFieldHandleInternal $fieldHandle
	 * @param \System\IRuntimeMethodInfo $methodHandle
	 * @param \System\RuntimeType $declaringType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSignature($pCorSig, $cCorSig, $fieldHandle, $methodHandle, $declaringType){}
	/**
	 * @return \System\Reflection\CallingConventions
	 */
	protected  function get_CallingConvention(){}
	/**
	 * @return \System\RuntimeType[]
	 */
	protected  function get_Arguments(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function get_ReturnType(){}
	/**
	 * @return \System\RuntimeType
	 */
	protected  function get_FieldType(){}
	/**
	 * @param \System\Signature $sig1
	 * @param \System\Signature $sig2
	 * @return \System\Boolean
	 */
	protected static function CompareSig($sig1, $sig2){}
	/**
	 * @param \System\Int32|int $position
	 * @param \System\Boolean $required
	 * @return \System\Type[]
	 */
	protected  function GetCustomModifiers($position, $required){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
