<?php
namespace Avalonia\Layout;
/**
 */
interface ILayoutManager
{
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_LayoutUpdated($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_LayoutUpdated($value);
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 */
	public function InvalidateMeasure($control);
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 */
	public function InvalidateArrange($control);
	/**
	 */
	public function ExecuteLayoutPass();
	/**
	 */
	public function ExecuteInitialLayoutPass();
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 */
	public function RegisterEffectiveViewportListener($control);
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 */
	public function UnregisterEffectiveViewportListener($control);
}
