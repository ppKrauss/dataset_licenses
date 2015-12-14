# dataset licenses

List all useful ([non-vanity](https://en.wikipedia.org/wiki/License_proliferation#Vanity_licenses)) licenses, open and not-open, to indexing any kind of cultural work (documents, softwares, etc.).

See [dataset proposal #118 for CSV of licenses](https://github.com/datasets/registry/issues/118).

## Data
Files described by [datapackage.json](./datapackage.json).

The [licenses.csv](./data/licenses.csv) have all relevant active licenses, and licences highlighted by *status* "superseded" or "retired".

Redundant licences are listed at [redundant.csv](./data/redundant.csv), relating with its equivalent (synonymous) licences, as illustred by the "Licenses that are redundant with more popular licenses" at [opensource.org/licenses/category](http://opensource.org/licenses/category). 

The [family.csv](./data/family.csv) is a workaround, to reports or interfaces, that need some "sort by openness degreee" criteria. 


## Preparation

 1. With `php csv-conv.php > temp.csv` generates a fresh linceses.csv from each json at https://github.com/okfn/licenses/tree/master/licenses 

    1.1. Future diff or aditional algorithm (in `csv-conv.php`) to compare with supposed-equivalent [main data stored here](./data/licenses.csv).

 2. open it in [the collaborative worksheet](https://docs.google.com/spreadsheets/d/17RwlPayXj2IBIBszp4wKMdK7OwwPqX125WmF3XFzM0A/edit?usp=sharing), where the column "family" is in use and a field url_original was added.

 3. save as CSV here.

## Curated sources

There are 3 main (curated) sources of information for populate the datasets of this project,

* JSON materal at [okfn/licenses](https://github.com/okfn/licenses) and  [licenses.opendefinition.org](http://licenses.opendefinition.org/), are the main source.

* [Opensource.org "quick summaries"](http://opensource.org/licenses), at [tldrlegal.com](https://tldrlegal.com/licenses/browse). Example [MIT](https://www.tldrlegal.com/l/mit) or [GNU-affero](https://www.tldrlegal.com/l/agpl3).

* Wikipedia's license articles (ex. [MIT](https://en.wikipedia.org/wiki/MIT_License) or [GNU-affero](https://en.wikipedia.org/wiki/Affero_General_Public_License)) and its [infobox metadadata](https://en.wikipedia.org/wiki/Template:Infobox_software_license).

Even with these sources, there are some data and metadata interpretations that not exist, so, the [Data Packaged Core Datasets](https://github.com/datasets) community assumes this curatory rule.

### Implied licenses

The [implied license](https://en.wikipedia.org/wiki/Implied_license) is a general problem of license-document indexation, because we must to *point the documents license ID*, but have no idea about (exactly) what is the license. The "licence inference process" in general is time consuming, and oficial analysis have a cost... So we can retain a report with this oficial interpretation (or a community endorsement of the report) of document's context and its implied license. For relevant and big document repositories, like law (ex. [N-Lex](http://eur-lex.europa.eu/n-lex/) or [UK-legislation](http://www.legislation.gov.uk/browse)), one report is valid to full repository.

The [`implieds.csv`](./data/implieds.csv) is a list of legislative repository's licenses, a demand [motivated by](https://discuss.okfn.org/t/reflections-on-this-years-index/1338/13?u=ppkrauss) the [GODI/legislation datasets](http://index.okfn.org/dataset/legislation/), and an in-progress work. Each *implied license* need a report, like [implied-lex-BR-v1](https://github.com/ppKrauss/openCoherence2/blob/master/reports/implied-lex-BR-v1.md) or  [implied-berne-v1971](https://github.com/ppKrauss/openCoherence2/blob/master/reports/implied-berne-v1971.md).
