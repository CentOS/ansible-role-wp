WP_THEME_NAME    := wordpress-theme-centos
WP_THEME_VERSION := v1.0.2
WP_THEMES_DIR    := ./templates/theme/

all:

.PHONY: update-theme-files
update-theme-files:
	podman run -d --name $(WP_THEME_NAME) --rm registry.gitlab.com/centos/artwork/centos-web/$(WP_THEME_NAME):$(WP_THEME_VERSION) sleep 3600
	podman cp $(WP_THEME_NAME):/srv/$(WP_THEME_NAME)/ /tmp/
	podman stop -l -t=0
	rsync -avc --delete /tmp/$(WP_THEME_NAME)/ $(WP_THEMES_DIR)
	$(RM) -rf /tmp/$(WP_THEME_NAME)/
