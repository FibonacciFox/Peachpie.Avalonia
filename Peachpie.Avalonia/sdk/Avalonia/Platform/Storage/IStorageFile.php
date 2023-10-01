<?php
namespace Avalonia\Platform\Storage;
/**
 */
interface IStorageFile
{
	/**
	 */
	public function OpenReadAsync();
	/**
	 */
	public function OpenWriteAsync();
}
