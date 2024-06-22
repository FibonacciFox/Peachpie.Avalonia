<?php
namespace Avalonia\Controls;
interface IResourceNode
{


	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetResource($key, $theme, &$value);
}