<?php
namespace System\Runtime\ExceptionServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExceptionDispatchInfoMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Throw_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Throw_2($source){}
}
/**
 */
class ExceptionDispatchInfo extends \System\Object
{
	/**
	 * @var \System\Exception
	 * @property
	 */
	public readonly $SourceException;
	/**
	 * @param \System\Exception $source
	 * @return \System\Runtime\ExceptionServices\ExceptionDispatchInfo
	 */
	public static function Capture($source){}
	/**
	 * @return \System\Exception
	 */
	public  function get_SourceException(){}
	/**
	 * @uses ExceptionDispatchInfoMethodsOverride::Throw_1 ()
	 * @uses ExceptionDispatchInfoMethodsOverride::Throw_2 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Throw(mixed ...$args){}
	/**
	 * @param \System\Exception $source
	 * @return \System\Exception
	 */
	public static function SetCurrentStackTrace($source){}
	/**
	 * @param \System\Exception $source
	 * @param \System\String|string $stackTrace
	 * @return \System\Exception
	 */
	public static function SetRemoteStackTrace($source, $stackTrace){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
