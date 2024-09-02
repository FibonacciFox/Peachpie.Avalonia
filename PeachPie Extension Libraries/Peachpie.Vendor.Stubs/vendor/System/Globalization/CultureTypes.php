<?php
namespace System\Globalization;
enum CultureTypes
{
	
	case NeutralCultures = '1';
	case SpecificCultures = '2';
	case InstalledWin32Cultures = '4';
	case AllCultures = '7';
	case UserCustomCulture = '8';
	case ReplacementCultures = '16';
	case WindowsOnlyCultures = '32';
	case FrameworkCultures = '64';

}