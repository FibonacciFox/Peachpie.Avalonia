<?php
namespace System\Drawing\Printing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PrinterSettingsMethodsOverride
{
	/**
	 * @return \System\Drawing\Graphics
	 */
	#[MethodOverride] public  function CreateMeasurementGraphics_1(){}
	/**
	 * @return \System\Drawing\Graphics
	 */
	#[MethodOverride] public  function CreateMeasurementGraphics_2($honorOriginAtMargins){}
	/**
	 * @return \System\Drawing\Graphics
	 */
	#[MethodOverride] public  function CreateMeasurementGraphics_3($pageSettings){}
	/**
	 * @return \System\Drawing\Graphics
	 */
	#[MethodOverride] public  function CreateMeasurementGraphics_4($pageSettings, $honorOriginAtMargins){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public  function GetHdevmode_1(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public  function GetHdevmode_2($pageSettings){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsDirectPrintingSupported_1($image){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsDirectPrintingSupported_2($imageFormat){}
}
/**
 */
class PrinterSettings extends \System\Object implements 
	\System\ICloneable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanDuplex;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Collate;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public $Copies;
	/**
	 * @var \System\Drawing\Printing\PageSettings
	 * @property
	 */
	public readonly $DefaultPageSettings;
	/**
	 * @var \System\Drawing\Printing\Duplex
	 * @property
	 */
	public $Duplex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $FromPage;
	/**
	 * @var \System\Drawing\Printing\PrinterSettings+StringCollection
	 * @property
	 */
	public readonly $InstalledPrinters;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDefaultPrinter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPlotter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsValid;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LandscapeAngle;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaximumCopies;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $MaximumPage;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $MinimumPage;
	/**
	 * @var \System\Drawing\Printing\PrinterSettings+PaperSizeCollection
	 * @property
	 */
	public readonly $PaperSizes;
	/**
	 * @var \System\Drawing\Printing\PrinterSettings+PaperSourceCollection
	 * @property
	 */
	public readonly $PaperSources;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PrinterName;
	/**
	 * @var \System\Drawing\Printing\PrinterSettings+PrinterResolutionCollection
	 * @property
	 */
	public readonly $PrinterResolutions;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PrintFileName;
	/**
	 * @var \System\Drawing\Printing\PrintRange
	 * @property
	 */
	public $PrintRange;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $PrintToFile;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $SupportsColor;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $ToPage;
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanDuplex(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Collate(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Collate($value){}
	/**
	 * @return \System\Int16
	 */
	public  function get_Copies(){}
	/**
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	public  function set_Copies($value){}
	/**
	 * @return \System\Drawing\Printing\PageSettings
	 */
	public  function get_DefaultPageSettings(){}
	/**
	 * @return \System\Drawing\Printing\Duplex
	 */
	public  function get_Duplex(){}
	/**
	 * @param \System\Drawing\Printing\Duplex $value
	 * @return \System\Void|void
	 */
	public  function set_Duplex($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_FromPage(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_FromPage($value){}
	/**
	 * @return \System\Drawing\Printing\StringCollection
	 */
	public static function get_InstalledPrinters(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDefaultPrinter(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsPlotter(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsValid(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LandscapeAngle(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaximumCopies(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaximumPage(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_MaximumPage($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MinimumPage(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_MinimumPage($value){}
	/**
	 * @return \System\Drawing\Printing\PaperSizeCollection
	 */
	public  function get_PaperSizes(){}
	/**
	 * @return \System\Drawing\Printing\PaperSourceCollection
	 */
	public  function get_PaperSources(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PrinterName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PrinterName($value){}
	/**
	 * @return \System\Drawing\Printing\PrinterResolutionCollection
	 */
	public  function get_PrinterResolutions(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PrintFileName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PrintFileName($value){}
	/**
	 * @return \System\Drawing\Printing\PrintRange
	 */
	public  function get_PrintRange(){}
	/**
	 * @param \System\Drawing\Printing\PrintRange $value
	 * @return \System\Void|void
	 */
	public  function set_PrintRange($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_PrintToFile(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_PrintToFile($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SupportsColor(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ToPage(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_ToPage($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @uses PrinterSettingsMethodsOverride::CreateMeasurementGraphics_1 ()
	 * @uses PrinterSettingsMethodsOverride::CreateMeasurementGraphics_2 ($honorOriginAtMargins)
	 * @uses PrinterSettingsMethodsOverride::CreateMeasurementGraphics_3 ($pageSettings)
	 * @uses PrinterSettingsMethodsOverride::CreateMeasurementGraphics_4 ($pageSettings, $honorOriginAtMargins)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateMeasurementGraphics(mixed ...$args){}
	/**
	 * @uses PrinterSettingsMethodsOverride::GetHdevmode_1 ()
	 * @uses PrinterSettingsMethodsOverride::GetHdevmode_2 ($pageSettings)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHdevmode(mixed ...$args){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetHdevnames(){}
	/**
	 * @uses PrinterSettingsMethodsOverride::IsDirectPrintingSupported_1 ($image)
	 * @uses PrinterSettingsMethodsOverride::IsDirectPrintingSupported_2 ($imageFormat)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsDirectPrintingSupported(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hdevmode
	 * @return \System\Void|void
	 */
	public  function SetHdevmode($hdevmode){}
	/**
	 * @param \System\IntPtr $hdevnames
	 * @return \System\Void|void
	 */
	public  function SetHdevnames($hdevnames){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
