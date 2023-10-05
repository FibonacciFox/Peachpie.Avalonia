<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class SaturationEffect extends \Avalonia\Win32\WinRT\Composition\WinUIEffectBase implements 
	\Avalonia\Win32\WinRT\IInspectable,
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\Avalonia\Win32\WinRT\IGraphicsEffect,
	\Avalonia\Win32\WinRT\IGraphicsEffectSource,
	\Avalonia\Win32\WinRT\IGraphicsEffectD2D1Interop
{
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $EffectId;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $PropertyCount;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $SourceCount;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $RuntimeClassName;
	/**
	 * @var \Avalonia\Win32\WinRT\TrustLevel
	 * @property
	 */
	public readonly $TrustLevel;
	/**
	 * @var \MicroCom\Runtime\MicroComShadow
	 * @property
	 */
	public $Shadow;
}
