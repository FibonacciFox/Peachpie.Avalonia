<?php
namespace Avalonia\Platform;
interface IPlatformGraphics
{

	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	public function CreateContext();
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	public function GetSharedContext();
}