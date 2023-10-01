<?php
namespace Avalonia\Platform;
/**
 */
interface IRenderTarget
{
	/**
	 */
	public function CreateDrawingContext();
	/**
	 */
	public function get_IsCorrupted();
}
