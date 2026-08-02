FROM mediawiki:1.43

RUN a2enmod rewrite

RUN git clone --depth 1 https://github.com/StarCitizenWiki/mediawiki-extensions-EmbedVideo.git /var/www/html/extensions/EmbedVideo
