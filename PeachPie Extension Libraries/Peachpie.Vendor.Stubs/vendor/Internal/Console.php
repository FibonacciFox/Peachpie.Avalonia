<?php
namespace Internal;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ConsoleOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLine_1 ($s){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteLine_2 (){}
}
class Console extends \System\Object
{
	use ConsoleOverride;

	/**
	 * @uses ConsoleOverride::WriteLine_1 <br>public , args: ($s)<br>
	 * @uses ConsoleOverride::WriteLine_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteLine (\override ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \System\Void|void
	 */
	public static function Write($s){}
}