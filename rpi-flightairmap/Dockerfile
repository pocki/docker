FROM schoeffm/rpi-nginx-php5

MAINTAINER pocki

WORKDIR /usr/share/nginx

RUN apt-get update && \
    apt-get install -y php5-sqlite mysql-client pkg-config ca-certificates git-core inetutils-ping  --no-install-recommends && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN git clone --depth 1 https://github.com/Ysurac/FlightAirMap.git && \
    cd FlightAirMap

RUN chown -R www-data /usr/share/nginx/FlightAirMap && \
    rm /etc/nginx/sites-enabled/default

COPY nginx_host.conf /etc/nginx/sites-enabled/nginx_host.conf
COPY settings.php /usr/share/nginx/FlightAirMap/require/settings.php
COPY startup.sh /opt/startup.sh

RUN chmod 0755 /opt/startup.sh

CMD /opt/startup.sh
