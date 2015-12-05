# dataset_licenses
proposal for CSV of licenses, see https://github.com/datasets/registry/issues/118

List all useful ([non-vanity](https://en.wikipedia.org/wiki/License_proliferation#Vanity_licenses)) licenses, not only the open ones.  
Of course, the

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

There are 3 main (curatory) sources of information for populate the datasets of this project,

* JSON materal at [okfn/licenses](https://github.com/okfn/licenses). Is the main source.

* [Opensource.org "quick summaries"](http://opensource.org/licenses), at [tldrlegal.com](https://tldrlegal.com/licenses/browse). Example [MIT](https://www.tldrlegal.com/l/mit) or [GNU-affero](https://www.tldrlegal.com/l/agpl3).

* Wikipedia's license articles (ex. [MIT](https://en.wikipedia.org/wiki/MIT_License) or [GNU-affero](https://en.wikipedia.org/wiki/Affero_General_Public_License)) and its [infobox metadadata](https://en.wikipedia.org/wiki/Template:Infobox_software_license).

Even with these sources, there are some data and metadata interpretations that not exist, so, the [Data Packaged Core Datasets](https://github.com/datasets) community assumes this curatory rule.

