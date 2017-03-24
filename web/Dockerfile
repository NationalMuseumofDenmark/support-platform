FROM abiosoft/caddy:0.9.5-php

ADD Caddyfile /etc/Caddyfile
RUN apk add --no-cache php7-mbstring

ENV \
  LIVEZILLA_VERSION="7.0.2.8" \
  LIVEZILLA_SHASUM="3eb88d67125852e0e22dde4f3711d317cb728d1e98f2d62bf6d80c13ab033fbe"

ENV \
  LIVEZILLA_URL="https://www.livezilla.net/downloads/pubfiles/livezilla_server_${LIVEZILLA_VERSION}.zip" \
  LIVEZILLA_FILENAME="livezilla_server_${LIVEZILLA_VERSION}.zip"

WORKDIR /srv

ADD ${LIVEZILLA_URL} ${LIVEZILLA_FILENAME}

RUN \
  (echo "${LIVEZILLA_SHASUM}  ${LIVEZILLA_FILENAME}" | sha256sum -c -) && \
  unzip "${LIVEZILLA_FILENAME}"

ADD etc/php/conf.d/override-php.ini /etc/php7/conf.d

ADD livezilla/_config livezilla/_config
ADD livezilla/_language livezilla/_language

RUN rm -rf /srv/livezilla/install

CMD ["--conf", "/etc/Caddyfile", "--log", "stdout", "--ca", "https://acme-staging.api.letsencrypt.org/directory", "--agree"]
