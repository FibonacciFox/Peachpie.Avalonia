<?php
namespace Avalonia\Layout;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LayoutManagerMethodsOverride
{
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] private  function CalculateEffectiveViewport_1($control){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CalculateEffectiveViewport_2($target, $control, $viewport){}
}
/**
 */
class LayoutManager extends \System\Object implements 
	\Avalonia\Layout\ILayoutManager,
	\System\IDisposable
{
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_LayoutUpdated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_LayoutUpdated($value){}
	/**
	 * @return \System\Action_1
	 */
	protected  function get_LayoutPassTimed(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_LayoutPassTimed($value){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	public  function InvalidateMeasure($control){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	public  function InvalidateArrange($control){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ExecuteQueuedLayoutPass(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ExecuteLayoutPass(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ExecuteInitialLayoutPass(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RegisterEffectiveViewportListener($control){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnregisterEffectiveViewportListener($control){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InnerLayoutPass(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExecuteMeasurePass(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExecuteArrangePass(){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Measure($control){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Arrange($control){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function QueueLayoutPass(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RaiseEffectiveViewportChanged(){}
	/**
	 * @uses LayoutManagerMethodsOverride::CalculateEffectiveViewport_1 ($control)
	 * @uses LayoutManagerMethodsOverride::CalculateEffectiveViewport_2 ($target, $control, $viewport)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CalculateEffectiveViewport(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
