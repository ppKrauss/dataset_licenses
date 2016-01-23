# dataset licenses
Comprehensive  set of all useful ([non-vanity](https://en.wikipedia.org/wiki/License_proliferation#Vanity_licenses)) [licenses](https://en.wikipedia.org/wiki/Public_copyright_license), open and proprietary, superseded or current, **to indexing any kind of cultural work** (documents, softwares, etc.), that express a license,  or have a [generic implied license](https://en.wikipedia.org/wiki/Implied_license).

See [dataset proposal #118 for CSV of licenses](https://github.com/datasets/registry/issues/118).

## Data
Files described by [datapackage.json](./datapackage.json).

The [licenses.csv](./data/licenses.csv) have all relevant active licenses, and licenses highlighted by *status* "superseded" or "retired".

Redundant licenses are listed at [redundants.csv](./data/redundants.csv), relating with its equivalent (synonymous) licenses, as illustred by the "Licenses that are redundant with more popular licenses" at [opensource.org/licenses/category](http://opensource.org/licenses/category). 

The [families.csv](./data/families.csv) is a complement of the family column in the `lincense.csv` dataset, for license aggregation (grouping similar licenses). It  offers also some "sort by openness degreee" criteria, and the column `scope` adds more one level of aggregation.

## Curated sources

There are 2 main (curated) sources of information for populate the datasets of this project,

* [okfn/licenses](https://github.com/okfn/licenses) ([CSV file](https://github.com/okfn/licenses/blob/master/licenses.csv)) and   [licenses.opendefinition.org](http://licenses.opendefinition.org/), the main source.

* Wikipedia's [comparative license lists](https://en.wikipedia.org/wiki/Comparison_of_free_and_open-source_software_licenses), [list of free content licenses](https://en.wikipedia.org/wiki/List_of_free_content_licenses) and  the license articles (ex. [MIT](https://en.wikipedia.org/wiki/MIT_License) or [GNU-affero](https://en.wikipedia.org/wiki/Affero_General_Public_License)), each with its [infobox metadadata](https://en.wikipedia.org/wiki/Template:Infobox_software_license).

And other primary or secondary sources

* [GNU's Licenses and Comments about Them](http://www.gnu.org/licenses/license-list.en.html), focused on software.

* [Opensource.org "quick summaries"](http://opensource.org/licenses), at [tldrlegal.com](https://tldrlegal.com/licenses/browse). Example [MIT](https://www.tldrlegal.com/l/mit) or [GNU-affero](https://www.tldrlegal.com/l/agpl3).

Even with these (total or partial machine-readable) sources, there are some data and interpretations that not exist, so, the [Data Packaged Core Datasets](https://github.com/datasets) community need to check (handly) information from another sources.

### Implied licenses

The [implied license](https://en.wikipedia.org/wiki/Implied_license) is a general problem of license-document indexation, because we must to *point the document's license ID*, but have no idea about (exactly) what is the license. The "license inference process" in general is time consuming, and oficial analysis have a cost... So we can retain a report with this oficial interpretation (or a community endorsement of the report) of document's context and its implied license. For relevant and big document repositories, like law (ex. [LexML](http://projeto.lexml.gov.br/documentacao/resumo-em-ingles) or  a [N-Lex country](http://eur-lex.europa.eu/n-lex/)), one report is valid to the full repository.

As solution, the report describing a implicit license need not be exact: some aggregation level can be used to express the license, that is, is sufficient to indicate the license's *family* (as defined by [okfn/licenses/issues/54](https://github.com/okfn/licenses/issues/54)). 

The [`implieds.csv`](./data/implieds.csv) is a list of legislative repository's licenses, a demand [motivated by](https://discuss.okfn.org/t/reflections-on-this-years-index/1338/13?u=ppkrauss) the [GODI/legislation datasets](http://index.okfn.org/dataset/legislation/), and an in-progress work. Each *implied license* need a report, like [implied-lex-BR-v1](https://github.com/ppKrauss/licenses/blob/master/reports/implied-lex-BR-v1.md) (the license used in ~790000 brazilian legistaltive documents) or  [implied-berne-v1971](https://github.com/ppKrauss/licenses/blob/master/reports/implied-berne-v1971.md) (the most used license in the world!).

The main reference work to these interpretations is the [commons.wikimedia.org/Copyright rules by territory](https://commons.wikimedia.org/wiki/Commons:Copyright_rules_by_territory). There are also, in the form of  [Public Domain Mark](https://wiki.creativecommons.org/wiki/PDM_FAQ) templates, some concrete licenses as [PD-Albania-exempt](https://commons.wikimedia.org/wiki/Template:PD-Albania-exempt), [PD-BrazilGov](https://commons.wikimedia.org/wiki/Template:PD-BrazilGov), [PD-GermanGov](https://commons.wikimedia.org/wiki/Template:PD-GermanGov)  etc. 
The Wikimedia's "rules by territory" reduce but not eliminates the need of reports, that resembles [jurisdiction ports](https://en.wikipedia.org/wiki/Creative_Commons_jurisdiction_ports), when necessary to describe specific details.


### Aggregation and families
The purpose of [licenses.csv](https://github.com/ppKrauss/licenses/blob/master/data/licenses.csv) is to concentrate all relevant licenses in one dataset of license metadata. We perceive here both, the high diversity in the number of lines of the file, and  the ability to highlight differences, in the number of columns. For users, the next step and  demand, is to group similar licenses. 

Some fields can be used as key-group. We can use `domain_*` to "select by domain", or `mantainer` to group licenses "by brand".  Using more than one field and some conditions we can "select by similar contract clauses"; fields `is_by`, `is_sa`, `is_salink` and `is_nd` do this role &mdash; the set of fields about clauses was inspired in the ["License Properties" of the ccREL, sec. 3.2](http://www.w3.org/Submission/ccREL/).

To group licenses by similar contract clauses we can use also a standard selection process, with some curatory revision: this is the rule of the `family` field, it is a functional grouping of licenses.

NOTE: the field `is_ref=2` is a control flag to indicate the "most popular representative" of each family, that is a kind of *[canonical](https://en.wikipedia.org/wiki/Canonicalization#Biological_taxonomy) license*, and is used also as family-label. The suffix "*" in the family label indicates "some little restrictions more than the no-suffix family". The field `is_ref=1` is a control flag to indicate the "default in the brand" (to resolve references without version or other maintainer/family/version ambiguities). 

## Preparation

As curated sources have no automatic merge process, and are all in-progress works, the best way to prepare is into a spreadsheet. So the preparations have two an initial organization steps, and the updating steps.

 1. Check if *okfn/licenses* or Wikipedia license-medadata was updated.  Witch `php csv-conv.php > temp.csv`, that generates a basic csv file from each [json at okfn/licenses/licenses](https://github.com/okfn/licenses/tree/master/licenses), we can check the  [CSV file](https://github.com/okfn/licenses/blob/master/licenses.csv) while it is not updated.  Other software may be developed to extract data and check updates from Wikipedia.

 2. open it in [the collaborative spreadsheet](https://docs.google.com/spreadsheets/d/17RwlPayXj2IBIBszp4wKMdK7OwwPqX125WmF3XFzM0A/edit?usp=sharing), making changes, using the curated sources.

 3. Make a clone (`git clone https://github.com/ppKrauss/licenses.git`) and save each spreadsheet part (lincenses, families, etc.) as CSV file in the `data` folder. If all ok, commit and make `git push` to update data folder.

