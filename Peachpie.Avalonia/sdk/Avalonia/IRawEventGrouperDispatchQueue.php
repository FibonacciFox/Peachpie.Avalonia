<?php
namespace Avalonia;
/**
 */
interface IRawEventGrouperDispatchQueue
{
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $args
	 * @param \System\Action_1 $handler
	 */
	public function Add($args, $handler);
}
