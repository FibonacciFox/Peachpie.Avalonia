<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnMenuEvents
{
	/**
	 */
	public function NeedsUpdate();
	/**
	 */
	public function Opening();
	/**
	 */
	public function Closed();
}
