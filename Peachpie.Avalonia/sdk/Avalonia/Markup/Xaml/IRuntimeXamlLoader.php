<?php
namespace Avalonia\Markup\Xaml;
/**
 */
interface IRuntimeXamlLoader
{
	/**
	 * @param \Avalonia\Markup\Xaml\RuntimeXamlLoaderDocument $document
	 * @param \Avalonia\Markup\Xaml\RuntimeXamlLoaderConfiguration $configuration
	 */
	public function Load($document, $configuration);
}
