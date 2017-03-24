deploy: secrets
	$(MAKE) -C mariadb deploy
	$(MAKE) -C web deploy

secrets: gce/secrets.yml
	kubectl apply -f $<

build:
	$(MAKE) -C mariadb build
	$(MAKE) -C web build

push:
	$(MAKE) -C mariadb push
	$(MAKE) -C web push
