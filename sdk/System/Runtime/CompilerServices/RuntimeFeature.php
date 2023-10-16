<?php
namespace System\Runtime\CompilerServices;
/**
 */
class RuntimeFeature extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $PortablePdb;
	/**
	 * @var \System\String
	 * @field
	 */
	public $DefaultImplementationsOfInterfaces;
	/**
	 * @var \System\String
	 * @field
	 */
	public $UnmanagedSignatureCallingConvention;
	/**
	 * @var \System\String
	 * @field
	 */
	public $CovariantReturnsOfClasses;
	/**
	 * @var \System\String
	 * @field
	 */
	public $ByRefFields;
	/**
	 * @var \System\String
	 * @field
	 */
	public $VirtualStaticsInInterfaces;
	/**
	 * @var \System\String
	 * @field
	 */
	public $NumericIntPtr;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDynamicCodeSupported;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDynamicCodeCompiled;
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsDynamicCodeSupported(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_IsDynamicCodeCompiled(){}
	/**
	 * @param \System\String|string $feature
	 * @return \System\Boolean
	 */
	public static function IsSupported($feature){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
