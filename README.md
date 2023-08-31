# Fields as Tags

Fields as Tags enables to show certain metadata fields as traditional browsable tags, in a way similar to that in Omeka Classic.

This module uses the settings from MetadataBrowse, from which it takes the fields to be used as tags.

This development was originally commissioned for the project [**HistSex.org**](https://HistSex.org), funded by ***American Library Association's Carnegie-Whitney Grant***.

![Browsable tags](https://assets.libnamic.com/omeka/modules/Omeka-S-FieldAsTags/1.png)

The tags will be shown next to the field name and will be browsable.

There are two ways to use the module:
* If the default theme is used, the item browse view will automatically include the tags when listing the items:
![Browsable tags](https://assets.libnamic.com/omeka/modules/Omeka-S-FieldAsTags/2.png)
* The module also includes a page block, that can be used with any theme:
![Browsable tags](https://assets.libnamic.com/omeka/modules/Omeka-S-FieldAsTags/3.png)

The browsable fields are retrieved from the MetadataBrowse module settings. If the site has any configured, those will be used. Otherwise, if the global setting is enabled in Metadata Browse, those fields will be used.

See the [Omeka S user manual](http://omeka.org/s/docs/user-manual/modules/) for user documentation.

## Installation
Uncompress files from release zip or clone repository and rename module folder to FieldsAsTags.

See Omeka S end user documentation for Installing a module in Omeka S and follow the instructions.


## Maintainer


This module is developed and maintained by [Libnamic].
* [Libnamic in Github]
* [Jesús Bocanegra in Github]

## License


This module is published under the MIT License.

## Copyright

* Copyright Jesús Bocanegra Linares, Libnamic, 2023


[Libnamic]: https://digitalhumanities.libnamic.com/?ref=Omeka-S-FieldAsTags&pos=readme
[Module Support]: https://github.com/Libnamic/Omeka-S-FieldAsTags/issues
[Omeka S]: https://omeka.org/s
[Installing a module in Omeka S]: http://dev.omeka.org/docs/s/user-manual/modules/#installing-modules
[Libnamic in Github]: https://github.com/Libnamic "Libnamic"
[Jesús Bocanegra in Github]: https://github.com/Boca13 "Jesús Bocanegra"
