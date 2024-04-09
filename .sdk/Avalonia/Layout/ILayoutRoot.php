<?php
namespace Avalonia\Layout;
/**
 * @method \System\Void|void add_LayoutUpdated($value) [modifier: public]
 * @method \System\Void|void remove_LayoutUpdated($value) [modifier: public]
*/
interface ILayoutManager
{

	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	public function InvalidateMeasure($control);
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	public function InvalidateArrange($control);
	/**
	 * @return \System\Void|void
	 */
	public function ExecuteLayoutPass();
	/**
	 * @return \System\Void|void
	 */
	public function ExecuteInitialLayoutPass();
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	public function RegisterEffectiveViewportListener($control);
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	public function UnregisterEffectiveViewportListener($control);
}
<?php
namespace Avalonia\Layout;
interface ILayoutRoot
{


}