<?php
namespace System\Runtime\CompilerServices;
class RuntimeFeature extends \System\Object
{

	/**
	 * @field
	 * @var \System\String|string
	 */
	const PortablePdb = 'PortablePdb';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const DefaultImplementationsOfInterfaces = 'DefaultImplementationsOfInterfaces';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const UnmanagedSignatureCallingConvention = 'UnmanagedSignatureCallingConvention';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const CovariantReturnsOfClasses = 'CovariantReturnsOfClasses';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const ByRefFields = 'ByRefFields';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const VirtualStaticsInInterfaces = 'VirtualStaticsInInterfaces';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const NumericIntPtr = 'NumericIntPtr';
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDynamicCodeSupported;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDynamicCodeCompiled;
	/**
	 * @param \System\String|string $feature
	 * @return \System\Boolean|bool
	 */
	public static function IsSupported($feature){}
}