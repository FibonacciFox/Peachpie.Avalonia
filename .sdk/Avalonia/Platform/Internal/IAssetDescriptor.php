<?php
namespace Avalonia\Platform\Internal;
interface IAssetDescriptor
{

	/**
	 * @return \System\IO\Stream
	 */
	public function GetStream();
}