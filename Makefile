deploy: secrets
	$(MAKE) -C mariadb deploy

secrets: gce/secrets.yml
	kubectl apply -f $<

build:
	$(MAKE) -C mariadb build

push:
	$(MAKE) -C mariadb push
