<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LazyHelperOverride {
	/**
	 * @deprecated
	 * @return \System\Threading\LazyThreadSafetyMode
	 */
	#[MethodOverride]private function GetMode_1 (){}
	/**
	 * @deprecated
	 * @param \System\LazyHelper $state
	 * @return \System\Nullable_1
	 */
	#[MethodOverride]protected static function GetMode_2 ($state){}
}
final class LazyHelper extends \System\Object
{
	use LazyHelperOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\LazyHelper
	 */
	protected static $NoneViaConstructor;
	/**
	 * @field
	 * @since readonly
	 * @var \System\LazyHelper
	 */
	protected static $NoneViaFactory;
	/**
	 * @field
	 * @since readonly
	 * @var \System\LazyHelper
	 */
	protected static $PublicationOnlyViaConstructor;
	/**
	 * @field
	 * @since readonly
	 * @var \System\LazyHelper
	 */
	protected static $PublicationOnlyViaFactory;
	/**
	 * @field
	 * @since readonly
	 * @var \System\LazyHelper
	 */
	protected static $PublicationOnlyWaitForOtherThreadToPublish;
	/**
	 * @return \System\Void|void
	 */
	protected function ThrowException(){}
	/**
	 * @uses LazyHelperOverride::GetMode_1 <br>private , args: ()<br>
	 * @uses LazyHelperOverride::GetMode_2 <br>protected , args: ($state)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\LazyThreadSafetyMode|\System\Nullable_1|mixed|\override
	 */
	#[MethodOverrideProtected]function GetMode (\override ...$args){}
	/**
	 * @param \System\LazyHelper $state
	 * @return \System\Boolean|bool
	 */
	protected static function GetIsValueFaulted($state){}
	/**
	 * @param \System\Threading\LazyThreadSafetyMode $mode
	 * @param \System\Boolean|bool $useDefaultConstructor
	 * @return \System\LazyHelper
	 */
	protected static function Create($mode, $useDefaultConstructor){}
	/**
	 * @return \T|object
	 */
	protected static function CreateViaDefaultConstructor(){}
	/**
	 * @param \System\Boolean|bool $isThreadSafe
	 * @return \System\Threading\LazyThreadSafetyMode
	 */
	protected static function GetModeFromIsThreadSafe($isThreadSafe){}
}