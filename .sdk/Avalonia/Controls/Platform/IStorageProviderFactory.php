<?php
namespace Avalonia\Controls\Platform;
interface IStorageProviderFactory
{

	/**
	 * @param \Avalonia\Controls\TopLevel $topLevel
	 * @return \Avalonia\Platform\Storage\IStorageProvider
	 */
	public function CreateProvider($topLevel);
}