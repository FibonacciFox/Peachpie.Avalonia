<?php
namespace System\Runtime\ExceptionServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ExceptionDispatchInfoOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Throw_1 (){}
	/**
	 * @deprecated
	 * @param \System\Exception $source
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Throw_2 ($source){}
}
final class ExceptionDispatchInfo extends \System\Object
{
	use ExceptionDispatchInfoOverride;

	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $SourceException;
	/**
	 * @param \System\Exception $source
	 * @return \System\Runtime\ExceptionServices\ExceptionDispatchInfo
	 */
	public static function Capture($source){}
	/**
	 * @uses ExceptionDispatchInfoOverride::Throw_1 <br>public , args: ()<br>
	 * @uses ExceptionDispatchInfoOverride::Throw_2 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Throw (\override ...$args){}
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
}