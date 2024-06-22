<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PlatformNotSupportedExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Action_1 $handler [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($handler){}
}
class Progress_1 extends \System\Object implements
	\System\IProgress_1
{
	use PlatformNotSupportedExceptionOverride;


	/**
	 * @param \System\EventHandler_1 $value [generic: T]
	 * @return \System\Void|void
	 */
	public function add_ProgressChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: T]
	 * @return \System\Void|void
	 */
	public function remove_ProgressChanged($value){}
	/**
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	protected function OnReport($value){}
	private function Report($value){}
	private function InvokeHandlers($state){}
	/**
	 * @uses Progress_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses Progress_1Override::__construct_2 <br>public , args: ($handler)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}