<?php
namespace System\Drawing\Printing;
/**
 */
class PreviewPrintController extends \System\Drawing\Printing\PrintController
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPreview;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $UseAntiAlias;
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseAntiAlias(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_UseAntiAlias($value){}
	/**
	 * @return \System\Drawing\Printing\PreviewPageInfo[]
	 */
	public  function GetPreviewPageInfo(){}
}
