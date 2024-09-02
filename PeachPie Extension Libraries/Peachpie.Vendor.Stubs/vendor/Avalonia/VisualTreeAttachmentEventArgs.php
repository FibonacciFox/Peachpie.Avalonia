<?php
namespace Avalonia;
class VisualTreeAttachmentEventArgs extends \System\EventArgs
{
	/**
	 * @property
	 * @var \Avalonia\Visual
	 * @since readonly
	 */
	public $Parent;
	/**
	 * @property
	 * @var \Avalonia\Rendering\IRenderRoot
	 * @since readonly
	 */
	public $Root;
	/**
	 * @param \Avalonia\Visual $parent
	 * @param \Avalonia\Rendering\IRenderRoot $root
	 */
	public function __construct($parent, $root){}
}