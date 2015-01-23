# Assets Adapter for Blocks

Assets Adapter for Blocks is a third-party add-on that enables use of an
[Assets][assets] field within a [Blocks][eeblocks] block.

After installing the Assets Adapter for Blocks extension, Assets will appear
in the fieldtype selector when setting up block types.


## Requirements

* Assets 2.5 or greater
* Blocks 1.2.0 or greater
* ExpressionEngine 2.7 or greater


## Installation

* Copy `system/expressionengine/third_party/assets_adapter_for_blocks` to
  ExpressionEngine's third party folder. Click "Install" next to Assets
* Adapter for Blocks under the Extensions screen.


## How it Works

Blocks fieldtypes are based strongly on Grid fieldtype support. Assets has
Grid fieldtype support and is very close to supporting Blocks.

Assets Adapter for Blocks creates a shim that augments Assets with the few
small remaining changes that enable it to work seamlessly with Blocks.

The best part: if Assets ever supports Blocks in the future, Assets Adapter
for Blocks simply shuts itself off.


[assets]: https://devot-ee.com/add-ons/assets
[eeblocks]: https://eeblocks.com
