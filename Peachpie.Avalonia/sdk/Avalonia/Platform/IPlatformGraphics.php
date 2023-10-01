<?php
namespace Avalonia\Platform;
/**
 */
interface IPlatformGraphics
{
	/**
	 */
	public function get_UsesSharedContext();
	/**
	 */
	public function CreateContext();
	/**
	 */
	public function GetSharedContext();
}
