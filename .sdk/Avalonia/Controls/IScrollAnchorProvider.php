<?php
namespace Avalonia\Controls;
interface IScrollAnchorProvider
{


	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Void|void
	 */
	public function RegisterAnchorCandidate($element);
	/**
	 * @param \Avalonia\Controls\Control $element
	 * @return \System\Void|void
	 */
	public function UnregisterAnchorCandidate($element);
}