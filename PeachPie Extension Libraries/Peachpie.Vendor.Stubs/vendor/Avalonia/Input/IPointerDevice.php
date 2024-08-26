<?php
namespace Avalonia\Input;
interface IPointerDevice
{

	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $ev
	 * @return \Avalonia\Input\IPointer
	 */
	public function TryGetPointer($ev);
}