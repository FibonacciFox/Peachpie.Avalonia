<?php
namespace Avalonia\Rendering;
/**
 */
interface IRenderer
{
	/**
	 */
	public function get_Diagnostics();
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_SceneInvalidated($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_SceneInvalidated($value);
	/**
	 * @param \Avalonia\Visual $visual
	 */
	public function AddDirty($visual);
	/**
	 * @param \Avalonia\Visual $visual
	 */
	public function RecalculateChildren($visual);
	/**
	 * @param \Avalonia\Size $size
	 */
	public function Resized($size);
	/**
	 * @param \Avalonia\Rect $rect
	 */
	public function Paint($rect);
	/**
	 */
	public function Start();
	/**
	 */
	public function Stop();
	/**
	 * @param \System\Type $featureType
	 */
	public function TryGetRenderInterfaceFeature($featureType);
}
