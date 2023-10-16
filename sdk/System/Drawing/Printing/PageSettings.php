<?php
namespace System\Drawing\Printing;
/**
 */
class PageSettings extends \System\Object implements 
	\System\ICloneable
{
	/**
	 * @var \System\Drawing\Rectangle
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Color;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $HardMarginX;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $HardMarginY;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Landscape;
	/**
	 * @var \System\Drawing\Printing\Margins
	 * @property
	 */
	public $Margins;
	/**
	 * @var \System\Drawing\Printing\PaperSize
	 * @property
	 */
	public $PaperSize;
	/**
	 * @var \System\Drawing\Printing\PaperSource
	 * @property
	 */
	public $PaperSource;
	/**
	 * @var \System\Drawing\RectangleF
	 * @property
	 */
	public readonly $PrintableArea;
	/**
	 * @var \System\Drawing\Printing\PrinterResolution
	 * @property
	 */
	public $PrinterResolution;
	/**
	 * @var \System\Drawing\Printing\PrinterSettings
	 * @property
	 */
	public $PrinterSettings;
	/**
	 * @return \System\Drawing\Rectangle
	 */
	public  function get_Bounds(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Color(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Color($value){}
	/**
	 * @return \System\Single
	 */
	public  function get_HardMarginX(){}
	/**
	 * @return \System\Single
	 */
	public  function get_HardMarginY(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Landscape(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Landscape($value){}
	/**
	 * @return \System\Drawing\Printing\Margins
	 */
	public  function get_Margins(){}
	/**
	 * @param \System\Drawing\Printing\Margins $value
	 * @return \System\Void|void
	 */
	public  function set_Margins($value){}
	/**
	 * @return \System\Drawing\Printing\PaperSize
	 */
	public  function get_PaperSize(){}
	/**
	 * @param \System\Drawing\Printing\PaperSize $value
	 * @return \System\Void|void
	 */
	public  function set_PaperSize($value){}
	/**
	 * @return \System\Drawing\Printing\PaperSource
	 */
	public  function get_PaperSource(){}
	/**
	 * @param \System\Drawing\Printing\PaperSource $value
	 * @return \System\Void|void
	 */
	public  function set_PaperSource($value){}
	/**
	 * @return \System\Drawing\RectangleF
	 */
	public  function get_PrintableArea(){}
	/**
	 * @return \System\Drawing\Printing\PrinterResolution
	 */
	public  function get_PrinterResolution(){}
	/**
	 * @param \System\Drawing\Printing\PrinterResolution $value
	 * @return \System\Void|void
	 */
	public  function set_PrinterResolution($value){}
	/**
	 * @return \System\Drawing\Printing\PrinterSettings
	 */
	public  function get_PrinterSettings(){}
	/**
	 * @param \System\Drawing\Printing\PrinterSettings $value
	 * @return \System\Void|void
	 */
	public  function set_PrinterSettings($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\IntPtr $hdevmode
	 * @return \System\Void|void
	 */
	public  function CopyToHdevmode($hdevmode){}
	/**
	 * @param \System\IntPtr $hdevmode
	 * @return \System\Void|void
	 */
	public  function SetHdevmode($hdevmode){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
