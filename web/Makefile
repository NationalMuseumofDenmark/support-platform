VERSION ?= latest

deploy: volume volume-claim deployment service

volume: gce/volume.yml
	kubectl apply -f $<

volume-claim: gce/volume-claim.yml volume
	kubectl apply -f $<

deployment: gce/deployment.yml volume-claim
	kubectl apply -f $<

service: gce/service.yml deployment
	kubectl apply -f $<

build:
	docker build -t eu.gcr.io/natmus-support-platform/livezilla-web:$(VERSION) .

push:
	gcloud docker -- push eu.gcr.io/natmus-support-platform/livezilla-web:$(VERSION)
