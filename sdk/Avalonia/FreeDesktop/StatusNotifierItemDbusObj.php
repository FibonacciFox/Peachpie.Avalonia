<?php
namespace Avalonia\FreeDesktop;
/**
 */
class StatusNotifierItemDbusObj extends \Tmds\DBus\SourceGenerator\OrgKdeStatusNotifierItem implements 
	\Tmds\DBus\Protocol\IMethodHandler
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Path;
	/**
	 * @var \Tmds\DBus\SourceGenerator\OrgKdeStatusNotifierItem+Properties
	 * @property
	 */
	public readonly $BackingProperties;
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function add_ActivationDelegate($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function remove_ActivationDelegate($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function InvalidateAll(){}
	/**
	 * @param \System\ValueTuple_3 $dbusPixmap
	 * @return \System\Void|void
	 */
	public  function SetIcon($dbusPixmap){}
	/**
	 * @param \System\String|string $text
	 * @return \System\Void|void
	 */
	public  function SetTitleAndTooltip($text){}
}
