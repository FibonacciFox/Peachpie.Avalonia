<?php
namespace Avalonia\Platform;
interface IRuntimePlatform
{

	/**
	 * @return \Avalonia\Platform\RuntimePlatformInfo
	 */
	public function GetRuntimeInfo();
}