# Support Platform

> ...

## Usage

...

## Install

Requires `gcloud` installed to deploy containers to GKE.

```sh
gcloud config set account 'ACCOUNT'
gcloud config set project 'PROJECT'
gcloud config set compute/zone 'ZONE'
gcloud config set container/cluster 'GKE_CLUSTER'
gcloud container clusters get-credentials 'GKE_CLUSTER'

make
```

### Adding MariaDB for development

For the MariaDB container to work (which is discourage in production), you need
a Kubernetes `PersistentVolume` backed by a Google Cloud Persistent Disk.

```sh
gcloud compute disks create --size 200GB livezilla-mariadb
```
