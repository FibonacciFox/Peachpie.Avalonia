<?php
namespace Avalonia\Media;
/**
 */
interface IExperimentalAcrylicMaterial
{
	/**
	 */
	public function get_BackgroundSource();
	/**
	 */
	public function get_TintColor();
	/**
	 */
	public function get_TintOpacity();
	/**
	 */
	public function get_MaterialColor();
	/**
	 */
	public function get_FallbackColor();
}
