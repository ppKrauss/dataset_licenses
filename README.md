# dataset licenses

List all useful ([non-vanity](https://en.wikipedia.org/wiki/License_proliferation#Vanity_licenses)) [licenses](https://en.wikipedia.org/wiki/Public_copyright_license), open and not-open, superseded or current, **to indexing any kind of cultural work** (documents, softwares, etc.), proprietary or not, that express a license,  or have an [implied license](https://en.wikipedia.org/wiki/Implied_license).

See [dataset proposal #118 for CSV of licenses](https://github.com/datasets/registry/issues/118).

## Data
Files described by [datapackage.json](./datapackage.json).

The [licenses.csv](./data/licenses.csv) have all relevant active licenses, and licences highlighted by *status* "superseded" or "retired".

Redundant licences are listed at [redundants.csv](./data/redundants.csv), relating with its equivalent (synonymous) licences, as illustred by the "Licenses that are redundant with more popular licenses" at [opensource.org/licenses/category](http://opensource.org/licenses/category). 

The [families.csv](./data/families.csv) is a complement of the family column in the `lincense.csv` dataset, for license aggregation (grouping similar licenses). It  offers also some "sort by openness degreee" criteria, and the column `scope` adds more one level of aggregation.

## Curated sources

There are 3 main (curated) sources of information for populate the datasets of this project,

* JSON materal at [okfn/licenses](https://github.com/okfn/licenses) and  [licenses.opendefinition.org](http://licenses.opendefinition.org/), are the main source.

* [Opensource.org "quick summaries"](http://opensource.org/licenses), at [tldrlegal.com](https://tldrlegal.com/licenses/browse). Example [MIT](https://www.tldrlegal.com/l/mit) or [GNU-affero](https://www.tldrlegal.com/l/agpl3).

* Wikipedia's [comparative license lists](https://en.wikipedia.org/wiki/Comparison_of_free_and_open-source_software_licenses), and  license articles (ex. [MIT](https://en.wikipedia.org/wiki/MIT_License) or [GNU-affero](https://en.wikipedia.org/wiki/Affero_General_Public_License)) and its [infobox metadadata](https://en.wikipedia.org/wiki/Template:Infobox_software_license).

Even with these (total or partial machine-readable) sources, there are some data and interpretations that not exist, so, the [Data Packaged Core Datasets](https://github.com/datasets) community need to check (handly) information from another sources.

### Implied licenses

The [implied license](https://en.wikipedia.org/wiki/Implied_license) is a general problem of license-document indexation, because we must to *point the documents license ID*, but have no idea about (exactly) what is the license. The "licence inference process" in general is time consuming, and oficial analysis have a cost... So we can retain a report with this oficial interpretation (or a community endorsement of the report) of document's context and its implied license. For relevant and big document repositories, like law (ex. [N-Lex](http://eur-lex.europa.eu/n-lex/) or [UK-legislation](http://www.legislation.gov.uk/browse)), one report is valid to full repository.

As solution, the report describing a implicit license need not be exact: some aggregation level can be used to express the license, that is, is sufficient to indicate the license's *family* (as defined by [okfn/licenses/issues/54](https://github.com/okfn/licenses/issues/54)). 

The [`implieds.csv`](./data/implieds.csv) is a list of legislative repository's licenses, a demand [motivated by](https://discuss.okfn.org/t/reflections-on-this-years-index/1338/13?u=ppkrauss) the [GODI/legislation datasets](http://index.okfn.org/dataset/legislation/), and an in-progress work. Each *implied license* need a report, like [implied-lex-BR-v1](https://github.com/ppKrauss/licenses/blob/master/reports/implied-lex-BR-v1.md) (the license used in ~790000 brazilian legistaltive documents) or  [implied-berne-v1971](https://github.com/ppKrauss/licenses/blob/master/reports/implied-berne-v1971.md) (the most used license in the world!).

The main reference work to these interpretations is the [commons.wikimedia.org/Copyright rules by territory](https://commons.wikimedia.org/wiki/Commons:Copyright_rules_by_territory). There are also, in the form of  [Public Domain Mark](https://wiki.creativecommons.org/wiki/PDM_FAQ) templates, some concrete licenses as [PD-Albania-exempt](https://commons.wikimedia.org/wiki/Template:PD-Albania-exempt), [PD-BrazilGov](https://commons.wikimedia.org/wiki/Template:PD-BrazilGov), [PD-GermanGov](https://commons.wikimedia.org/wiki/Template:PD-GermanGov)  etc. 
The Wikimedia's "rules by territory" reduce but not eliminates the need of reports, that resembles [jurisdiction ports](https://en.wikipedia.org/wiki/Creative_Commons_jurisdiction_ports), when necessary to describe specific details.


### Aggregation and families

IMPORTANTE: os atributos de reuso e domínio {is_noreuse,is_generic,domain_content,domain_data,domain_software} não serão utilizados na caracterização ou distinção entre famílias. Do ponto de vista dos direitos e obrigações do usuário final do produto licenseado, esses atributos não causam impacto. O reuso estabelece uma liberdade de cópia do documento-licença em si, que não é escopo da anãlise (o documento licenseado é o escopo). O domínio, ou seja, o tipo de produto ou aplicação do produto, é também indiferente às cláusulas relativas a direitos e obrigações.

As propriedades das licenças foram inspiradas nas "3.2 License Properties" de http://www.w3.org/Submission/ccREL/ 
(original em https://wiki.creativecommons.org/images/d/d6/Ccrel-1.0.pdf ) , que são propriedades das cláusulas contratuais relevantes da licença, fixando direitos e obrigações do licensente.

Benchmarking the popularidade de uma licença (ou versão) é estabelecido por média em mais de uma ferramenta de contagem. A busca no google por exemplo esbarra em contextualização e uso da string de busca sem ambiguidade. Para eventuais médias e comparações de popularidade, a referência é a "CC-BY-3.0", aparentemente a mais popular e reconhecida sem maiores ambiguidades.

## Preparation

As curated sources have no automatic merge process, and are all in-progress works, the best way to prepare is into a spreadsheet. So the preparations have two an initial organization steps, and the updating steps.

Initial preparation (concluded):

 1. With `php csv-conv.php > temp.csv` generates a basic csv file, from each [json at okfn/licenses/licenses](https://github.com/okfn/licenses/tree/master/licenses), that produced 80% of the data at [licenses.csv](./data/licenses.csv).

 2. In a spreadsheet add columns that are not in the original `okfn/licenses` dataset.

 3. Add lines from other sources, complementing the data in the spreadsheet.

Updating steps for preparation (in progress):

 1. open it in [the collaborative spreadsheet](https://docs.google.com/spreadsheets/d/17RwlPayXj2IBIBszp4wKMdK7OwwPqX125WmF3XFzM0A/edit?usp=sharing), making changes, using the curated sources.

 2. Make a clone (`git clone https://github.com/ppKrauss/licenses.git`) and save each spreadsheet part (lincenses, families, etc.) as CSV file in the `data` folder. If all ok, commit and make `git push` to update data folder.



