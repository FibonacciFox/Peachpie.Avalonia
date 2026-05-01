# Peachpie.Avalonia Rider Integration

This directory contains the first implementation steps for Rider support for PeachPie + Avalonia.

Current modules:
- `Peachpie.Avalonia.RiderModel` - project analysis model for PHP and `.axaml`
- `Peachpie.Avalonia.RiderCli` - CLI commands for `index`, `resolve`, and `complete`
- `Peachpie.Avalonia.RiderModel.Tests` - tests against samples and fixtures
- `Peachpie.Avalonia.RiderPlugin` - Rider plugin frontend skeleton that reads `.peachpie-rider/index.json`

Current MVP:
- index PHP classes in the project
- parse `.axaml`
- resolve `x:Class` and `x:DataType`
- validate binding paths against PHP view models
- build navigation targets for Rider
- expose index queries for navigation and completion

Planned next steps:
- connect Rider PSI references to the generated index
- provide Ctrl+Click navigation from `.axaml` to PHP
- provide binding completion in `.axaml`
- refresh the index automatically when project files change
