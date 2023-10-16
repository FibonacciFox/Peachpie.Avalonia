<?php
namespace System;
/**
 */
enum SpecialFolder implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ApplicationData = 0;
	case CommonApplicationData = 2;
	case LocalApplicationData = 5;
	case Cookies = 5;
	case Desktop = 6;
	case Favorites = 7;
	case History = 8;
	case InternetCache = 9;
	case Programs = 11;
	case MyComputer = 13;
	case MyMusic = 14;
	case MyPictures = 16;
	case MyVideos = 17;
	case Recent = 19;
	case SendTo = 20;
	case StartMenu = 21;
	case Startup = 22;
	case System = 23;
	case Templates = 24;
	case DesktopDirectory = 25;
	case Personal = 26;
	case MyDocuments = 27;
	case ProgramFiles = 28;
	case CommonProgramFiles = 32;
	case AdminTools = 33;
	case CDBurning = 34;
	case CommonAdminTools = 35;
	case CommonDocuments = 36;
	case CommonMusic = 37;
	case CommonOemLinks = 38;
	case CommonPictures = 39;
	case CommonStartMenu = 40;
	case CommonPrograms = 41;
	case CommonStartup = 42;
	case CommonDesktopDirectory = 43;
	case CommonTemplates = 44;
	case CommonVideos = 45;
	case Fonts = 46;
	case NetworkShortcuts = 47;
	case PrinterShortcuts = 48;
	case UserProfile = 53;
	case CommonProgramFilesX86 = 54;
	case ProgramFilesX86 = 55;
	case Resources = 56;
	case LocalizedResources = 57;
	case SystemX86 = 58;
	case Windows = 59;
}
