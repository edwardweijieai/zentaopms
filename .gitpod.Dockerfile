# koel setting
FROM gitpod/workspace-mysql:latest

ENV APACHE_DOCROOT_IN_REPO="www"


# FROM gitpod/workspace-full

# USER gitpod

# # @see https://www.gitpod.io/docs/languages/php/
# RUN sudo apt-get update -q \
#     && sudo apt-get install -y php-dev

# RUN wget http://xdebug.org/files/xdebug-2.9.1.tgz \
#     && tar -xvzf xdebug-2.9.1.tgz \
#     && cd xdebug-2.9.1 \
#     && phpize \
#     && ./configure \
#     && make \
#     && sudo mkdir -p /usr/lib/php/20190902 \
#     && sudo cp modules/xdebug.so /usr/lib/php/20190902 \
#     && sudo bash -c "echo -e '\nzend_extension = /usr/lib/php/20190902/xdebug.so\n[XDebug]\nxdebug.remote_enable = 1\nxdebug.remote_autostart = 1\n' >> /etc/php/7.4/cli/php.ini"

# COPY ./build/debian/zentaopms.conf /etc/apache2/zentaopms.conf

# RUN apt install mariadb mariadb-server

# Install custom tools, runtime, etc. using apt-get
# For example, the command below would install "bastet" - a command line tetris clone:
#
# RUN sudo apt-get -q update && \
#     sudo apt-get install -yq bastet && \
#     sudo rm -rf /var/lib/apt/lists/*
#
# More information: https://www.gitpod.io/docs/config-docker/
