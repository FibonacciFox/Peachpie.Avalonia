<?php
namespace Avalonia\Controls;
/**
 */
interface IResourceNode
{
	/**
	 */
	public function get_HasResources();
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& $value
	 */
	public function TryGetResource($key, $theme, $value);
}
