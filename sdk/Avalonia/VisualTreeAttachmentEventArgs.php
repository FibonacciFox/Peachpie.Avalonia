<?php
namespace Avalonia;
/**
 */
class VisualTreeAttachmentEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\Visual
	 * @property
	 */
	public readonly $Parent;
	/**
	 * @var \Avalonia\Rendering\IRenderRoot
	 * @property
	 */
	public readonly $Root;
	/**
	 * @return \Avalonia\Visual
	 */
	public  function get_Parent(){}
	/**
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	public  function get_Root(){}
}
