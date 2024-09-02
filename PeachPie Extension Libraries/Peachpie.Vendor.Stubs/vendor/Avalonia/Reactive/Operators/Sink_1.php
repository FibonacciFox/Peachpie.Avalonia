<?php
namespace Avalonia\Reactive\Operators;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Sink_1Override {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
}
class Sink_1 extends \System\Object implements
	\System\IDisposable
{
	use Sink_1Override;

	/**
	 * @uses Sink_1Override::Dispose_1 <br>public , args: ()<br>
	 * @uses Sink_1Override::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @param \TTarget $value
	 * @return \System\Void|void
	 */
	public function ForwardOnNext($value){}
	/**
	 * @return \System\Void|void
	 */
	public function ForwardOnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function ForwardOnError($error){}
	/**
	 * @param \System\IDisposable $upstream
	 * @return \System\Void|void
	 */
	protected function SetUpstream($upstream){}
	/**
	 * @return \System\Void|void
	 */
	protected function DisposeUpstream(){}
}