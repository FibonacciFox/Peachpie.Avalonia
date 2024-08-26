<?php
namespace Avalonia\Layout;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LayoutManagerOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $control
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]private function CalculateEffectiveViewport_1 ($control){}
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $target
	 * @param \Avalonia\Visual $control
	 * @param \Avalonia\Rect& $viewport
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CalculateEffectiveViewport_2 ($target, $control, $viewport){}
}
class LayoutManager extends \System\Object implements
	\Avalonia\Layout\ILayoutManager,
	\System\IDisposable
{
	use LayoutManagerOverride;

	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_LayoutUpdated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_LayoutUpdated($value){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	public function InvalidateMeasure($control){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	public function InvalidateArrange($control){}
	/**
	 * @return \System\Void|void
	 */
	protected function ExecuteQueuedLayoutPass(){}
	/**
	 * @return \System\Void|void
	 */
	public function ExecuteLayoutPass(){}
	/**
	 * @return \System\Void|void
	 */
	public function ExecuteInitialLayoutPass(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function RegisterEffectiveViewportListener($control){}
	private function UnregisterEffectiveViewportListener($control){}
	private function InnerLayoutPass(){}
	private function ExecuteMeasurePass(){}
	private function ExecuteArrangePass(){}
	private function Measure($control){}
	private function Arrange($control){}
	private function QueueLayoutPass(){}
	private function RaiseEffectiveViewportChanged(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses LayoutManagerOverride::CalculateEffectiveViewport_1 <br>private , args: ($control)<br>
	 * @uses LayoutManagerOverride::CalculateEffectiveViewport_2 <br>private , args: ($target, $control, $viewport)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function CalculateEffectiveViewport (\override ...$args){}
	/**
	 * @param \Avalonia\Layout\ILayoutRoot $owner
	 */
	public function __construct($owner){}
}