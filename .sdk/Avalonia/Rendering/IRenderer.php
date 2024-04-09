<?php
namespace Avalonia\Rendering;
/**
 * @method \System\Void|void add_SceneInvalidated($value) [modifier: public]
 * @method \System\Void|void remove_SceneInvalidated($value) [modifier: public]
*/
interface IRenderer
{

	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public function AddDirty($visual);
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public function RecalculateChildren($visual);
	/**
	 * @param \Avalonia\Size $size
	 * @return \System\Void|void
	 */
	public function Resized($size);
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public function Paint($rect);
	/**
	 * @return \System\Void|void
	 */
	public function Start();
	/**
	 * @return \System\Void|void
	 */
	public function Stop();
	/**
	 * @param \System\Type $featureType
	 * @return \System\Threading\Tasks\ValueTask_1[System\Object]
	 */
	public function TryGetRenderInterfaceFeature($featureType);
}