<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnAutomationNode
{
	/**
	 */
	public function Dispose();
	/**
	 */
	public function ChildrenChanged();
	/**
	 * @param \Avalonia\Native\Interop\AvnAutomationProperty $property
	 */
	public function PropertyChanged($property);
	/**
	 */
	public function FocusChanged();
}
