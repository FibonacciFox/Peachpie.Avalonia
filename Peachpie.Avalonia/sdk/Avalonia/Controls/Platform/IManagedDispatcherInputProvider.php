<?php
namespace Avalonia\Controls\Platform;
/**
 */
interface IManagedDispatcherInputProvider
{
	/**
	 */
	public function get_HasInput();
	/**
	 */
	public function DispatchNextInputEvent();
}
