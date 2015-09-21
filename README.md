# dataset_licenses
proposal for CSV of licenses, see https://github.com/datasets/registry/issues/118

The [licenses.csv](./data/licenses.csv) have all licenses, [datapackage.json](./datapackage.json) its metadata.

## Preparation

1. With `php csv-conv.php > temp.csv` generates a fresh linceses.csv from each json at https://github.com/okfn/licenses/tree/master/licenses 

2. open it in [the collaborative worksheet](https://docs.google.com/spreadsheets/d/17RwlPayXj2IBIBszp4wKMdK7OwwPqX125WmF3XFzM0A/edit?usp=sharing), where the column "family" is in use and a field url_original was added.

3. save as CSV here.

NOTE: to check and compare news on JSON or two CSVs, there are an adaptation of csv-conv.php to do this tasks.  

