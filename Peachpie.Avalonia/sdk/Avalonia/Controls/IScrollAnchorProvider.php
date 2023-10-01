<?php
namespace Avalonia\Controls;
/**
 */
interface IScrollAnchorProvider
{
	/**
	 */
	public function get_CurrentAnchor();
	/**
	 * @param \Avalonia\Controls\Control $element
	 */
	public function RegisterAnchorCandidate($element);
	/**
	 * @param \Avalonia\Controls\Control $element
	 */
	public function UnregisterAnchorCandidate($element);
}
