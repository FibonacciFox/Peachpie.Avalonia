<?php
namespace Avalonia\Controls\Platform;
/**
 */
interface IStorageProviderFactory
{
	/**
	 * @param \Avalonia\Controls\TopLevel $topLevel
	 */
	public function CreateProvider($topLevel);
}
