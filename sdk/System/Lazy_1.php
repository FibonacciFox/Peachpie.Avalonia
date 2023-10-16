<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Lazy_1 extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsValueCreated;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Value;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateViaDefaultConstructor(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ViaConstructor(){}
	/**
	 * @param \System\Threading\LazyThreadSafetyMode $mode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ViaFactory($mode){}
	/**
	 * @param \System\LazyHelper $executionAndPublication
	 * @param \System\Boolean $useDefaultConstructor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExecutionAndPublication($executionAndPublication, $useDefaultConstructor){}
	/**
	 * @param \System\LazyHelper $publicationOnly
	 * @param \System\T $possibleValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PublicationOnly($publicationOnly, $possibleValue){}
	/**
	 * @param \System\LazyHelper $initializer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PublicationOnlyViaConstructor($initializer){}
	/**
	 * @param \System\LazyHelper $initializer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PublicationOnlyViaFactory($initializer){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PublicationOnlyWaitForOtherThreadToPublish(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateValue(){}
	/**
	 * @return \System\T
	 */
	protected  function get_ValueForDebugDisplay(){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_Mode(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsValueFaulted(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsValueCreated(){}
	/**
	 * @return \System\T
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
