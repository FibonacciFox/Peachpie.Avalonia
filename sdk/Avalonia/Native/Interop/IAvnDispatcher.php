<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnDispatcher
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnActionCallback $cb
	 */
	public function Post($cb);
}
