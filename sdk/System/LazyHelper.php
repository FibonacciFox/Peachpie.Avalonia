<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LazyHelperMethodsOverride
{
	/**
	 * @return \System\Threading\LazyThreadSafetyMode
	 */
	#[MethodOverride] private  function GetMode_1(){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] protected static function GetMode_2($state){}
}
/**
 */
class LazyHelper extends \System\Object
{
	/**
	 * @var \System\LazyHelper
	 * @field
	 */
	protected readonly $NoneViaConstructor;
	/**
	 * @var \System\LazyHelper
	 * @field
	 */
	protected readonly $NoneViaFactory;
	/**
	 * @var \System\LazyHelper
	 * @field
	 */
	protected readonly $PublicationOnlyViaConstructor;
	/**
	 * @var \System\LazyHelper
	 * @field
	 */
	protected readonly $PublicationOnlyViaFactory;
	/**
	 * @var \System\LazyHelper
	 * @field
	 */
	protected readonly $PublicationOnlyWaitForOtherThreadToPublish;
	/**
	 * @return \System\LazyState
	 */
	protected  function get_State(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ThrowException(){}
	/**
	 * @uses LazyHelperMethodsOverride::GetMode_1 ()
	 * @uses LazyHelperMethodsOverride::GetMode_2 ($state)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetMode(mixed ...$args){}
	/**
	 * @param \System\LazyHelper $state
	 * @return \System\Boolean
	 */
	protected static function GetIsValueFaulted($state){}
	/**
	 * @param \System\Threading\LazyThreadSafetyMode $mode
	 * @param \System\Boolean $useDefaultConstructor
	 * @return \System\LazyHelper
	 */
	protected static function Create($mode, $useDefaultConstructor){}
	/**
	 * @return \System\T
	 */
	protected static function CreateViaDefaultConstructor(){}
	/**
	 * @param \System\Boolean $isThreadSafe
	 * @return \System\Threading\LazyThreadSafetyMode
	 */
	protected static function GetModeFromIsThreadSafe($isThreadSafe){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
