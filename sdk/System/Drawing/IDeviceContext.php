<?php
namespace System\Drawing;
/**
 */
interface IDeviceContext
{
	/**
	 */
	public function GetHdc();
	/**
	 */
	public function ReleaseHdc();
}
